<?php

namespace Patterns\State;

class PurchasedState extends TicketState
{
    public function reserve(Ticket $ticket): void
    {
        echo "Билет уже куплен, резервирование невозможно.\n";
    }

    public function purchase(Ticket $ticket): void
    {
        echo "Билет уже куплен.\n";
    }
}