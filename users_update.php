<?php
/*   include "config.php";
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "./images/" . $filename;

  if(!empty($filename)){
    $sql = "UPDATE users SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', email='$email', address='$address', filename='$filename' WHERE id='$id'";
    if(mysqli_query($link, $sql)){
      if (move_uploaded_file($tempname, $folder)) {
        echo "<script>
                alert('บันทึกไฟล์เรียบร้อย');
                window.location.href='./users.php';
             </script>";
      } else {
        echo "ไม่สามารถบันทึกไฟล์ได้";
      }
    } else {
      echo "ผิดพลาด : " . mysqli_error($link);
    }
  
  }else{
    $sql = "UPDATE users SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', email='$email', address='$address' WHERE id='$id'";
    if(mysqli_query($link, $sql)){
      echo "<script>
            alert('บันทึกเรียบร้อย');
            window.location.href='./users.php';
         </script>";
    } else {
      echo "ผิดพลาด : " . mysqli_error($link);
    }
  
  }

  

mysqli_close($link);
 */


  include "config.php";
  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $address = $_POST['address'];

  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "./images/" . $filename;

  if(!empty($filename)){
    $sql = "UPDATE users SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', email='$email', address='$address', filename='$filename' WHERE id='$id'";
    if(mysqli_query($link, $sql)){
      if (move_uploaded_file($tempname, $folder)) {
        echo "<script>
                alert('บันทึกไฟล์เรียบร้อย');
                window.location.href='./users.php';
             </script>";
      } else {
        echo "ไม่สามารถบันทึกไฟล์ได้";
      }
    } else {
      echo "ผิดพลาด : " . mysqli_error($link);
    }
  }else{
    $sql = "UPDATE users SET username='$username', password='$password', firstname='$firstname', lastname='$lastname', email='$email', address='$address' WHERE id='$id'";
    if(mysqli_query($link, $sql)){
      echo "<script>
            alert('บันทึกเรียบร้อย');
            window.location.href='./users.php';
         </script>";
    } else {
      echo "ผิดพลาด : " . mysqli_error($link);
    }

  }

mysqli_close($link);



?>