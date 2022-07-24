<?php
   include "config.php";
   $id = $_GET['id'];
   $sql = "SELECT * FROM users WHERE id='$id'";
   $result = mysqli_query($link, $sql);
   $row = mysqli_fetch_array($result);

  include "navbar.php";
?>

<div class="container pt-2">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="./images/<?php echo $row['filename']; ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php echo "$row[firstname] $row[lastname]"; ?></h5>
                    <p class="card-text">อีเมล: <?php echo "$row[email]"; ?></p>
                    <p class="card-text">ที่อยู่: <?php echo "$row[address]"; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>