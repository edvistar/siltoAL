<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'views/head.php'; ?>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main" class="container">
        <h1 class="center error">
        <?php
            echo $this->mensaje;
        ?>
        </h1>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>