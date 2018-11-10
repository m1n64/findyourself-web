(function () {
    "use strict";

    document.addEventListener('deviceready', onDeviceReady.bind(this), false);

    function onDeviceReady() {
        // Обработка событий приостановки и возобновления Cordova
        document.addEventListener('pause', onPause.bind(this), false);
        document.addEventListener('resume', onResume.bind(this), false);

        var db = window.openDatabase("Records", "1.0", "Records", 200000);
        db.transaction(populateDB, errorCB, successCB);

        // TODO: Платформа Cordova загружена. Выполните здесь инициализацию, которая требуется Cordova.
        $(document).ready(function () {
            StatusBar.show();
            StatusBar.backgroundColorByHexString("#ffcdd2");
            StatusBar.styleDefault();
            $("#no-records").hide();
            db.transaction(select);
            
        });

        $("#clear").click(function () {
            db.transaction(function (tx) {
                tx.executeSql('DELETE FROM Records');
                select(tx);
                M.toast({ html: "Таблица очищена!" });
                navigator.vibrate(1000);
            });
        });

        $("#reset").click(function () {
            db.transaction(function (tx) {
                var res = localStorage.getItem("res");
                var date = new Date();
                var now = date.getFullYear() + "-" + (+date.getMonth() + 1) + "-" + date.getDate();
                if (+res != 0) {
                    tx.executeSql("INSERT INTO Record VALUES('" + now + "', '" + res + "')");
                    localStorage.setItem("res", 0);
                    M.toast({ html: "Результат сброшен!" });
                    $(".collection").append("<li class=\"collection-item\"><span class=\"title\"><b>" + now + "</b></span>" +
                        "<p>" + res + "</p></li>");
                    $("#no-records").hide();
                    navigator.vibrate(500);
                } else {
                    M.toast({html: "Результат и так равен 0"});
                }
                
            });
        });
    };

    function select(tx) {
        tx.executeSql('SELECT * FROM Record', [], function (tx, results) {
            var len = results.rows.length, i;
            $("#records").after("<ul class=\"collection\">");
            if (len > 0) {
                for (i = 0; i < len; i++) {
                    //alert(results.rows.item(i).param + " " + results.rows.item(i).value);
                    $(".collection").append("<li class=\"collection-item\"><span class=\"title\"><b>" + results.rows.item(i).date + "</b></span>" +
                        "<p>" + results.rows.item(i).value + "</p></li>");
                }
                $(".collection").after("</ul>");
            } else {
                $("#no-records").show();
            }


        }, null);
    }
    // Populate the database
    //
    function populateDB(tx) {
        //tx.executeSql('DROP TABLE IF EXISTS SettingsApp');
        tx.executeSql('CREATE TABLE IF NOT EXISTS Record (date, value)');
        //tx.executeSql('INSERT INTO SettingsApp VALUES(1, "color-theme", "red")');
    }

    // Transaction error callback
    //
    function errorCB(tx, err) {
        M.toast({html :"Error processing SQL: " + err});
    }

    // Transaction success callback
    //
    function successCB(tx) {
      
    }
    function onPause() {
        // TODO: Это приложение приостановлено. Сохраните здесь состояние приложения.
    };

    function onResume() {
        // TODO: Это приложение активировано повторно. Восстановите здесь состояние приложения.
    };
})();