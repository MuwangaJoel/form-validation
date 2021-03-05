<?php
session_start();
include('../connect.php');
$a = $_POST['name'];
$b = $_POST['address'];
$c = $_POST['contact'];

$e = $_POST['prod_name'];
$f = $_POST['note'];

// query
$sql = "INSERT INTO customer (customer_name,address,contact,prod_name,note) VALUES (:a,:b,:c,:e,:f)";
$q = $db->prepare($sql);
$q->execute(array(':a'=>$a,':b'=>$b,':c'=>$c,':e'=>$e,':f'=>$f));
header("location: customer.php");


?>