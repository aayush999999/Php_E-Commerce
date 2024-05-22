<?php

error_reporting (E_ALL ^ E_NOTICE);

include('db4.php'); 
session_start();
include('CheckLogin.php');
date_default_timezone_set("Asia/Calcutta");
$tm=date('H:i:s');

// IMAGE UPLOAD

$S2=trim($_POST['S2']);

	if($S2=='UPLOAD')
	{
$icd=trim($_POST['icd']);
$target_dir = "Image/";
$target_file = $target_dir . "$icd.jpg";
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$imgnm="$icd.jpg";
   
  if (move_uploaded_file($_FILES["tcimg"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["tcimg"]["name"])). " has been uploaded.";
	
	$usql3="UPDATE `master_stock` SET `flag1` = '$imgnm'
             WHERE `Item_Code`='$icd'  ";
		
$rs3= mysql_query($usql3);
if (!$rs3){exit("Error in SQL AAAci");}

echo "Image uploaded...........";

	
	
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}



//  IMAGE END

$S1=trim($_POST['S1']);
$act=trim($_REQUEST['act']);


$r7=$_SESSION['username'];
$utyp=$_SESSION['usertype'];

if($utyp=='A'){ $qq="" ;}
else{ $qq="AND `uname` = '$r7' " ; }


// INSERT
if($S1=='INSERT')
{	 
$r1=trim($_POST['r1']);
$r2=trim($_POST['r2']);
$r3=trim($_POST['r3']);
$r4=trim($_POST['r4']);
$r5=trim($_POST['r5']);
$r6=$r4*$r5;



if($r2=='' || $r3=='' || $r4=='' || $r5=='')
{ echo "Enter data in all column..........."; }
else
{	
 $usql1="SELECT max(`Item_Code`)
       FROM `master_stock`";
	 
	   
 $rs1= mysql_query($usql1);
if (!$rs1){exit("Error in SQL AAA");}
while ($row = mysql_fetch_row($rs1)) 
    { $cnt=$row[0]+1; }



 $usql="INSERT INTO `master_stock`(`uname`, `Item_Code`, `Item_Group`, `Item_Description`, `Stock_Quantity`, `Rate`,`Total_Amount`,`flag1`) VALUES ('$r7','$cnt','$r2','$r3','$r4','$r5','$r6', 1) ";
		
		
 $rs= mysql_query($usql);
if (!$rs){exit("Error in SQL BBB");}

echo "Item  INSERTED...........";

}
}


// Delete

if($S1=='DELETE')
{	

$r1=trim($_POST['r1']);

 $usql="DELETE FROM `master_stock`
       WHERE `Item_Code`='$r1' ";		

		
 $rs= mysql_query($usql);
if (!$rs){exit("Error in SQL AAAC");}

echo "Item deleted...........";
}




//  EDIT

if($act=='EDIT')
{	
$rrr=trim($_REQUEST['rrr']);

echo $rrr;
 $usql="SELECT `uname`, `Item_Code`, `Item_Group`, `Item_Description`, `Stock_Quantity`, `Rate`, `Total_Amount`
       FROM `master_stock`
	   WHERE `Item_Code`='$rrr'
       order by 1 ";
		

		
 $rs= mysql_query($usql);
if (!$rs){exit("Error in SQL AAAD");}
 $k=0;
while ($row = mysql_fetch_row($rs)) 
    {$k++;
        $a11=$row[0];
        $a12=$row[1];
        $a13=$row[2];
        $a14=$row[3];
        $a15=$row[4];
        $a16=$row[5];
		$a17=$row[6];
	}
}



// UPDATE

if($S1=='UPDATE')
{	
$r1=trim($_POST['r1']);
$r2=trim($_POST['r2']);
$r3=trim($_POST['r3']);
$r4=trim($_POST['r4']);
$r5=trim($_POST['r5']);
$r6=$r4*$r5;



if($r2=='' || $r3=='' || $r4=='' || $r5=='' || $r6=='')
{ echo "Enter data in all column..........."; }
else
{	
 $usql1="SELECT count(*)
       FROM `master_stock`
	   WHERE `Item_Code`='$r1' ";
																									
 $rs1= mysql_query($usql1);
if (!$rs1){exit("Error in SQL AAAE");}
while ($row = mysql_fetch_row($rs1)) 

$usql="UPDATE `master_stock` SET `Item_Group`='$r2',`Item_Description`='$r3',`Stock_Quantity`='$r4',`Rate`='$r5',`Total_Amount`='$r6'
       WHERE `Item_Code`='$rrr' ";
		

		
 $rs= mysql_query($usql);
if (!$rs){exit("Error in SQL BBBE");}


echo " Item UPDATED..........."; 
}

$a11=$a12=$a13=$a14=$a15=$a16='';
}








?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title >:: E-Commerce ::</title>
<style type="text/css">
<!--
.style1 {
	font-family:"Courier New", Courier, monospace;
	font-size: 30px;
	color: #515455;
	font-weight: bold;
//	text-decoration:underline;
	}
.style22 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 30px; }
.styletc {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; text-decoration:none; }
.style23 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 30px; font-weight: bold; }
.styleerr {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 18px;  color:#FF0000; }
.style24 {color: #FF0000}
.linkstyle1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 50px;
	font-weight: bold;
	color: #CA8545;
}
.linkstyle2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 20px;
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
body {font-family:Comic sans MS,Verdana, Arial, Helvetica, sans-serif;font-size:18pt;	margin:30px;background-color:#D6D6D6;}
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
<SCRIPT language="javascript">
function chkedit()
{
if (confirm("Are you Sure....??"))
   {return true;}
   else
   { return false;}
}
</SCRIPT>

<script language="javascript" src="js/validation.js"></script>
</head>

<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<?php include('link.php');  ?>
</tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td colspan="8" align="left"><span class="styleerr"><?php echo $emsg;?></span></td>
  </tr>
   <tr>
     <td colspan="8">
	 <div>&nbsp;</div>
<table align="center" border="1">
  <tr>
	<td align="center" colspan="10"><span class="style1">Item Details</span></td> 
  </tr>
 
  
  <tr align="center" >
	<td>Item Code</td>
	<td>Item Group</td>
	<td>Image</td>
	<td>Item Description</td>
	<td>Stock Quantity</td>
	<td>Item Rate</td>
	<td>Total Amount</td>
	<td>Action</td>
  </tr>
<form name="form2" id="form2" method="post" action="">
 
   <tr>
	
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23"></td>
    
	<td width="7%" align="center" bgcolor="#DFDFDF" class="style23">
	<select name="r2" id="r2" tabindex="3">
<?php if($act=='Edit'){?><option value="<?php echo $a13;?>"><?php echo $a13;?></option><?php }?>
            <option value="">Select</option>
		<option value="Electrical">Electrical</option>
		<option value="Grocery">Grocery</option>
		<option value="Appliance">Appliance</option>
		<option value="Furniture">Furniture</option>
		<option value="Fashion">Fashion</option>
		<option value="Toy">Toy</option>
		<option value="Mobiles">Mobiles</option>
		<option value="Electronic">Electronic</option>
		
	</select>
	</td>
	
	<td width="7%" align="center" bgcolor="#DFDFDF" class="style23">
	
	</td>
    <td width="10%" align="center" bgcolor="#DFDFDF" class="style23"><input type="text" name="r3" id="r3" size=10 value="<?php echo $a14; ?>"/></td>
    <td width="6%" align="center" bgcolor="#DFDFDF" class="style23"><input type="text" name="r4" id="r4" size=10 value="<?php echo $a15; ?>"/></td>
    <td width="6%" align="center" bgcolor="#DFDFDF" class="style23"><input type="text" name="r5" id="r5" size=10 value="<?php echo $a16; ?>"/></td>
    <td width="6%" align="center" bgcolor="#DFDFDF" class="style23" ></td>
	<td width="9%" align="center" bgcolor="#DFDFDF" class="style23"  >
		<input type="submit" name="S1" id="S1" value="INSERT" tabindex="7" onclick="return chklot();"/>
	
		<input type="submit" name="S1" id="S1" value="UPDATE" tabindex="7"/>
	</td>
	
   </td>
  </tr>
</form>

<?php 
 include('db4.php');
 

  $usql5="SELECT `uname`, `Item_Code`, `Item_Group`, `Item_Description`, `Stock_Quantity`, `Rate`, `Total_Amount`, `flag1`
		FROM `master_stock`
		WHERE `Item_Code` is not NULL 
		$qq 
		order by 2 ";
	

		
$rs5= mysql_query($usql5);
if (!$rs5){exit("Error in SQL AAAF");}
 $k=0;
while ($row = mysql_fetch_row($rs5)) 
    {$k++;
		$a1=$row[0];
        $a2=trim($row[1]);
        $a3=$row[2];
        $a4=$row[3];
        $a5=$row[4];
        $a6=$row[5];
		$a7=$row[6];
		$a8=$row[7];
   

    if(($k%2)==0) { $bg=""; }
	else { $bg="#FFFFA"; }

 
	?>
  <tr height="30" bgcolor="<?php echo $bg; ?>">
    <td align="center"><span class="style22"><?php echo $a2; ?></span></td>
    <td align="center"><span class="style22"><?php echo $a3; ?></span></td>
	<td width="7%" align="center" bgcolor="#DFDFDF" class="style23">
		<img src="Image/<?php echo $a2.'.jpg'; ?>"  width="150" height="100"></img>
	<?php if($utype=='A' || $a8==1){ ?>
<form  name="form2" id="form2" method="post" enctype="multipart/form-data" >
     <input type="hidden" name="icd" id="icd"  value="<?php echo  $a2;?>"/>
	 <input type="file" name="tcimg" id="tcimg" />
	 <input type="submit" name="S2" id="S2" value="UPLOAD"  tabindex="7"  /> 
	</form>
<?php } ?>	

		</td>
    
	<td align="center"><span class="style22"><?php echo $a4; ?></span></td>
    <td align="center"><span class="style22"><?php echo $a5; ?></span></td>
    <td align="center"><span class="style22"><?php echo '₹'.$a6; ?></span></td>
	<td align="center"><span class="style22"><?php echo '₹'.$a7; ?></span></td>
	
	 <td align="center">
 <form name="form2" id="form2" method="post" action="">
	 <input type="submit" name="S1" id="S1" value="DELETE" tabindex="7" onclick="return chkdel();" />&nbsp; 
	 <span class="style22"> <button onclick="return chkedit();"><a href="seller.php?act=EDIT&rrr=<?php echo $a2; ?>">EDIT</a></button>
		</span>
	
	 <input type="hidden" name="r1" id="r1" value="<?php echo $a2; ?>"  /></td>
	  
</form>	
	
  </tr>
  <?php  
  		
   $a1=$a2=$a3=$a4=$a5=$a6='';
   }	?>



</table>
</body>
</html>