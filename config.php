<?php
if (basename($_SERVER["SCRIPT_FILENAME"]) == basename(__FILE__)){
echo "<p align=center><br><br><br><br><br><br><font size=\"6\" color=\"#FF0000\">ILLEGAL ACCESS !!";
echo "<meta http-equiv=\"refresh\" content=\"2; url=./index.php\">";
exit();} 
?>

<?php
	$server_name="localhost";
	$userdb="userdb";
	$passdb="passworddb";
	$databasename="database";
    $admindir="linkadmin";
    $baseurl = $_SERVER['SERVER_NAME'];
	$mobile = 'template/mobile';
	$desktop = 'template/desktop';
	$webz2fa   = "namadomain"; 
    $ttl2fa     = "namadomain";
    $tlrz2fa = 5;
	//$secret_key_google = "6LfkilIUAAAAALwCLJBWYI09i0wrEvaYK2yhIGw6";
	//$site_key_google = "6LfkilIUAAAAAFS3wrB0PU0X4n5Dt78xLUHbbFd2";
	
	$mysqli = new mysqli($server_name, $userdb, $passdb,$databasename);		


if ($mysqli->connect_error) {
   // die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    die('<center><br><h2>server bussy, please wait...</h2></center>');
}


$rpc_host = "139.180.211.157";
$rpc_port = "22556";
$rpc_user = "dogecoin";
$rpc_pass = "dragonexchange";
$blockchain_tx_url = "https://dogechain.info/tx/"; //Blockchain Url
	date_default_timezone_set("Asia/Hong_Kong");
	?>
