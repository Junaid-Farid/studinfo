<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div style="width:100px; height:400px;">
<p>Junaid Ahmed </p>
<p>New Docu</p>
<p>&nbsp;</p>
</div>
<?php
//header('Content-type:application/pdf');
header('Content-type:application/vnd.openxmlformats');
?>
<div style="width:100px; height:400px; margin:500px; display:block; float:right;">
<?php

//readfile('files/86719-Junaid_AhmedCV.pdf');
readfile('files/77075-JunaidAhmedBWP.docx');
?>


</div>
</body>
</html>




<!--  

 <object data="files/19813-Junaid_Ahmed_CV.pdf" type="application/pdf" width="100%" height="100%">
 
  <p>It appears you don't have a PDF plugin for this browser.
  No biggie... you can <a href="myfile.pdf">click here to
  download the PDF file.</a></p>
  
</object>
 

 <!---another script for download pdf file is --->
<!-- <iframe id="myFrame" style="display:none" width="500" height="300"></iframe>
<input type="button" value="Open PDF" onclick = "openPdf()"/>-->
<!---end of download another pdf file script-->
<!--<embed src="files/19813-Junaid_Ahmed_CV.pdf" width="32" height="32"></embed>-->
<!--<script type="text/javascript">
function openPdf()
{
var omyFrame = document.getElementById("myFrame");
omyFrame.style.display="block";
omyFrame.src = "test.pdf";
}
</script>-->
