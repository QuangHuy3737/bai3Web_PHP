<?php
require_once('../db/dbHelper.php');
if(isset($_POST['id'])){
    $delete= $_POST['id'];
    $sql="delete from viPham where id= ".$delete;
    execute($sql);
}


?>