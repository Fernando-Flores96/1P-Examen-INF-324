<?php require_once('header.php'); ?>
<div class="p-3 m-0 border-0">
    <div class="container">
        <h2 class="text-left">Datos Personales:</h2>
        <form class="row g-3" action="insertar.php" method="post">
            <div class="col-md-6">
                <label for="ci" class="form-label">CI</label>
                <input type="number" class="form-control" name="ci" id="ci" placeholder="CI" required>
            </div>
            <h3></h3>
            <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
            </div>
            <div class="col-md-6">
                <label for="paterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="paterno" id="paterno" placeholder="Apellido Paterno" required>
            </div>
            <h2 class="text-left">Datos de la Propiedad:</h2>
            <div class="col-md-6">
                <label for="codigo" class="form-label">Codigo</label>
                <input type="text" class="form-control" name="codigo" id="zona" placeholder="Codigo" required>
            </div>


            <?php
                include "conexion.inc.php";
                $sql = "SELECT * FROM macrodistritos";
                $resultado = mysqli_query($con, $sql);       
            ?>
            <select name="macrodistritos" id="macrodistritos" class="form-control">
                <option value="">Seleccione un macrodistrito</option>
                <?php
                include "conexion.inc.php";  // Conexión a la base de datos
                $sql = "SELECT * FROM macrodistritos";
                $resultado = mysqli_query($con, $sql);

                // Iterar sobre cada fila del resultado de la consulta
                while ($fila = mysqli_fetch_assoc($resultado)): ?>
                    <option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></option>
                <?php endwhile; ?>
            </select>


            <div class="col-md-6">
                <label for="distritos" class="form-label">Distrito</label>
                <select name="distrito" id="distritos" class="form-control" required>
                    <option value="">Seleccione un distrito</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="zonas" class="form-label">Zona</label>
                <select name="zona" id="zonas" class="form-control" required>
                    <option value="">Seleccione una zona</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="superficie" class="form-label">Superficie</label>
                <input type="number" class="form-control" name="superficie" id="superficie" placeholder="Superficie" required>
            </div>
            <div class="col-md-6">
                <label for="xini" class="form-label">X Inicio</label>
                <input type="text" class="form-control" name="xini" id="xini" placeholder="X Inicio" required>
            </div>
            <div class="col-md-6">
                <label for="yini" class="form-label">Y Inicio</label>
                <input type="text" class="form-control" name="yini" id="yini" placeholder="Y Inicio" required>
            </div>
            <div class="col-md-6">
                <label for="xfin" class="form-label">X Fin</label>
                <input type="text" class="form-control" name="xfin" id="xfin" placeholder="X Fin" required>
            </div>
            <div class="col-md-6">
                <label for="yfin" class="form-label">Y Fin</label>
                <input type="text" class="form-control" name="yfin" id="yfin" placeholder="Y Fin" required>
            </div>
          






            <div class="col-12">
                <button type="submit" class="btn btn-primary">Insertar</button>
                <a href="datos.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    
</div>
<script>
$(document).ready(function() {
    // Cuando se selecciona un macrodistrito
    $("#macrodistritos").change(function() {
        var macrodistrito_id = $(this).val();
        
        // AJAX para cargar los distritos correspondientes
        $.ajax({
            type: 'POST',
            url: 'ajax_distritos.php',
            data: { id: macrodistrito_id },
            success: function(response) {
                // Asignar los distritos al select
                $("#distritos").html(response);
                $("#zonas").html('<option value="">Seleccione una zona</option>'); // Reiniciar las zonas
            }
        });
    });

    // Cuando se selecciona un distrito
    $("#distritos").change(function() {
        var distrito_nombre = $("#distritos option:selected").text();
        
        // AJAX para cargar las zonas correspondientes
        $.ajax({
            type: 'POST',
            url: 'ajax_zonas.php',
            data: { distrito_nombre: distrito_nombre },
            success: function(response) {
                $("#zonas").html(response);
            }
        });
    });
});

 
</script>
<?php require_once('footer.php'); ?>
