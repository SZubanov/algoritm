<?php

namespace Patterns\State;

class Ticket
{
    private TicketState $state;

    public function __construct()
    {
        $this->state = new AvailableState();
    }

    public function setState(TicketState $state): void
    {
        $this->state = $state;
    }

    public function reserve(): void
    {
        $this->state->reserve($this);
    }

    public function purchase(): void
    {
        $this->state->purchase($this);
    }
}