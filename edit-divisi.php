<?php
  include 'includes/config.php';
  session_start();
  if(!isset($_SESSION["user_username"])) {
    header("Location: index.php");
    die();
  }

  $msg = "";

  if (isset($_GET['id'])) {
    $idDivisi = mysqli_real_escape_string($conn, $_GET["id"]);
    
    $sql = "SELECT * FROM divisi WHERE id_divisi = '$idDivisi';";
    $data = mysqli_query($conn, $sql);

    $result = mysqli_fetch_array($data);
    
    $nama = $result['nama_divisi'];
  }

  if (isset($_POST['updateDivisi'])) {
    $sql = "UPDATE divisi SET
            nama_divisi = '$_POST[namaDivisi]'
            WHERE id_divisi = '{$idDivisi}'";
    $result = mysqli_query($conn, $sql);

    if($result) {
      $msg = "<div class='alert alert-success'>Divisi is updated</div>";
      header("refresh:2; url=dashboard.php");
    }
    else {
      $msg = "<div class='alert alert-danger'>Divisi is not updated</div>";
    }
  }
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/add-edit.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Bootstrap's css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <!-- Bootstrap's js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous" defer></script>
    <!-- font awesome's kit code -->
		<script
			src="https://kit.fontawesome.com/bc44dd7ee2.js"
			crossorigin="anonymous"
			defer
		></script>
    <!-- Title -->
    <link rel="icon" type="image/x-icon" href="./images/favicon.png"/>
    <title>Beyond Reality</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="card bg-white rounded-border shadow">
            <div class="card-header">
              <h4>Edit Divisi</h4>
            </div>
            <div class="card-body p-4">
              <?php echo $msg; ?>
              <form action="" method="post">
                <div class="mb-3">
                  <label for="id" class="form-label">Nama Divisi</label>
                  <input type="text" class="form-control" name="namaDivisi" id="nama" value="<?php echo $nama ?>">
                </div>
                <div class="button">
                  <button type="submit" name="updateDivisi">Update</button>
                  <button onclick="history.back()" >Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
