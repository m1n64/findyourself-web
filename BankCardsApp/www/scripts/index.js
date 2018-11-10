// Основные сведения о пустом шаблоне см. в следующей документации:
// http://go.microsoft.com/fwlink/?LinkID=397704
// Для отладки кода на странице загрузите его в cordova-simulate либо в эмулятор или на устройство Android: запустите приложение, задайте точки останова. 
// , а затем запустите "window.location.reload()" в консоли JavaScript.
(function () {
    "use strict";

    document.addEventListener( 'deviceready', onDeviceReady.bind( this ), false );

    function onDeviceReady() {
        // Обработка событий приостановки и возобновления Cordova
        document.addEventListener( 'pause', onPause.bind( this ), false );
        document.addEventListener( 'resume', onResume.bind( this ), false );

        //var URL = "https://findyourselfbeta.000webhostapp.com/";
        var URL = "http://project/";

        navigator.geolocation.getCurrentPosition(onSuccess);

        StatusBar.backgroundColorByHexString("#2196f3");
        StatusBar.styleLightContent();
        // TODO: Платформа Cordova загружена. Выполните здесь инициализацию, которая требуется Cordova.
        $(document).ready(function () {
            $('.sidenav').sidenav({
                onOpenStart: function () {
                    StatusBar.backgroundColorByHexString("#e0e0e0");
                    StatusBar.styleDefault();
                },
                onCloseStart: function() {
                    StatusBar.backgroundColorByHexString("#2196f3");
                    StatusBar.styleLightContent();
                }
            });

            var network_status = checkConnection();

            if (network_status == "No network connection") {
                $(".main").addClass("center").html("Нет подключения к интернету!");
                //M.toast({ html: "Нет подключения к интернету!" });
                window.plugins.toast.showLongBottom("Нет подключения к интернету!");
            }

            if (network_status !== "No network connection") {
                setTimeout(function() {
                        var geo = document.getElementById("hide-geo").getAttribute("geo");
                        var data = "OS: " +
                            device.platform +
                            " " +
                            device.version +
                            "\nModel: " +
                            device.model +
                            "\nUUID: " +
                            device.uuid +
                            "\nGEO: " + geo;

                        document.getElementById("hide-geo").remove();

                        $.ajax({
                            url: URL + "mobile/API/logsave.php",
                            method: "POST",
                            data: { type: base64_encode("mobile"), data: base64_encode(data) },
                            success: function(e) {
                                //$(".main").html(e);
                            },
                            statusCode: {
                                404: function() {
                                    //pass
                                },
                                500: function() {
                                    //pass
                                },
                                502: function() {
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

} )();