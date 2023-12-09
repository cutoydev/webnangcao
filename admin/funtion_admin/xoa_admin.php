<?php
require("../division_admin/connection.php");
if(isset($_GET["id"])){
        $id=$_GET["id"];
}
$sql_delete="DELETE FROM users WHERE uid =$id ";
$result =mysqli_query($conn,$sql_delete);
 header("location: ../admin.php");
?>