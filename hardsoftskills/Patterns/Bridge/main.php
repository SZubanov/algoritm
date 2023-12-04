<?php

use Patterns\Bridge\Call;
use Patterns\Bridge\DeviceOperation;
use Patterns\Bridge\Phone;

require_once 'DeviceInterface.php';
require_once 'FunctionInterface.php';
require_once 'AbstractDevice.php';
require_once 'Phone.php';
require_once 'Tablet.php';
require_once 'SmartWatch.php';
require_once 'Call.php';
require_once 'Text.php';
require_once 'DeviceOperation.php';

$phone = new Phone();
$callFunction = new Call();
$phoneOperation = new DeviceOperation($phone, $callFunction);
echo $phoneOperation->operate();
