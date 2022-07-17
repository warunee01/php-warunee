<?php
  include "config.php";
  $id = $_GET['id'];

  $sql = "DELETE FROM users WHERE id='$id'";
  if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
    header("location: users.php");
  } else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

mysqli_close($link);
?>