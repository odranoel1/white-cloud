<?php include("../app/db.php"); ?>
<?php include("../includes/header.php"); ?>

<div class="Project">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-2">
        <h2>Proyectos</h2><a href="create-project.php">Añadir proyecto</a>
        <div class="row">
          <div class="col-sm-12 mt-5">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Project Id</th>
                  <th>Project Title</th>
                  <th>Description</th>
                  <th>Created At</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
               <?php
                  $query = "SELECT * FROM projects";
                  $result = mysqli_query($connect_db,$query);

                  while ($row = mysqli_fetch_array($result)) { ?>
                    <tr>
                      <td><?= $row['projectId'] ?></td>
                      <td><?= $row['title'] ?></td>
                      <td><?= $row['description'] ?></td>
                      <td><?= $row['created_at'] ?></td>
                      <td>
                        <a href="../app/update.php?id=<?= $row['projectId']?>" class="btn btn-secondary">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="../app/delete.php?id=<?= $row['projectId']?>" class="btn btn-danger">
                          <i class="far fa-trash-alt"></i>
                        </a>
                      </td>
                    </tr>
                <?php } ?>
             </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1">
            <?php if (isset($_SESSION['message'])) { ?>
              <div class="alert alert-<?= $_SESSION['message_type'] ?>">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              </div>
            <?php session_unset(); } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("../includes/footer.php"); ?>
