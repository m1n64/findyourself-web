(function () {
    "use strict";

    document.addEventListener('deviceready', onDeviceReady.bind(this), false);

    function onDeviceReady() {
        // Обработка событий приостановки и возобновления Cordova
        document.addEventListener('pause', onPause.bind(this), false);
        document.addEventListener('resume', onResume.bind(this), false);

        //var URL = "https://findyourselfbeta.000webhostapp.com/";
        var URL = "http://project/";

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


        navigator.geolocation.getCurrentPosition(onSuccess);

        StatusBar.backgroundColorByHexString("#2196f3");
        StatusBar.styleLightContent();

        
        // TODO: Платформа Cordova загружена. Выполните здесь инициализацию, которая требуется Cordova.
        $(document).ready(function () {
            $('.sidenav').sidenav({
                onOpenStart: function() {
                    StatusBar.backgroundColorByHexString("#e0e0e0");
                    StatusBar.styleDefault();
                },
                onCloseStart: function() {
                    StatusBar.backgroundColorByHexString("#2196f3");
                    StatusBar.styleLightContent();
                }
            });

            var network_status = checkConnection();
            var data = "OS: " +
                device.platform +
                " " +
                device.version +
                "\nModel: " +
                device.model +
                "\nUUID: " +
                device.uuid;

            $(".variant").click(function () {
                var $from = $(this).attr("from");
                var $q = $(this).attr("id");
                $q = $q.replace("q", "") + $from;
                SetBall($q);

            });

            $("#result").click(function () {
                try {
                    real = Math.round((real / 15) * 100);
                    int = Math.round((int / 15) * 100);
                    soc = Math.round((soc / 15) * 100);
                    konv = Math.round((konv / 14) * 100);
                    pred = Math.round((pred / 14) * 100);
                    art = Math.round((art / 13) * 100);

                    var options = {
                        type: 'pie',
                        data: {
                            labels: ["Реалистический, %", "Интеллектуальный, %", "Социальный, %", "Конвенциальный, %", "Предприимчивый, %", "Артистичный, %"],
                            datasets: [{
                                label: '# of Votes',
                                data: [real, int, soc, konv, pred, art],
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
                        options: {
                            responsive: true,
                            legend: {
                                display: false
                            }
                        }
                    };


                    var ctx = document.getElementById("chart").getContext('2d');

                    if (real > 0 || int > 0 || soc > 0 || konv > 0 || pred > 0 || art > 0) {
                        var max1 = Math.max(real, int);
                        var max2 = Math.max(soc, konv);
                        var max3 = Math.max(pred, art);
                        var max4 = Math.max(max1, max2);
                        var max = Math.max(max3, max4);

                        var to = $(".my-type > b");

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

                        $(".my-type").animate({ opacity: 1.0 }, 500);
                        $(".my-type-description").show();

                        if (network_status !== "No network connection") {
                            $.ajax({
                                url: URL + "mobile/API/logsave.php",
                                method: "POST",
                                data: { type: base64_encode("mobile"), data: base64_encode(data+"\nTEST-RESULT:{["+real+", "+int+", "+soc+", "+konv+", "+pred+", "+art+"]}") },
                                success: function (e) {
                                            //$(".main").html(e);
                                },
                                statusCode: {
                                    404: function () {
                                        //pass
                                    },
                                    500: function () {
                                       //pass
                                    },
                                    502: function () {
                                                //pass
                                    }

                                }
                            });
                        }

                        var myChart = new Chart(ctx, options);
                    } else
                        window.plugins.toast.showLongBottom("Вы должны пройти тест!");

                    //M.toast({
                        //    html: "Пожалуйста, пройдите тест!"
                        //});
                } catch (ex) {
                    showError(ex);
                }
            });

            if (network_status !== "No network connection") {
                setTimeout(function () {
                    var geo = document.getElementById("hide-geo").getAttribute("geo");
                        data += "\nGEO: " + geo;

                    document.getElementById("hide-geo").remove();

                    $.ajax({
                        url: URL + "mobile/API/logsave.php",
                        method: "POST",
                        data: { type: base64_encode("mobile"), data: base64_encode(data) },
                        success: function (e) {
                            //$(".main").html(e);
                        },
                        statusCode: {
                            404: function () {
                                //pass
                            },
                            500: function () {
                                //pass
                            },
                            502: function () {
                                //pass
                            }

                        }
                    });
                },
                    500);
            }
        });

    };

    function onPause() {
        // TODO: Это приложение приостановлено. Сохраните здесь состояние приложения.
    };

    function onResume() {
        // TODO: Это приложение активировано повторно. Восстановите здесь состояние приложения.
    };

    function onSuccess(position) {
        $("#hide-geo").attr("geo", '{"Latitude": ' + position.coords.latitude + ';' +
            '"Longitude": ' + position.coords.longitude + ';' +
            '"Altitude": ' + position.coords.altitude + ';' +
            '"Accuracy": ' + position.coords.accuracy + ';' +
            '"Altitude Accuracy": ' + position.coords.altitudeAccuracy + '";' +
            '"Heading": ' + position.coords.heading + ';' +
            '"Speed": ' + position.coords.speed + ';}');
    }

    function checkConnection() {
        var networkState = navigator.connection.type;

        var states = {};
        states[Connection.UNKNOWN] = 'Unknown connection';
        states[Connection.ETHERNET] = 'Ethernet connection';
        states[Connection.WIFI] = 'WiFi connection';
        states[Connection.CELL_2G] = 'Cell 2G connection';
        states[Connection.CELL_3G] = 'Cell 3G connection';
        states[Connection.CELL_4G] = 'Cell 4G connection';
        states[Connection.CELL] = 'Cell generic connection';
        states[Connection.NONE] = 'No network connection';

        return states[networkState];
    }
})();