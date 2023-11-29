<?php

use Patterns\Adapter2\Adapter;
use Patterns\Adapter2\NewDBDriver;

require_once 'NewDBInterface.php';
require_once 'OldDbInterface.php';
require_once 'NewDBDriver.php';
require_once 'Adapter.php';

$adapter = new Adapter(new NewDBDriver());
var_dump($adapter->oldFetchData());