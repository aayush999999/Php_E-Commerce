// JavaScript Document
function userlogin()
{
  if(document.getElementById('uname').value=="")
  {
    alert("Please enter Username.");
	document.getElementById('uname').focus();
	return false;
  }
  else if(document.getElementById('upass').value=="")
  {
  	alert("Please enter Password.");
  	document.getElementById('upass').focus();
	return false;
  }
 else if(document.getElementById('utype').value=="")
  {
  	alert("Select user type.");
  	document.getElementById('utype').focus();
	return false;
  }
  else
  {
    return true;
  }
	
}//End of Userlogin()

function chklot()
{
  if(document.getElementById('item_cd').value=="")
  {
  	alert("Select item code.");
  	document.getElementById('item_cd').focus();
	return false;
  }
 else if(document.getElementById('lot_no').value=="")
  {
  	alert("Select lot number.");
  	document.getElementById('lot_no').focus();
	return false;
  }
  else
  {
    return true;
  }
}//End of chklot()

function chklot1()
{
  if(document.getElementById('grp').value=="")
  {
  	alert("Select Group.");
  	document.getElementById('grp').focus();
	return false;
  }
 else if(document.getElementById('ep_cd').value=="")
  {
  	alert("Select EP Code.");
  	document.getElementById('ep_cd').focus();
	return false;
  }
  else
  {
    return true;
  }
}//End of chklot()


function changepass()
{
	window.open ("../changepassword.php","","status=0,scrollbars=0,width=415,height=260");
	
}//End of changepass()


function CancelRecord()
{	
 	window.close();
	
}//End of CancelRecord()


function ChangePassword()
{
if(document.getElementById('oldpass').value=='')
	{
	   alert('Enter old password.');
	   document.getElementById('oldpass').focus();
		return false;
	}
if(document.getElementById('newpass').value=='')
	{
	   alert('Enter new password.');
	   document.getElementById('newpass').focus();
		return false;
	}
	if(document.getElementById('conpass').value=='')
	{
	   alert('Enter confirm password.');
	   document.getElementById('conpass').focus();
		return false;
	}

if(document.getElementById('newpass').value != document.getElementById('conpass').value)
	{
		alert('Password does not match.');
	    document.getElementById('conpass').focus();
		return false;
	}

if(document.getElementById('oldpass').value != document.getElementById('validpass').value)
	{
		alert('Old password does not match.');
	    document.getElementById('oldpass').focus();
		return false;
	}

	else
	{
		return true;
	}

}//End of ChangePassword()


function successpass()
{
	if(document.getElementById('passmsg').value==1)
	{
		alert("Password Successfully changed.");
		document.getElementById('passmsg').value="";
	}
	else
	{
		document.getElementById('passmsg').value="";
	}
	
}


function tcReport(tctype,tcno)
{
	if((tctype=='NF') || (tctype=='FE'))
	{
		var url = "//172.63.100.201/qms/report/ferrous.php?tcno="+tcno+"&tctype="+tctype;
		window.open (url,'','resizable=yes,toolbar=yes,scrollbars=yes,menubar=yes,width=730');
	}
	else if(tctype=='MC')
	{
		var url = "//172.63.100.201/qms/report/mechanical.php?tcno="+tcno+"&tctype="+tctype;
		window.open (url,'','resizable=yes,toolbar=yes,scrollbars=yes,menubar=yes,width=730');
	}
	else if(tctype=='UT')
	{
		var url = "//172.63.100.201/qms/report/ultrasonic.php?tcno="+tcno;
		window.open (url,'','resizable=yes,toolbar=yes,scrollbars=yes,menubar=yes,width=730');
	}
	else if(tctype=='MR')
	{
		var url = "//172.63.100.201/qms/report/micro.php?tcno="+tcno;
		window.open (url,'','resizable=yes,toolbar=yes,scrollbars=yes,menubar=yes,width=730');
	}
	else if(tctype=='DP')
	{
		var url = "//172.63.100.201/qms/report/dyepn.php?tcno="+tcno;
		window.open (url,'','resizable=yes,toolbar=yes,scrollbars=yes,menubar=yes,width=730');
	}
	else if(tctype=='MP')
	{
		var url = "//172.63.100.201/qms/report/mpitest.php?tcno="+tcno;
		window.open (url,'','resizable=yes,toolbar=yes,scrollbars=yes,menubar=yes,width=730');
	}
	else if(tctype=='FR')
	{
		var url = "//172.63.100.201/qms/report/fracturetest.php?tcno="+tcno;
		window.open (url,'','resizable=yes,toolbar=yes,scrollbars=yes,menubar=yes,width=730');
	}
	else if(tctype=='IH')
	{
		var url = "//172.63.100.201/qms/report/inductiontest.php?tcno="+tcno;
		window.open (url,'','resizable=yes,toolbar=yes,scrollbars=yes,menubar=yes,width=730');
	}
	else if(tctype=='ED')
	{
		var url = "//172.63.100.201/qms/report/eddycurrent.php?tcno="+tcno;
		window.open (url,'','resizable=yes,toolbar=yes,scrollbars=yes,menubar=yes,width=730');
	}
	else if(tctype=='NI')
	{
		var url = "//172.63.100.201/qms/report/nitrate.php?tcno="+tcno;
		window.open (url,'','resizable=yes,toolbar=yes,scrollbars=yes,menubar=yes,width=730');
	}
	else
	{
 		return false;
	}

		
}//tcReport


