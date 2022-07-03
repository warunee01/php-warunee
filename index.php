<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/popper.js"> </script>
    <script src="./js/bootstrap.js"> </script>
</head>
<body>
    <?php
    include "./navbar.php";
    echo "ยินดีต้อนรับเข้าสู่เว็บไซด์"; 
    echo "<h1> Welcome to website </h1>";
    $year = 2565;
    $crish = $year -543;
    echo "ปี พ.ศ. $year ค.ศ. $crish <br/>";
    echo "ปี พ.ศ.".$year. "ปี ค.ศ. ".$crish. "<br/>";
    $salary = 25000;
    echo "เงินเดือน $salary บาท <br/>";
    echo "เงินเดือน". $salary . "บาท";

    $name= "วารุณี  สอนรักษ์";
    $age = 40;
    echo "<br/> สวัสดี ". $name ;
    echo "<br/> คุณมีอายุ ". $age. "ปี";
    $birth = $year - $age;
    echo "<br/> พ.ศ. เกิด ". $birth;

    echo "<br/>";
    define("WEB", "http://warunee.com");


    ?>



</body>
</html>