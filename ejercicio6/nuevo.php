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
            <div class="col-md-6">
                <label for="zona" class="form-label">Zona</label>
                <input type="text" class="form-control" name="zona" id="zona" placeholder="Zona" required>
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
            <div class="col-md-6">
                <label for="distrito" class="form-label">Distrito</label>
                <input type="text" class="form-control" name="distrito" id="distrito" placeholder="Distrito" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Insertar</button>
                <a href="datos.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>

    
</div>
<?php require_once('footer.php'); ?>
