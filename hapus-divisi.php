<?php 
  include 'includes/config.php';
  session_start();
  if(!isset($_SESSION["user_username"])) {
    header("Location: index.php");
    die();
  }

  if (isset($_GET["id"])) {
    $id = mysqli_real_escape_string($conn, $_GET["id"]);

    $sql = "DELETE FROM divisi WHERE id_divisi ='{$id}'";
    mysqli_query($conn, $sql);
    header("Location: dashboard.php");
  }
  else {
    header("Location: dashboard.php");
  }
?>