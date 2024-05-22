<?php 
  include('CheckLogin.php');  	
  session_start(); 
  $uid=$_SESSION['userid'];
  	include('db4.php');
     $selectSql="SELECT upass FROM registration WHERE uid=$uid";
     
$rs= mysql_query($selectSql);

if (!$rs){exit("Error in SQL AAA");}
while ($row = mysql_fetch_row($rs)) 
    {
        $password=$row[0];
        $password2 = trim($password); 	
    }
     
	  if(isset($_REQUEST['msg'])=='C') {
	     $msg=1;
	  }	else {
	  	 $msg=""; 
	  }  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::E-COMMERCE::</title>
<link href="main.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.passstyle1 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif;}
-->
</style>
<script src="js/validation.js"></script>
</head>

<body onload="successpass();">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1" ></td>
    <td width="100%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        
        <tr>
          <td colspan="2" >&nbsp;</td>
        </tr>
        <tr >
          <td colspan="2"  valign="top"  ><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff"  >
              <tr>
                <td width="1"></td>
                <td  valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="3">
                    
                    <tr>
                      <td align="center" ><font face="Verdana, Arial, Helvetica, sans-serif" size="3"><b>Change Password</b></font></td>
                    </tr>
                    <tr>
                      <td valign="top">&nbsp;</td>
                    </tr>
                    <tr>
                      <td>  
	<form id="form1" name="form1" method="post" action="ChangePassword_process.php" onsubmit="return ChangePassword();">
               <table width="100%" border="0" align="center" cellpadding="2" cellspacing="0">
                      <tr>
                      <td width="7%" align="left">&nbsp;</td>
          <td height="20" colspan="4" align="left" class="passstyle1">Old Password<font color="#FF0000">*</font> </td>
                      <td width="1%" height="20" align="left"><strong>:</strong></td>
                      <td width="49%" height="20" align="left"><input name="oldpass" id="oldpass" type="password" class="textbox_normal" maxlength="20" tabindex="1" />			</td>
                    </tr>
                    <tr>
                      <td align="left" >&nbsp;</td>
                      <td height="20" colspan="4" align="left" class="passstyle1">New Password<font color="#FF0000">*</font> </td>
                      <td height="20" align="left"><strong>:</strong></td>
                      <td height="20" align="left"><input name="newpass" id="newpass" type="password" class="textbox_normal" maxlength="20" tabindex="2" />					  </td>
                    </tr>
                    <tr>
                      <td align="left" >&nbsp;</td>
                <td height="20" colspan="4" align="left" class="passstyle1">Confirm Password <font color="#FF0000">*</font> </td>
                      <td height="20" align="left"><strong>:</strong></td>
                      <td height="20" align="left"><input name="conpass" id="conpass" type="password" class="textbox_normal" maxlength="20" tabindex="3" />			    </td>
                    </tr>
                    <tr>
                      <td align="center" class="smallgraytxt">&nbsp;</td>
                      <td height="15" colspan="4" align="center" class="smallgraytxt">
					  <input type="hidden" name="validpass" id="validpass" value="<?php echo $password2; ?>" /></td>
                      <td height="15" colspan="2" align="left" class="smallgraytxt">&nbsp;</td>
                    </tr>
                    <tr>
                      <td align="center" class="smallgraytxt">
					  <input type="hidden" name="passmsg" id="passmsg" value="<?php echo $msg; ?>" />
					  </td>
                      <td width="13%" height="20" align="center" class="smallgraytxt">&nbsp;</td>
                      <td width="10%" align="center" class="smallgraytxt">&nbsp;</td>
                      <td width="10%" align="center" class="smallgraytxt">&nbsp;</td>
                      <td height="20" colspan="3" align="left" class="smallgraytxt">
		  <input type="submit" name="Submit" value="Update" tabindex="4" onclick="return ChangePassword();" />
&nbsp;    <input type="button" name="button" value="Cancel" tabindex="5" onclick="CancelRecord();" /></td>
                      </tr>
                  </table>
                        </form>
					</td>
                    </tr>
                    
                  </table></td>
              </tr>
            </table></td>
        </tr>
       
      </table></td>
    <td width="1"  style="background-repeat:repeat-y"></td>
  </tr>
</table>
</body>
</html>
