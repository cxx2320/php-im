<?php

use GatewayClient\Gateway;

require_once '../vendor/autoload.php';

$cid = $_GET['cid'];
$msg = $_GET['msg'];

var_dump(runtime_path());exit;
Gateway::$registerAddress = '127.0.0.1:1238';

Gateway::sendToClient($cid, $msg);