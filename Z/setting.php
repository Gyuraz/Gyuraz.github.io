<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'web_dasar_rpl';

$link = mysqli_connect($host,$user,$pass,$db);

if(mysqli_connect_errno()){
    echo 'MySQL Error :' . mysqli_connect_error();
    
    exit();
}
?>