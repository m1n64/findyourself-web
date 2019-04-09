$(function () {

    'use strict';

    var globi = 0;

    var opacity = 0.8;

    window.chartColors = {
        withAlpha: {
            red: 'rgba(255, 99, 132, ' + opacity + ')',
            orange: 'rgba(255, 159, 64, ' + opacity + ')',
            yellow: 'rgba(255, 205, 86, ' + opacity + ')',
            green: 'rgba(75, 192, 192, ' + opacity + ')',
            blue: 'rgba(54, 162, 235, ' + opacity + ')',
            purple: 'rgba(153, 102, 255, ' + opacity + ')',
            grey: 'rgba(201, 203, 207, ' + opacity + ')'
    },
        withoutAlpha: {
            red: 'rgb(255, 99, 132)',
            orange: 'rgb(255, 159, 64)',
            yellow: 'rgb(255, 205, 86)',
            green: 'rgb(75, 192, 192)',
            blue: 'rgb(54, 162, 235)',
            purple: 'rgb(153, 102, 255)',
            grey: 'rgb(201, 203, 207)'
        }
    };

    var real = 0,
        int = 0,
        soc = 0,
        konv = 0,
        pred = 0,
        art = 0;

    function IncRes(q, f, k) {
        for (var i in f) {
            if (q == f[i])
                k++;
        }
        
        return k;
    }

    function SetBall(q) {
        var a = ["1a", "2a", "3a", "4a", "5a", "16a", "17a", "18a", "19a", "20a", "31a", "32a", "33a", "34a", "35a"];
        var b = ["1b", "6a", "7a", "8a", "9a", "16b", "21a", "22a", "23a", "24a", "31b", "36a", "37a", "38a", "39a"];
        var c = ["2b", "6b", "10a", "11a", "12a", "17b", "21b", "25a", "26a", "27a", "32b", "36b", "40a", "41a", "42a"];
        var d = ["3b", "7b", "10b", "13a", "14a", "18b", "22b", "25b", "28a", "29a", "33b", "37b", "40b", "43a"];
        var e = ["4b", "8b", "11b", "13b", "15a", "19b", "23b", "26b", "28b", "30a", "34b", "38b", "41b", "43b"];
        var f = ["5b", "9b", "12b", "14b", "15b", "20b", "24b", "27b", "29b", "30b", "35b", "39b", "42b"];

        real = IncRes(q, a, real);
        int = IncRes(q, b, int);
        soc = IncRes(q, c, soc);
        konv = IncRes(q, d, konv);
        pred = IncRes(q, e, pred);
        art = IncRes(q, f, art);

    }


    Resize();
    $('.dropdown-trigger').dropdown();

    load(globi);

    $(document).on("click", ".variant", function () {
        
        if (globi <= 10) {
            let $from = $(this).attr("from");
            let $q = $(this).attr("id");
            $q = $q.replace("q", "") + $from;
            SetBall($q);
            $("#quest" + globi).remove();
            ++globi;
            load(globi);
            
            CheckResult();
        } else {
            $("#quest" + globi).remove();
            FinalResult();
        }

    });

    function FinalResult(){
        real = Math.round((real / 15) * 100);
        int = Math.round((int / 15) * 100);
        soc = Math.round((soc / 15) * 100);
        konv = Math.round((konv / 14) * 100);
        pred = Math.round((pred / 14) * 100);
        art = Math.round((art / 13) * 100);
        
        CheckResult();
        
        $(".my-type").animate({
            opacity: 1.0
        }, 500);
        
        $(".my-type-description").show();

        var log = new Log(JSON.stringify(Sniff), location.href + "::test-result::[" + JSON.stringify(dataTest) + "]");
        log.SaveLog();
    }
    
    function CheckResult() {


        let windowWidth = $(window).width();
        var displaylegend = {
            responsive: true,
            legend: {
                display: true
            }
        };
        if (windowWidth < 600) {
            displaylegend = {
                responsive: true,
                legend: {
                    display: false
                }
            };
        }

        var dataTest = {
            result: [real, int, soc, konv, pred, art]
        };

        var options = {
            type: 'pie',
            data: {
                labels: ["Реалистический, %", "Интеллектуальный, %", "Социальный, %", "Конвенциальный, %", "Предприимчивый, %", "Артистичный, %"],
                datasets: [{
                    label: '# of Votes',
                    data: dataTest.result,
                    backgroundColor: [
                        window.chartColors.withAlpha.grey,
                        window.chartColors.withAlpha.blue,
                        window.chartColors.withAlpha.orange,
                        window.chartColors.withAlpha.red,
                        window.chartColors.withAlpha.green,
                        window.chartColors.withAlpha.yellow
                    ],
                    borderColor: [
                        window.chartColors.withoutAlpha.grey,
                        window.chartColors.withoutAlpha.blue,
                        window.chartColors.withoutAlpha.orange,
                        window.chartColors.withoutAlpha.red,
                        window.chartColors.withoutAlpha.green,
                        window.chartColors.withoutAlpha.yellow
                    ],
                    borderWidth: 1
                }]
            },
            options: displaylegend
        };

        var ctx = document.getElementById("chart").getContext('2d');

        if (real > 0 || int > 0 || soc > 0 || konv > 0 || pred > 0 || art > 0) {
            var myChart = new Chart(ctx, options);
            
            let max = Math.max(real, int, soc, konv, pred, art);

            let to = $(".my-type > b");

            switch (max) {
                case real:
                    to.html("Ваш тип: Реалистический");
                    break;
                case int:
                    to.html("Ваш тип: Интеллектуальный");
                    break;
                case soc:
                    to.html("Ваш тип: Социальный");
                    break;
                case konv:
                    to.html("Ваш тип: Конвенциальный");
                    break;
                case pred:
                    to.html("Ваш тип: Предприимчивый");
                    break;
                case art:
                    to.html("Ваш тип: Артистичный");
                    break;
               }
        }
    }

//        $("#result").click(function () {
//            try {
//                real = Math.round((real / 15) * 100);
//                int = Math.round((int / 15) * 100);
//                soc = Math.round((soc / 15) * 100);
//                konv = Math.round((konv / 14) * 100);
//                pred = Math.round((pred / 14) * 100);
//                art = Math.round((art / 13) * 100);
//
//                let windowWidth = $(window).width();
//                var displaylegend = {
//                    responsive: true,
//                    legend: {
//                        display: true
//                    }
//                };
//                if (windowWidth < 600) {
//                    displaylegend = {
//                        responsive: true,
//                        legend: {
//                            display: false
//                        }
//                    };
//                }
//
//                var dataTest = {
//                    result: [real, int, soc, konv, pred, art]
//                };
//
//                var options = {
//                    type: 'pie',
//                    data: {
//                            labels: ["Реалистический, %", "Интеллектуальный, %", "Социальный, %", "Конвенциальный, %", "Предприимчивый, %", "Артистичный, %"],
//                                datasets: [{
//                            label: '# of Votes',
//                            data: dataTest.result,
//                            backgroundColor: [
//                                    window.chartColors.withAlpha.grey,
//                                    window.chartColors.withAlpha.blue,
//                                    window.chartColors.withAlpha.orange,
//                                    window.chartColors.withAlpha.red,
//                                    window.chartColors.withAlpha.green,
//                                    window.chartColors.withAlpha.yellow
//                                ],
//                                borderColor: [
//                                    window.chartColors.withoutAlpha.grey,
//                                    window.chartColors.withoutAlpha.blue,
//                                    window.chartColors.withoutAlpha.orange,
//                                    window.chartColors.withoutAlpha.red,
//                                    window.chartColors.withoutAlpha.green,
//                                    window.chartColors.withoutAlpha.yellow
//                                ],
//                                borderWidth: 1
//                            }]
//                        },
//                        options: displaylegend
//                    };
//
//
//                    var ctx = document.getElementById("chart").getContext('2d');
//
//                    if (real > 0 || int > 0 || soc > 0 || konv > 0 || pred > 0 || art > 0) {
//                        var myChart = new Chart(ctx, options);
//                        let max1 = Math.max(real, int);
//                        let max2 = Math.max(soc, konv);
//                        let max3 = Math.max(pred, art);
//                        let max4 = Math.max(max1, max2);
//                        let max = Math.max(max3, max4);
//
//                        let to = $(".my-type > b");
//
//                        switch (max) {
//                            case real:
//                                to.html("Ваш тип: Реалистический");
//                                break;
//                            case int:
//                                to.html("Ваш тип: Интеллектуальный");
//                                break;
//                            case soc:
//                                to.html("Ваш тип: Социальный");
//                                break;
//                            case konv:
//                                to.html("Ваш тип: Конвенциальный");
//                                break;
//                            case pred:
//                                to.html("Ваш тип: Предприимчивый");
//                                break;
//                            case art:
//                                to.html("Ваш тип: Артистичный");
//                                break;
//                        }
//
//                        $(".my-type").animate({
//                            opacity: 1.0
//                        }, 500);
//                        $(".my-type-description").show();
//
//                        var log = new Log(JSON.stringify(Sniff), location.href + "::test-result::[" + JSON.stringify(dataTest) + "]");
//                            log.SaveLog();
//
//                        } else
//                    M.toast({
//                        html: "Пожалуйста, пройдите тест!"
//                    });
//            } catch (ex) {
//                showError(ex);
//            }
//        });
})(jQuery);
