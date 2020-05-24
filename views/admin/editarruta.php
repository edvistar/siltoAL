</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="container" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center"><?php echo strtoupper($this->ruta->destino); ?>Nueva Ruta</h1>
        <div class="col-sm-6 offset-sm-3">
        <form action="<?php echo constant('URL'); ?>ruta/editar" method="POST">
            <div class="form-group">
                <label for="id_ruta">Id Ruta</label>
                <input type="number" class="form-control" value="<?php echo $this->ruta->id_ruta; ?>" name="id_ruta" id="id_ruta">
                <small id="id_rutaHelp" class="form-text text-muted">Ingrese el número de Id Ruta</small>
            </div>

            <div class="form-group">
                <label for="destino">Destino</label>
                <input type="text" class="form-control" value="<?php echo $this->ruta->destino; ?>" name="destino" id="destino">
                <small id="destinoHelp" class="form-text text-muted">Diligencie el Destino del Centro</small>
            </div>
            <div class="form-group">
                <label for="fecha_ruta">Fecha Ruta</label>
                <input type="date" class="form-control" value="<?php echo $this->ruta->fecha_ruta; ?>" name="fecha_ruta" id="fecha_ruta">
                <small id="fecha_rutaHelp" class="form-text text-muted">Diligencie la Fecha de la ruta</small>
            </div>
            <div class="form-group">
                <label for="hora_salida">Hora Salida</label>
                <input type="date" class="form-control" value="<?php echo $this->ruta->hora_salida; ?>" name="hora_salida" id="hora_salida">
                <small id="hora_salidaHelp" class="form-text text-muted">Diligencie la hora de salida</small>
            </div>
            <div class="form-group">
                <label for="hora_llegada">Hora Salida</label>
                <input type="date" class="form-control" value="<?php echo $this->ruta->hora_llegada; ?>" name="hora_llegada" id="hora_llegada">
                <small id="hora_llegadaHelp" class="form-text text-muted">Diligencie la hora de llegada</small>
            </div>
            
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" class="form-control" value="<?php echo $this->ruta->descripcion; ?>" name="descripcion" id="descripcion">
                <small id="descripcioneHelp" class="form-text text-muted">Descripcion</small>
            </div>
            <div class="form-group">
                <label for="tipo_ruta">Tipo Ruta</label>
                <input type="text" class="form-control" value="<?php echo $this->ruta->tipo_ruta; ?>" name="tipo_ruta" id="tipo_ruta">
                <small id="tipo_rutaHelp" class="form-text text-muted">Tipo Ruta</small>
            </div>
            <div class="form-group">
                <label for="precinto">Precinto</label>
                <input type="text" class="form-control" value="<?php echo $this->ruta->precinto; ?>" name="precinto" id="precinto">
                <small id="precintoHelp" class="form-text text-muted">Precinto </small>
            </div>
            <div class="form-group">
                <label for="identificacion">Identificacion</label>
                <input type="text" class="form-control" value="<?php echo $this->ruta->identificacion; ?>" name="identificacion" id="identificacion">
                <small id="identificacionHelp" class="form-text text-muted">Identificacion</small>
            </div>
            <div class="form-group">
                <label for="placa">Placa</label>
                <input type="text" class="form-control" value="<?php echo $this->ruta->placa; ?>" name="placa" id="placa">
                <small id="placaHelp" class="form-text text-muted">Placa</small>
            </div>
            <div class="form-group">
                <label for="id_centro">Id Centro</label>
                <input type="text" class="form-control" value="<?php echo $this->ruta->id_centro; ?>" name="id_centro" id="id_centro">
                <small id="id_centroHelp" class="form-text text-muted">Id Centro</small>
            </div>

            
        
            <input type="submit" class="btn btn-primary" value="Actualizar ruta">
        </form>
        </div>
    </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>