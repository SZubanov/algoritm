<?php

namespace Patterns\State;

class AvailableState extends TicketState
{

    public function reserve(Ticket $ticket): void
    {
        echo "Билет зарезервирован.\n";
        $ticket->setState(new ReservedState());
    }

    public function purchase(Ticket $ticket): void
    {
        echo "Билет куплен.\n";
        $ticket->setState(new PurchasedState());
    }
}