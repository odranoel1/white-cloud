<?php
include("db.php");

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM projects where projectId='$id'";
  $result = mysqli_query($connect_db,$query);
  if(!$result) {
    die('Query Failed');
  } else {

    $_SESSION['message'] = 'Project Removed succesfully';
    $_SESSION['message_type'] = 'danger';
    header("Location: ../views/project.php");
  }
}
 ?>
