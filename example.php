<?php

require 'vendor/autoload.php';

$dial = '0031000000000'; // Dail telephone number
$ip = 'xxx.xxx.xxx.xxx'; // IP of the CISCO ip telephone.

$client = new \Cisco\dailer();
$client->dail($dial, $ip);
