<?php

session_start();
include('db4.php');
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$utype = $_POST['utype'];

$uid=$uname1=$pass1=$type1=$name1='';
	
$sql="SELECT uid,uname,upass,utype,name
 FROM registration 
 where uname='$uname' and upass='$upass' and utype='$utype'";


$rs= mysql_query($sql);

if (!$rs){exit("Error in SQL AAA");}
while ($row = mysql_fetch_row($rs)){
	$uid=$row[0];
	$uname1=$row[1];
	$pass1=$row[2];
	$type1=$row[3];
} 


	

if($uname!=$uname1 and $upass!=$pass1 and $utype!=$type1)
{
$sql1="SELECT max(uid) From `registration` ";
$rs1= mysql_query($sql1);
if (!$rs1){exit("Error in SQL AAA");}
while ($row = mysql_fetch_row($rs1))
	{$uid9=$row[0];}
	
$uid9=$uid9+1;

	
$sql2="INSERT INTO registration (uid, uname, upass,utype, name) VALUES ('$uid9','$uname','$upass','$utype','')";
$rs2= mysql_query($sql2);
if (!$rs2){  exit("User Name Already Registered" );} 

header('Location:registration.php?msg=E');
}
else 
{
   $_SESSION['userid']=$uid;
   $_SESSION['username']=$uname1;
   $_SESSION['usertype']=$type1;
   $_SESSION['name1']=$name1;
    header('Location:registration.php');
}
odbc_close($conn); 

?>