<?php 
if(isset($_REQUEST['msg'])=='E')
{
	$err = "Invalid username and password.";
}
else
{
	$err = "";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>:: ONLINE LOGIN PAGE ::</title>
<style type="text/css">

<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 22px;
	font-weight: bold;
	color: #B03060;
        text-decoration:underline;
}
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 22px;
	font-weight: bold;
	color: #9ACD32;
        text-decoration:underline;
}
.style3 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: BLUE;
        text-decoration:underline;
}
.style4 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style5 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FF0000;
	font-size: 14px;
}
body {font-family:Comic sans MS,Verdana, Arial, Helvetica, sans-serif;font-size:10pt;	margin:30px;background-color:#D6D6D6;}
-->
</style>


<script language="javascript" src="js/validation.js"></script>
</head>

<body>
<form name="form1" id="form1" method="post" action="loginprocess.php" onsubmit="return userlogin();">

<table width="100%" border="0" cellspacing="2" cellpadding="1">
  <tr>
    <td width="20%">&nbsp;</td>
    <td colspan="4" align="center">&nbsp;<span class="style3">LOGIN PROTAL</span></td>
    
    <td width="19%">&nbsp;</td>
  </tr>
  <tr>
    <td height="37">&nbsp;</td>
    <td colspan="4" align="center">&nbsp;<span class="style1">WELCOME TO E-COMMERCE, KANPUR</span></td>
    <td ><a href="homepage.php"  class="style1">Home</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;<span class="style5"><?php echo $err; ?></span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="30">&nbsp;</td>
    <td width="17%">&nbsp;</td>
    <td width="17%" align="left" class="style4">User Name</td>
    <td width="2%" align="center">&nbsp;<strong>:</strong></td>
    <td>&nbsp;<input type="text" name="uname" id="uname" tabindex="1" maxlength="15" />Press Tab</td>
    <td align="left">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left" class="style4">Password</td>
    <td align="center">&nbsp;<strong>:</strong></td>
    <td>&nbsp;<input type="password" name="upass" id="upass" tabindex="2" maxlength="15" />Press Tab</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left" class="style4">Type</td>
    <td align="center">&nbsp;<strong>:</strong></td>
    <td>&nbsp;<select name="utype" id="utype" tabindex="3">
			  <option value="">-Select-</option>
			  <option value="A">-ADMIN-</option>
			  <option value="U">-BUYER-</option>
			  <option value="S">-SELLER-</option>
			  
	</select> 
	
	
	</td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="left" class="style4"></td>
    <td align="center">&nbsp;<strong></strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;<input type="submit" name="S1" id="S1" tabindex="4" value="LOGIN" onclick="return userlogin();" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</form>

</body>
</html>




