<?php
  include("db.php");

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query_prj = "SELECT * FROM projects WHERE projectId ='$id'";
    $result_prj = mysqli_query($connect_db,$query_prj);

    if(mysqli_num_rows($result_prj) == 1){
      $row = mysqli_fetch_array($result_prj);
      $title = $row['title'];
      $description = $row['description'];
    }
  }

  if(isset($_POST['update'])){
    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "UPDATE projects SET title = '$title', description = '$description' WHERE id = '$id'";
    $result = mysqli_query($connect_db,$query);

    if(!$result) {
      die('Query Failed');
    } else {

      $_SESSION['message'] = 'Task update succesfully';
      $_SESSION['message_type'] = 'warning';
      header("Location: ../views/project.php");
    }
  }
?>

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
            <form action="update.php?id=<?= $_GET['id']; ?>" method="post">
              <div class="form-group">
                <label>Titulo</label>
                <input class="form-control" type="text" name="title" value="" placeholder="update title">
              </div>
              <div class="form-group">
                <label>Descripción</label>
                <textarea class="form-control" rows="2" name="description" placeholder="update description"></textarea>
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
