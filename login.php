<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <script src="./js/popper.js"> </script>
    <script src="./js/bootstrap.js"> </script>
</head>

<body>
    <?php
    include "./navbar.php";
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1> เข้าสู่ระบบ </h1>
                <form action="check.php" method="POST">
                    Usermane:
                    <input type="text" name="username" class="form-control" placeholder="กรอกรหัสผู้ใช้" />
                    Password:
                    <input type="password" name="password" class="form-control" placeholder="กรอกรหัสผ่าน" />
                    <input type="submit" value="login" class="btn btn-primary" />
                </from>
            </div>
        </div>
    </div>
</body>

</html>