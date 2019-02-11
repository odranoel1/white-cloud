<?php include("../includes/header.php"); ?>

<div class="Project">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-2">
        <div class="row">
          <div class="col-sm-11">
            <h2>Editar Proyecto</h2>
          </div>
          <div class="col-sm-1 mt-5"><a href="../views/project.php">Regresar</a></div>
        </div>
        <div class="row">
          <div class="col-sm-12 mt-5">
            <form action="../app/update.php?id=<?= $_GET['id']; ?>" method="post">
              <div class="form-group">
                <label>Titulo</label>
                <input class="form-control" type="text" name="title" value="<?= $title; ?>" placeholder="update title">
              </div>
              <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control" rows="2" name="description" placeholder="update description"><?= $description; ?></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-success" type="submit" name="update">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("../includes/footer.php"); ?>
