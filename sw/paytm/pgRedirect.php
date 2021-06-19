<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();

$ORDER_ID = $_POST["orderid"];
$CUST_ID = $_POST["uid"];
$INDUSTRY_TYPE_ID ="Retail";
$CHANNEL_ID = "WEB";
$TXN_AMOUNT = $_POST["amt"];

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = "qssENP80345087706908";
$paramList["ORDER_ID"] = $ORDER_ID;
$paramList["CUST_ID"] = $CUST_ID;
$paramList["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$paramList["CHANNEL_ID"] = $CHANNEL_ID;
$paramList["TXN_AMOUNT"] = $TXN_AMOUNT;
$paramList["WEBSITE"] = "DEFAULT" ;


$paramList["CALLBACK_URL"] = "http://oobc.in/paytm/pgResponse.php";
//$paramList["MSISDN"] = $MSISDN; //Mobile number of customer
//$paramList["EMAIL"] = $EMAIL; //Email ID of customer
//$paramList["VERIFIED_BY"] = "EMAIL"; //
//$paramList["IS_USER_VERIFIED"] = "YES"; //



//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList,"TU2tWkVuwcOP@Fqp");
// $transactionURL = "https://securegw-stage.paytm.in/theia/processTransaction";
     $transactionURL = "https://securegw.paytm.in/theia/processTransaction"; // for production
?>
<html>
<head>
<title>Merchant Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo $transactionURL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>