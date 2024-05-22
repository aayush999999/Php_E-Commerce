

<?
session_start();
$usernm=$_SESSION['username'];
if($usernm==''){header('Location:Login.php');}

?>
