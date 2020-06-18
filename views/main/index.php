<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'views/head.php'; ?>
</head>
<body>
<?php require 'views/header.php'; ?>

<div class="container text-center">
<h1 class="h1">Bienvenido <?php echo $_SESSION['nombre'];?></h1>
<h1><?php echo $_SESSION['cargo'];?></h1>
<p> Los productos al alcance de tu mano. 
<br>WAPV trabajando para su servicio.<br></p>

</div>

<?php require 'views/footer.php'; ?>
</body>
</html>

