<?php
session_start();
if (!isset($_SESSION['pantalla6_completado']) || $_SESSION['pantalla6_completado'] != true) {
header("Location: pantalla6.php");
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room Virtual</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../Sources/favicon.png" type="image/x-icon">
</head>
<body>
<div id="particles-js"></div>
    <div class="txt">
        <h1 id="mensaje">Enhorabuena!</h1>
        <br>
        <h3>Has completado todos los niveles y has impedido que accedan a los datos</h3>
    </div>
    <div class="btn-fnl">
        <a href="https://es.linkedin.com" target="_blank" class="btn btn-final">Recoger Recompensa</a>
    </div>
    <div class="footer">
        <p>Designed by <a href="https://github.com/christian-monrabal?tab=repositories" target="_blank">Christian Monrabal</a> y <a href="https://github.com/JuanCarlospg" target="_blank">Juan Carlos Prado</a></p>
    </div>

<script src="../js/particles.min.js"></script>
<script src="../js/particulas.js"></script>
</body>
</html>