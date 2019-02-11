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

    $query = "UPDATE projects SET title = '$title', description = '$description' WHERE projectId = '$id'";
    $result = mysqli_query($connect_db,$query);

    if(!$result) {
      die('Query Failed');
    } else {

      $_SESSION['message'] = 'Task update succesfully';
      $_SESSION['message_type'] = 'success';
      header("Location: ../views/project.php");
    }
  }
?>

<?php include("../views/update-project.php"); ?>
