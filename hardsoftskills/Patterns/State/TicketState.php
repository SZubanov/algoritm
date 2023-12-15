<?php

namespace Patterns\State;

abstract class TicketState
{
    abstract public function reserve(Ticket $ticket): void;
    abstract public function purchase(Ticket $ticket): void;
}