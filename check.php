<?php
  session_start();
  include "config.php";

  if(!empty($_POST['username']) && !empty($_POST['password']) ){
      $sql = "SELECT * FROM users WHERE 
            username='$_POST[username]'  && password ='$_POST[password]' ";
      $result = mysqli_query($link, $sql);
      $row = mysqli_fetch_array($result);

      if($row['username'] == $_POST['username'] && $row[password] == $_POST['password']){
          $_SESSION['username'] = $row['username'];
          header("location: ./dashboard.php");
      }else{
        echo "<script>
                alert('Username หรือ Password ไม่ถูกต้อง');
                window.location.href='./login.php';
              </script>";
      }
  }else{
    echo "<script>
            alert('กรุณาป้อนข้อมูลด้วย');
            window.location.href='./login.php';
         </script>";
  }

?>
