<?php
include("./config.php");
include("./easybitcoin.php");
  $bitcoin = new Bitcoin($rpc_user,$rpc_pass,$rpc_host); 	
  $saldodoge = $bitcoin->getbalance($user_session);

?>
