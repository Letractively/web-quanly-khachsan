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
</head>
<body>
<div id="printsection">
<table width="652" border="0">
<tr>
<td width="30" height="24">&nbsp;</td>
<td width="606"><strong>This is a sample content for printing</strong></td>
</tr>
<tr>
<td height="129">&nbsp;</td>
<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like.</td>
</tr>
</table>

</div>
<a href="javascript:void(0);" onClick="printPage(printsection.innerHTML)">Print Preview</a>
</body>
</html>