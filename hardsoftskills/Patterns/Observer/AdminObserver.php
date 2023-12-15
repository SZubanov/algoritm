<?php

namespace Patterns\Observer;

use Patterns\Observer\ObserverInterface;

class AdminObserver implements ObserverInterface
{

    public function update(string $message): void
    {
        echo "Администратор получил уведомление: $message\n";
    }
}