<html>
      
    <head>
<title>Print Preview Sample</title>
<script language="javascript">
function printPage(printContent) {
var display_setting="toolbar=yes,menubar=yes,";
display_setting+="scrollbars=yes,width=650, height=600, left=100, top=25";


var printpage=window.open("","",display_setting);
printpage.document.open();
printpage.document.write('<html><head><title>Print Page</title></head>');
printpage.document.write('<body onLoad="self.print()" align="center">'+ printContent +'</body></html>');
printpage.document.close();
printpage.focus();
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<div id="printsection">
<table width="652" border="0">
<tr>
<td width="30" height="24">&nbsp;</td>
<td width="606"><strong></strong></td>
</tr>
<tr>
<td height="129">&nbsp;</td>
<p>

<p>
</tr>
</table>

</div>
<a href="javascript:void(0);" onClick="printPage(printsection.innerHTML)">Print Preview</a>
</body>
</html>
