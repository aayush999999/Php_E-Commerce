<?php

session_start();
include('db4.php');
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$utype = $_POST['utype'];

$sql="SELECT uid,uname,upass,utype,name 
	 FROM registration 
	 where uname='$uname' and upass='$upass' and utype='$utype'";


$rs= mysql_query($sql);

if (!$rs){exit("Error in SQL AAA");}
while ($row = mysql_fetch_row($rs)) 
    {
        $uid=$row[0];
        $uname1=$row[1];
        $pass1=$row[2];
        $type1=$row[3];
        $name1=$row[4];
    }

if($uname!=$uname1 and $upass!=$pass1 and $utype!=$type1)
{
   header('Location:Login.php?msg=E');
}
else 
{
   $_SESSION['userid']=$uid;
   $_SESSION['username']=$uname1;
   $_SESSION['usertype']=$type1;
   $_SESSION['name1']=$name1;
 
if(trim($type1)=='A'){header('Location:seller.php');}
elseif(trim($type1)=='U'){header('Location:sale.php');}
elseif(trim($type1)=='S'){header('Location:seller.php');}

}
odbc_close($conn); 

?>