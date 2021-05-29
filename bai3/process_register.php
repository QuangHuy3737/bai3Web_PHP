<?php
    $n=$e=$p="";
    if(isset($_POST['name'])){
        $n= $_POST['name'];
    }
    if(isset($_POST['email'])){
        $e= $_POST['email'];
    }
    if(isset($_POST['password'])){
        $p = $_POST['password']; 
    }
    if($n!="" && $e!="" && $p!=""){
        header('Location: login.php?name='.$n.'&password='.$p);
        die();
    }
?>