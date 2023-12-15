<?php

require_once 'ObserverInterface.php';
require_once 'AdminObserver.php';
require_once 'UserActivityMonitor.php';

use Patterns\Observer\AdminObserver;
use Patterns\Observer\UserActivityMonitor;

$monitor = new UserActivityMonitor();

$adminObserver = new AdminObserver();

$monitor->addObserver($adminObserver);

$monitor->simulateActivity();

$monitor->removeObserver($adminObserver);

$monitor->simulateActivity();