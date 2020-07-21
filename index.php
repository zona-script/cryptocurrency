<?php
include("./config.php");
include("./easybitcoin.php");
  $bitcoin = new Bitcoin($rpc_user,$rpc_pass,$rpc_host); 	
  $saldodoge = $bitcoin->getbalance($user_session);

$addr=print_r($bitcoin->getnewaddress (),true); echo "\n";
echo "addr=".$addr; echo "\n";

?>
