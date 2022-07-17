<?php
    include "config.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    if(!empty($username) && !empty($password) && !empty(email)){
    $sql = "INSERT INTO users(username, password, firstname, lastname, email, address)
            VALUES('$username','$password','$firstname','$lastname','$email','$address')";
            
    if(mysqli_query($link, $sql)){
        echo "บันทึกข้อมูลเรียบร้อย";
    }else{
       echo "ไม่สามารถบันทึกข้อมูลได้";
    }
    }else{
      echo "กรุณากรอกข้อมูลให้ครบถ้วน!!!";   
    }

    mysqli_close();
?>