<?php  
	$uname = $_SESSION['username'];
	$utype = $_SESSION['usertype']; 
?>
<style type="text/css">
<!--
.linkstyle1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-weight: bold;
	color: #CA0000;
}
.linkstyle2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 15px;
	text-decoration:none;
}
-->
</style>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="63%" height="20"  align="left" valign="top" style="background-repeat:no-repeat; background-position:left">&nbsp;</td>
    <td width="37%"  align="right" valign="top" style="background-repeat:no-repeat; background-position:left"><div style="width:400px; margin-right:20px; margin-top:10px" align="right">
    <span class="linkstyle1">Welcome <?php echo ucwords($uname); ?> </span><strong>|</strong>
	<a href="changepassword.php" class="linkstyle2" onclick="ChangePassword();">Change Password</a> <strong>|</strong>
	<a href="LogOut.php" class="linkstyle2" onclick="return chkedit();">Logout</a></div></td>
  </tr>
  <tr>
    <td height="20" colspan="2"  align="left" valign="top" bgcolor="#53868B">&nbsp;&nbsp;<a href="homepage.php" class="linkstyle2">Home</a>&nbsp;&nbsp;<strong>|</strong>&nbsp;&nbsp;
	<a href='#' onclick="window.print();" class="linkstyle2">PRINT</a>
	</td>
  </tr>
</table>

