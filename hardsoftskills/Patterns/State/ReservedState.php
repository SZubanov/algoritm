<?php

namespace Patterns\State;

class ReservedState extends TicketState
{
    public function reserve(Ticket $ticket): void
    {
        echo "Билет уже зарезервирован.\n";
    }

    public function purchase(Ticket $ticket): void
    {
        echo "Билет куплен.\n";
        $ticket->setState(new PurchasedState());
    }
}