<?php 
include('db4.php');

// EXPORT

$sqle="SELECT `Item_Code`, `Item_Group`, `Item_Description`, `Stock_Quantity`, `Rate`
	   FROM `master_stock`";
	   
$Exp='<table width="100%" border="1" cellpadding="2" cellspacing="0" align="center">
  <tr>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Item Code</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Item Group</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Item Description</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Stock Qty.</td>
    <td width="7%" align="center" bgcolor="#DFDFDF" class="style23">Price</td>  
  </tr>';
$rse= mysql_query($sqle);
if (!$rse){exit("Error in SQL AAA");}
while ($row = mysql_fetch_row($rse)) 
    {
     $Exp.="<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4];
	}
$Exp='</table>';	
header("Content-type:application/vnd.ms-excel"); 
header("Content-Disposition:attachment;filename=Report.xls"); 

?>