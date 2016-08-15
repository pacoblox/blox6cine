<?php
// multiple recipients
$to  = 'pcordoba@qnsoluciones.com' . ', '; // note the comma
$to .= 'pacoblox@gmail.com';

// subject
$subject = 'Bienvenido a Blox6 Cinemas';

// message
$message = '
<html>
<head>
  <title>Bienvenido a Blox6.com</title>
</head>
<body>
  <p>Prueba de Registro!</p>

</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Pablo QNS <pcordoba@qnsoluciones.com>, Pablo <pacoblox@gmail.com>' . "\r\n";
$headers .= 'From: Registro Blox6 Cinemas <registro@blox6.com>' . "\r\n";
$headers .= 'Cc: notificacionesregistro@blox6.com' . "\r\n";


// Mail it
mail($to, $subject, $message, $headers);
?>