<?php

use Patterns\State\Ticket;

require_once 'TicketState.php';
require_once 'ReservedState.php';
require_once 'PurchasedState.php';
require_once 'AvailableState.php';
require_once 'Ticket.php';

$ticket = new Ticket();
$ticket->reserve();
$ticket->reserve();
$ticket->purchase();
$ticket->purchase();
$ticket->reserve();