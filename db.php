<?php

$connection = mysqli_connect("localhost","root","");
if(!mysqli_connect(!$connection)){
die("Database Connectiion failed  :".mysqli_connect_error());
}
$db_select = mysqli_select_db($connection,"phpcrud");
if(!$db_select){
    die("Database Selection failed  :".mysqli_error($connection));
}

?>