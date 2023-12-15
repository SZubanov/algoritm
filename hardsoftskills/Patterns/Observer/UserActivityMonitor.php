<?php

namespace Patterns\Observer;

class UserActivityMonitor
{
    private array $observers = [];

    public function addObserver(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function removeObserver(ObserverInterface $observer): void
    {
        $index = array_search($observer, $this->observers, true);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers(string $message): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($message);
        }
    }

    public function simulateActivity(): void
    {
        $message = "Обнаружена необычная активность пользователя!";
        $this->notifyObservers($message);
    }
}