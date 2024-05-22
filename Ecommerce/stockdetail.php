<?php
error_reporting (E_ALL ^ E_NOTICE);

include('db4.php');

date_default_timezone_set("Asia/Calcutta");
$tm=date('H:i:s');

$pmno=trim($_POST['pmno']);
if($pmno!=''){$qrypmno=" and `Item_Code` = '$pmno' ";}else{$qrypmno="";}


$cat=trim($_POST['cat']);
if($cat!=''){$qrycat=" and `Item_Group` = '$cat' ";}else{$qrycat="";}


$un=trim($_POST['unit']);
if($un!=''){$qryun=" and `Item_Description` = '$un' ";}else{$qryun="";}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>:: Stock Details ::</title>
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
	font-size: 16px;
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
  <tr>
    <td width="20%" height="40" align="left" valign="center" bgcolor="#53868B">
        &nbsp;&nbsp;&nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;<a href='#' onclick="window.print();" class="linkstyle2">PRINT</a>&nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;<a href='Export.php' class="linkstyle2">EXPORT</a>&nbsp;&nbsp;<strong>|</strong>
</td>
    <td width="60%"  height="40" align="center" valign="center" bgcolor="#53868B">
&nbsp;&nbsp;<strong><span class="linkstyle1">STOCK DETAILS</span></strong>
</td>
    <td width="20%" height="40" align="right" valign="center" bgcolor="#53868B">
&nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;<a href='Homepage.php' class="linkstyle2">HOME</a>&nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;&nbsp;&nbsp;
</td>
  
  </tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td colspan="8" align="left"><span class="styleerr"><?php echo $emsg;?></span></td>
  </tr>
   <tr>
     <td colspan="8">
	 <div>&nbsp;</div>
<table width="100%" border="1" cellpadding="2" cellspacing="0" bordercolor="#000000" style="border-collapse:collapse" align="center">
  <tr>
    
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Item Code</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Item Group</td>
	<td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Image</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Item Description</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Stock Qty.</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Price</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Action</td>
    
  </tr>
<form name="form1" id="form1" method="post" action="stockdetail.php">
  <tr bgcolor="#A2CD5A">
    
    <td align="center" class="style22"><input type="text" name="pmno" id="pmno" style="width:100px;" maxlength="100" tabindex="1" value="<?php echo $a11;?>"/></td>
    <td align="center" class="style22"><select name="cat" id="cat" tabindex="3">
<?php if($act=='Edit'){?><option value="<?php echo $a12;?>"><?php echo $a12;?></option><?php }?>
            <option value="">Select</option>
		<option value="Electrical">Electrical</option>
		<option value="Grocery">Grocery</option>
		<option value="Appliance">Appliance</option>
		<option value="Furniture">Furniture</option>
		<option value="Fashion">Fashion</option>
		<option value="Toy">Toy</option>
		<option value="Mobiles">Mobiles</option>
		<option value="Electronic">Electronic</option>
		
	</select></td>
    <td align="center" class="style22"></td>
	<td align="center" class="style22">&nbsp;<input type="text" name="unit" id="unit" style="width:240px;" maxlength="100" tabindex="2" value="<?php echo $a13;?>"/></td>
    <td align="center" class="style22"><input type="text" name="r4" id="r4" size=10 value="<?php echo $a14; ?>"/></td>
    <td align="center" class="style22"><input type="text" name="r5" id="r5" size=10 value="<?php echo $a15; ?>"/></td>
    


    <td align="center"><input type="submit" name="S1" id="S1" value="SUBMIT" tabindex="7"  /></td>
  </tr>
</form>

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
	
	
	 
	 
  </tr>
  <?php  
  		
   $a1=$a2=$a3=$a4=$a5='';
   }	?>
</table>
</td>
    </tr>
    <tr>
     <td>&nbsp;</td>
     <td colspan="4">&nbsp;</td>
     <td colspan="2">&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
</table>


</body>
</html>
