<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

$secret_key = "36609e0973cbfdb4b3dbe1bc6c0da10e";	 // Pass Your Registered Secret Key from EBS secure Portal
if(isset($_REQUEST)){
	 $response = $_REQUEST;	 
	  print_r($response); exit;
}
?>
<HTML>
<HEAD>
<TITLE>E-Billing Solutions Pvt Ltd - Payment Page</TITLE>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-1">
<style>
	h1       { font-family:Arial,sans-serif; font-size:24pt; color:#08185A; font-weight:100; margin-bottom:0.1em}
    h2.co    { font-family:Arial,sans-serif; font-size:24pt; color:#FFFFFF; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3.co    { font-family:Arial,sans-serif; font-size:16pt; color:#000000; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    h3       { font-family:Arial,sans-serif; font-size:16pt; color:#08185A; margin-top:0.1em; margin-bottom:0.1em; font-weight:100}
    body     { font-family:Verdana,Arial,sans-serif; font-size:11px; color:#08185A;}
	th 		 { font-size:12px;background:#015289;color:#FFFFFF;font-weight:bold;height:30px;}
	td 		 { font-size:12px;background:#DDE8F3}
	.pageTitle { font-size:24px;}
</style>
</HEAD>
<BODY LEFTMARGIN=0 TOPMARGIN=0 MARGINWIDTH=0 MARGINHEIGHT=0 bgcolor="#ECF1F7">
<center>
<table width='100%' cellpadding='0' cellspacing="0" ><tr><th width='90%'>&nbsp;</th></tr></table>
	<center><h3>Response</H3></center>
    <table width="600" cellpadding="2" cellspacing="2" border="0">
        <tr>
            <th colspan="2">Transaction Details</th>
        </tr>
<?php
		foreach( $response as $key => $value) {
?>			
        <tr>
            <td class="fieldName" width="50%"><?php echo $key; ?></td>
            <td class="fieldName" align="left" width="50%"><?php echo $value; ?></td>
        </tr>
<?php
		}
?>		
	</table>
</center>
<table width='100%' cellpadding='0' cellspacing="0" ><tr><th width='90%'>&nbsp;</th></tr></table>
</body>
</html>
