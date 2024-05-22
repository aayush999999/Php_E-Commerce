<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
<title>E-Commerce</title>
</head>
<?
$m=$_REQUEST['msg'];

?>
<frameset rows="150,*,42.5" frameborder="0" border="0" framespacing="0" scrolling="NO">
  <frame name="topNav" src="menuhead.html" scrolling="NO">
<frameset cols="300,*,300" frameborder="0" border="0" framespacing="0" scrolling="NO">
	<frame name="menu" src="menuleft.php" marginheight="0" marginwidth="0"  noresize scrolling="NO">
	<frame name="content" src="menucenter.php" marginheight="0" marginwidth="0"  noresize scrolling="NO">
        <frame name="gm" src="menuright.php" marginheight="0" marginwidth="0"  noresize scrolling="NO">
</frameset>

  <frame name="footer" src="menufooter.php" scrolling="NO">


</frameset>
</html>