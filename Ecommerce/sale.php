<?php


error_reporting (E_ALL ^ E_NOTICE);

include('db4.php');
session_start();
include('CheckLogin.php');

date_default_timezone_set("Asia/Calcutta");
$tm=date('H:i:s');


$S2=trim($_POST['S2']);

$r1=$_SESSION['username'];

if(isset($_POST['S2'])){
	// INSERT

$r2=trim($_POST['r2']);
$r3=trim($_POST['r3']);
$r4=trim($_POST['r4']);
$r5=trim($_POST['r5']);
$a5=trim($_POST['a5']);
$r6=trim($_POST['r6']);
$amt=($r5*$a5);



if($r2=='' || $r3=='' || $r4=='' || $r5=='')
{ echo "Enter data in all column..........."; }
else
{	
 $usql1="SELECT count(*)
       FROM buyer
	   WHERE uname='$r1' and item_code='$r2'
	   AND flag1 = '1' ";

	   
 $rs1= mysql_query($usql1);
if (!$rs1){exit("Error in SQL AAA");}
while ($row = mysql_fetch_row($rs1)) 
    { $cnt=$row[0]; }


if($cnt>=1)
{  echo "Item Already Added..........."; }
else
{
	
$usql1="INSERT INTO buyer(uname, item_code, item_group, item_description, qty, amount, flag1) VALUES ('$r1','$r2','$r3','$r4','$r5','$amt',	1)";

		
 $rs= mysql_query($usql1);
if (!$rs){exit("Error in SQL BBB");}

echo "Item  Added in CART ...........";
}

}

}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>:: SALE page ::</title>
<style type="text/css">
<!--
.style1 {
	font-family:"Courier New", Courier, monospace;
	font-size: 18px;
	color: #772600;
	font-weight: bold;
	text-decoration:underline;
	}
.style22 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 18px; }
.styletc {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-decoration:none; }
.style23 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold; }
.styleerr {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px;  color:#FF0000; }
.style24 {color: #FF0000}
.linkstyle1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	font-weight: bold;
	color: #CA0000;
}
.linkstyle2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	text-decoration:none; color: #FFFFFF;
}
.linkstyle3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
	text-decoration:none; color: black;
}
.linkstyle4 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
	//font-weight: bold;
	color: #CA0000;
}
body {font-family:Comic sans MS,Verdana, Arial, Helvetica, sans-serif;font-size:10pt;	margin:30px;background-color:#D6D6D6;}
-->
</style>
<SCRIPT language="javascript">
<!--
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'resizable=yes,toolbar=yes,scrollbars=yes,menubar=yes,width=800,height=600');
return false;
}
-->
</SCRIPT>

<script language="javascript" src="js/validation.js"></script>
</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">

<tr  align="right">
</tr>


  <tr>     
    <td width="40%" height="40" align="left" valign="center" bgcolor="#53868B">
        &nbsp;&nbsp;&nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;<a href='#' onclick="window.print();" class="linkstyle2">PRINT</a>&nbsp;&nbsp;
		<strong>|</strong>&nbsp;&nbsp;<a href='cart.php' class="linkstyle2">CART</a>&nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;<a href='sale.php' class="linkstyle2">SALE</a>
		&nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;<a href='bill.php' class="linkstyle2">BILL DETAIL</a>
</td>
    <td width="35%"  height="40" align="left" valign="center" bgcolor="#53868B">
&nbsp;&nbsp;<strong><span class="linkstyle1">SALE DETAIL</span></strong>
</td>
    <td width="25%" height="40" align="right" valign="center" bgcolor="#53868B">
USER : <?php echo strtoupper($_SESSION['username']); ?>&nbsp;&nbsp;<strong>|</strong><a href="changepassword.php" class="linkstyle2" onclick="ChangePassword();">Change Password</a> <strong>|</strong>&nbsp;&nbsp;<a href='logOut.php' class="linkstyle2">Logout</a>&nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;&nbsp;&nbsp;
	</td>
  </tr>
</table><br>

<table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#000000" style="border-collapse:collapse" align="center">
  <tr>
    
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Item Code</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Item Group</td>
	<td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Image</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Item Description</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Stock Qty.</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Price</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Buy Qty</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Action</td>
    
  </tr>

<tr height="30"><td colspan="16" align="center"></td>    
    
<?php 
include('db4.php');


 $usql="SELECT `Item_Code`, `Item_Group`, `Item_Description`, `Stock_Quantity`, `Rate`, `Total_Amount`
		FROM `master_stock`
		WHERE 1
		$qrypmno $qrycat $qryun 
        order by 1 ";

 		
$rs= mysql_query($usql);
if (!$rs){exit("Error in SQL AAA");}
 $k=0;
while ($row = mysql_fetch_row($rs)) 
    {$k++;
        $a1=trim($row[0]);
        $a2=$row[1];
        $a3=$row[2];
        $a4=$row[3];
        $a5=$row[4];
		

        if(($k%2)==0) { $bg=""; }
	else { $bg="#FFFFA"; }

 
	?>
  <tr height="30" bgcolor="<?php echo $bg; ?>">
    <td align="center"><span class="style22"><?php echo $a1; ?></span></td>
    <td align="center"><span class="style22"><?php echo $a2; ?></span></td>
	<td width="7%" align="center" bgcolor="#DFDFDF" class="style23"><img src="Image/<?php echo $a1; ?>.jpg"  width="150" height="100"></img></td>
    <td align="center"><span class="style22"><?php echo $a3; ?></span></td>
    <td align="center"><span class="style22"><?php echo $a4; ?></span></td>
    <td align="center"><span class="style22"><?php echo '₹'.$a5; ?></span></td>
	
<form name="form1" id="form1" method="post" action="sale.php">
    <td align="center"><span class="style22">
		<input type="number" name="r5" id="r5"   min="1" max="10" value="Qty"  /></span></td>
    <td align="center">
		<input type="submit" name="S2" id="S2" value="CART" tabindex="7"  />
		<input type="hidden" name="r1" id="r1" value="<?php echo $a32; ?>" />
		<input type="hidden" name="r2" id="r2" value="<?php echo $a1; ?>"  />
		<input type="hidden" name="r3" id="r3" value="<?php echo $a2; ?>"  />
		<input type="hidden" name="r4" id="r4" value="<?php echo $a3; ?>"  />
		<input type="hidden" name="a5" id="a5" value="<?php echo $a5; ?>"  />
    </td>
</form>	
  </tr>
<?php  
  		
   $a1=$a2=$a3=$a4=$a5='';
   }	?>
</table> 
    <tr>
     <td>&nbsp;</td>
     <td colspan="4">&nbsp;</td>
     <td colspan="2">&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   
</body>
</html>
