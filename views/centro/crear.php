</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="container" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Nuevo Centro</h1>
        <div class="col-sm-6 offset-sm-3">
        <form action="<?php echo constant('URL'); ?>centro/crear" method="POST">
            <!-- <div class="form-group">
                <label for="nroprograma">Nro Programa</label>
                <input type="text" class="form-control" name="nroprograma" id="nroprograma">
                <small id="nroprogramaHelp" class="form-text text-muted">Ingrese el número del programa</small>
            </div> -->

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
                <small id="nombreHelp" class="form-text text-muted">Diligencie el nombre del Centro</small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <small id="emailHelp" class="form-text text-muted">Diligencie el email del Centro</small>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" name="telefono" id="telefono">
                <small id="telefonoHelp" class="form-text text-muted">Diligencie el numero del Centro</small>
            </div>
            <div class="form-group">
                <label for="whatsapp">Whatsapp</label>
                <input type="number" class="form-control" name="whatsapp" id="whatsapp">
                <small id="whatasppHelp" class="form-text text-muted">Tiene whatsapp</small>
            </div>
            <div class="form-group">
                <label for="departamento">Departamento</label>
                <input type="text" class="form-control" name="departamento" id="departamento">
                <small id="departamentoeHelp" class="form-text text-muted">Departamento</small>
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" id="ciudad">
                <small id="ciudadHelp" class="form-text text-muted">Ciudad</small>
            </div>
            <div class="form-group">
                <label for="encargado">Encargado</label>
                <input type="text" class="form-control" name="encargado" id="encargado">
                <small id="encargadoHelp" class="form-text text-muted">Persona encargada</small>
            </div>
            <div class="form-group">
                <label for="lugar">Lugar</label>
                <input type="text" class="form-control" name="lugar" id="lugar">
                <small id="lugarHelp" class="form-text text-muted">Lugar de ubicacion</small>
            </div>

            
        
            <input type="submit" class="btn btn-primary" value="Crear centro">
        </form>
        </div>
    </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>