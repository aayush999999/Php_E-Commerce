<?php
session_start();
include('db4.php');

$uid=$_SESSION['userid'];
$newpass=$_POST['newpass'];

$Sql="Update registration set upass='$newpass' WHERE uid=$uid";
$rs= mysql_query($Sql);
header('location:changepassword.php?msg=C');

?>
