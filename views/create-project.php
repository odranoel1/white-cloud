<?php include("../includes/header.php"); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-10 col-sm-offset-2">
      <div class="row">
        <div class="col-sm-11">
          <h3>Nuevo Proyecto</h3>
        </div>
        <div class="col-sm-1 mt-5"><a href="project.php">Regresar</a></div>
      </div>
      <form class="" action="../app/create.php" method="post">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label>Titulo</label>
              <input class="form-control" type="text" name="project">
            </div>
            <div class="form-group">
              <label>Descripción</label>
              <textarea class="form-control" rows="2" name="description"></textarea>
            </div>
            <div class="form-group">
              <input class="btn btn-primary btn-block" type="submit" name="save_project" value="Añadir Proyecto">
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include("../includes/footer.php"); ?>
