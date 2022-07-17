<?php
   include "navbar.php";
   include "config.php";
   $sql = "SELECT * from users";
   $result = mysqli_query($link, $sql);
   if(mysqli_num_rows($result) > 0){  
?>
<div class="container">
    <table class="table">
        <tr>
           <th> Username </th>
           <th> Password </th>
           <th> ชื่อ </th>
           <th> นามสกุล </th>
           <th> อีเมล </th>
           <th> ที่อยู่ </th>
           <th> Modify </th>
        </tr>
<?php
    while($row = mysqli_fetch_assoc($result)){
?>
        <tr>
            <td><?php echo "$row[username]"; ?></td>
            <td><?php echo "$row[password]"; ?></td>
            <td><?php echo "$row[firstname]"; ?></td>
            <td><?php echo "$row[lastname]"; ?></td>
            <td><?php echo "$row[email]"; ?></td>
            <td><?php echo "$row[address]"; ?></td>
            <td>
                <a href="users_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Delete </a>
                <a href="users_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info"> Edit </a>
            </td>
        </tr>
        <?php
    }
?>
    </table>
</div>
<?php
   }else{
      echo "ไม่พบข้อมูล";
   }
   mysqli_close();
?>