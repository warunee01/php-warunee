<?php
   include "config.php";
   $id = $_GET['id'];
   $sql = "SELECT * FROM users WHERE id='$id'";
   $result = mysqli_query($link, $sql);
   $row = mysqli_fetch_array($result);

?>

    <?php
      include "./navbar.php";
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center"> แก้ไขข้อมูล </h1>
                <form action="users_update.php" method="POST">
                    Username:
                    <input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>" />
                    Password:
                    <input type="text" name="password" class="form-control"  value="<?php echo $row['password']; ?>" />
                    ชื่อ:
                    <input type="text" name="firstname" class="form-control"  value="<?php echo $row['firstname']; ?>" />
                    นามสกุล:
                    <input type="text" name="lastname" class="form-control"  value="<?php echo $row['lastname']; ?>" />
                    อีเมล:
                    <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" />
                    ที่อยู่:
                    <textarea name="address" rows="4" class="form-control"><?php echo $row['address']; ?></textarea>
                    <div class="pt-2 d-grid">
                        <input type="submit" value="แก้ไข" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
    </div>