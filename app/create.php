<?php
include("db.php");

if (isset($_POST['save_project'])) {
  $title = $_POST['project'];
  $description = $_POST['description'];

  $query_rgt = "INSERT INTO projects (title, description) values
  ('$title','$description')";
  $result_rgt = mysqli_query($connect_db,$query_rgt);

  if(!$result_rgt) {
    die('Query failed');
  } else {
    $_SESSION['message'] = 'Project saved succesfully';
    $_SESSION['message_type'] = 'success';

    // $query = "SELECT * FROM users";
    // $result = mysqli_query($connect_db,$query);

    // while ($row = mysqli_fetch_array($result)) {
    //   header("Location: ../views/project.php?id=" . $row['id'] . "&name=" . $row['name']);
    //   // header("Location: ../app/admin.php?id=" . $row['id'] . "&name=" . $nickname);
    // }
    header("Location: ../views/project.php");
  }
}

mysqli_close($connect_db);
 ?>
