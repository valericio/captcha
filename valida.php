<?php
session_start();
?>
<html>
<head>
<title>Captcha</title>
</head>
<body>
<?php
if ($_SESSION['numeroaleatorio']==$_REQUEST['numero']){
  echo "Ingresó el valor correcto";
}else{
  echo "Incorrecto";
}
?>
</body>
</html>
