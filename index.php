<?php
include("./config.php");
include("./easybitcoin.php");
  $bitcoin = new Bitcoin($rpc_user,$rpc_pass,$rpc_host); 	

 $info = $bitcoin->getnewaddress();
       print("<pre>");
        print(json_encode($info, JSON_PRETTY_PRINT));
        print("</pre>");

?>
