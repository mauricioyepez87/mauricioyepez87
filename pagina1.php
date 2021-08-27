<?php include("sesion.php"); ?>
Bienvenido:
<?php echo $_SESSION["usuario"]; ?>
<br /><br />
Estas en la primera pagina PHP
<br /><br />
<a href="pagina2.php">Ir a la segunda pagina segura</a>
<br /><br />
<a href="salir.php">SALIR</a>
