<?php
  session_start();
  session_destroy(); //ยกเลิก session
  header("location: index.php"); //กลับไปที่หน้า index.php
?>