function chkfileupload()
{
	var extArray = new Array(".jpg", ".png", ".bmp", ".doc", ".docx", ".txt", ".gif", ".jpeg");
	var file = document.getElementById('tcimg').value;

	if(document.getElementById('tctype').value=='')
	{
	   alert('Select TC Type.');
	   document.getElementById('tctype').focus();
		return false;
	}

	if(document.getElementById('tcno').value=='')
	{
	   alert('Select TC No.');
	   document.getElementById('tcno').focus();
		return false;
	}
	
	if(document.getElementById('tcimg').value=='')
	{
	   alert('Select Image File.');
	   document.getElementById('tcimg').focus();
		return false;
	}

	if(document.getElementById('tcimg').value!='')
	{
	 allowSubmit = false;
   	 if (!file) return;
    	 while (file.indexOf("\\") != -1)
    	 file = file.slice(file.indexOf("\\") + 1);
    	 ext = file.slice(file.indexOf(".")).toLowerCase();
    	 for (var i = 0; i < extArray.length; i++) {
    	 if (extArray[i] == ext) { allowSubmit = true; break; }
    	 }
    	 if (allowSubmit) return true;
    	 else
    	 alert("Please only upload files that end in types:  "
    	 + (extArray.join("  ")) + "\nPlease select a new "
    	 + "file to upload and submit again.");
 	   return false;
	}
		
}//chkfileupload


function chkdel()
{
	if(confirm("Are you sure want to delete?"))
	{
		return true;
	}
	else
	{
		return false;
	}
	
}//chkdel


function chkedit()
{
if (confirm("Are you Sure....??"))
   {
	   return true;
   }
   else   
   {
	   return false;
   }

}//chkedit



function viewimg(img)
{
	var imgpath = "//172.63.100.201/qms/fileupload/"+img;
	window.open (imgpath,'','resizable=yes,toolbar=no,scrollbars=yes,menubar=yes,width=730,height=650');
	
}//viewimg


function viewdrawimg(img)
{
	var imgpath = "../DrawingFiles/"+img;
	window.open (imgpath,'','resizable=yes,toolbar=no,scrollbars=yes,menubar=yes,width=730,height=650');
	
}//viewimg


function Searchbytc()
{
 	var srchtype  = document.getElementById('Srchtctype').value;
	var srchtcno = document.getElementById('Srchtcno').value;

    if(srchtype=='')
	{
	   alert('Select TC Type.');
	   document.getElementById('Srchtctype').focus();
		return false;
	}
	
	if(srchtcno=='')
	{
	   alert('Enter TC No.');
	   document.getElementById('Srchtcno').focus();
		return false;
	}
	else
	{
	  window.location.href="../report/fileupload.php?srchno="+srchtcno+"&srchtype="+srchtype;
	}
	
}//Searchbytc


function SearchDrawing()
{
	var Srchdno  = document.getElementById('Srchdno').value;
	var Srchdesc = document.getElementById('Srchdesc').value;
	
	if(Srchdesc=="" && Srchdno=="")
	{
	   alert('Enter Drwaing No. or Drawing Description For Searching.');
	   document.getElementById('Srchdno').focus();
		return false;
	}
	else
	{
		window.location.href="../report/drawupload.php?Srchdno="+Srchdno+"&Srchdesc="+Srchdesc;
	}
	
	
}//SearchDrawing


