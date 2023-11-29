<?php

namespace Patterns\Adapter;

require_once 'GraphicInterface.php';
require_once 'Adapter.php';
require_once 'ThirdPartyLibrary.php';

$adapter = new Adapter(new ThirdPartyLibrary());
$adapter->draw();