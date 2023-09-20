<?php
$user="root";
$password="root";
$host="localhost";
$db="luxury_home_sales_agency";
$dbh='mysql:host='.$host.';dbname='.$db.';char set=utf8';
$pdo=new PDO($dbh, $user, $password);
$connect = mysqli_connect(hostname:'localhost', username:'root', password:'root', database:'luxury_home_sales_agency');
if (!$connect){
    die('error');
}
?>