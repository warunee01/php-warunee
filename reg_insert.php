<?php
    include "config.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./images/" . $filename;

    if(!empty($username) && !empty($password) && !empty(email)){
    $sql = "INSERT INTO users(username, password, firstname, lastname, email, address, filename)
            VALUES('$username','$password','$firstname','$lastname','$email','$address','$filename')";
            
    if(mysqli_query($link, $sql)){

      if (move_uploaded_file($tempname, $folder)) {
          echo "บันทึกไฟล์เรียบร้อย";
          header("location: users.php");   
      } else {
        echo "ไม่สามารถบันทึกไฟล์";
        }
   }else{
        echo "ไม่สามารถบันทึกข้อมูลได้";
    }
    }else{
        echo "กรุณากรอกข้อมูลให้ครบถ้วน!!!";   
    }

    mysqli_close();
?>