function chkpermission()
{ 
	
	if(document.getElementById('usernm').value=='')
	{
	   alert('Select User Name.');
	   document.getElementById('usernm').focus();
		return false;
	}
	else
	{
		return true;
	}
	
}//chkpermission




function fileup()
{
	if(document.getElementById('fupload').checked==true)
	{
		document.getElementById('perfup').value="Y";
	}
	else
	{
		document.getElementById('perfup').value="N";
	}
	
}//Permission file upload

function filedel()
{
	if(document.getElementById('fdelete').checked==true)
	{
		document.getElementById('perfdel').value="Y";
	}
	else
	{
		document.getElementById('perfdel').value="N";
	}
	
}//Permission file delete


function filedrawup()
{
	if(document.getElementById('drawupload').checked==true)
	{
		document.getElementById('perdfup').value="Y";
	}
	else
	{
		document.getElementById('perdfup').value="N";
	}
	
}//Permission drawing file upload


function chkdrawfile()
{
	var extArray = new Array(".jpg", ".png", ".bmp", ".doc", ".docx", ".txt", ".gif", ".jpeg");
	var file = document.getElementById('tcimg').value;
	
	if(document.getElementById('dno').value=='')
	{
	   alert('Enter Drawing No.');
	   document.getElementById('dno').focus();
		return false;
	}
	
	if(document.getElementById('desc').value=='')
	{
	   alert('Enter Drawing Description.');
	   document.getElementById('desc').focus();
		return false;
	}
	
	if(document.getElementById('tcimg').value=='')
	{
	   alert('Select File for Upload.');
	   document.getElementById('tcimg').focus();
		return false;
	}

	if(document.getElementById('tcimg').value!='')
	{
	 allowSubmit = false;
   	 if (!file) return;
    	 while (file.indexOf("\\") != -1)
    	 file = file.slice(file.indexOf("\\") + 1);
    	 ext = file.slice(file.indexOf(".")).toLowerCase();
    	 for (var i = 0; i < extArray.length; i++) {
    	 if (extArray[i] == ext) { allowSubmit = true; break; }
    	 }
    	 if (allowSubmit) return true;
    	 else
    	 alert("Please only upload files that end in types:  "
    	 + (extArray.join("  ")) + "\nPlease select a new "
    	 + "file to upload and submit again.");
 	   return false;
	}
	
}//chkdrawfile


function chknewuser()
{
  if(document.getElementById('uname').value=="")
  {
    alert("Please enter Username.");
	document.getElementById('uname').focus();
	return false;
  }
  else if(document.getElementById('upass').value=="")
  {
  	alert("Please enter Password.");
  	document.getElementById('upass').focus();
	return false;
  }
  else if(document.getElementById('conpass').value=='')
  {
	   alert('Enter confirm password.');
	   document.getElementById('conpass').focus();
		return false;
  }
  else if(document.getElementById('upass').value != document.getElementById('conpass').value)
  {
		alert('Password does not match.');
	    document.getElementById('conpass').focus();
		return false;
  }
  else 
  {
	  return true;
  }
	
}//chknewuser


/////For Character Count///////////////
function getObject(obj) {
  var theObj;
  if(document.all) {
    if(typeof obj=="string") {
      return document.all(obj);
    } else {
      return obj.style;
    }
  }
  if(document.getElementById) {
    if(typeof obj=="string") {
      return document.getElementById(obj);
    } else {
      return obj.style;
    }
  }
  return null;
}

//Contador de caracteres.
function Contar1(entrada,salida,texto,caracteres) {
  var entradaObj=getObject(entrada);
  var salidaObj=getObject(salida);
  var longitud=caracteres - entradaObj.value.length;
  if(longitud <= 0) {
    longitud=0;
    texto='<span class="disable"> '+texto+' </span>';
    entradaObj.value=entradaObj.value.substr(0,caracteres);
  }
  salidaObj.innerHTML = texto.replace("{CHAR}",longitud);
}
/////////////////////////////////////////////////////////


function searchpg()
{
	document.form1.action="lotsearch.php";
	document.form1.submit();
	
}//searchpg