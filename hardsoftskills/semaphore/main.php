<?php

class Semaphore {
    private array $locks = [];

    public function acquire (string $key): void
    {
        if (!isset($this->locks[$key])) {
            $this->locks[$key] = 1;
        } else {
            while ($this->locks[$key] > 0) {
                usleep(1000000); // Ждем, пока другой клиент завершит операцию
            }
        }
    }

    public function release($key): void
    {
        $this->locks[$key] = 0;
    }
}

class BankAccount {
    public function __construct(
        private readonly string $accountName,
        private int $balance,
        private readonly Semaphore $semaphore
    ) {
    }

    public function deposit(int $amount): void
    {
        $this->semaphore->acquire($this->accountName);
        $this->balance += $amount;
        $this->semaphore->release($this->accountName);
    }

    public function withdraw(int $amount): void
    {
        $this->semaphore->acquire($this->accountName);
        $this->balance -= $amount;
        $this->semaphore->release($this->accountName);
    }

    public function getBalance() {
        return $this->balance;
    }
}

$semaphore = new Semaphore();
$bankAccount = new BankAccount('account_name', 1000, $semaphore); // Initial balance

$clients = [];

for ($i = 1; $i <= 5; $i++) {
    $clients[] = $i;
}

foreach ($clients as $client) {
    $withdrawAmount = rand(10, 50);
    $depositAmount = rand(10, 50);

    $bankAccount->withdraw($withdrawAmount);
    $bankAccount->deposit($depositAmount);

    echo "Client {$client}: Withdrawn $withdrawAmount, Deposited $depositAmount\n";
}

echo "Final Balance: {$bankAccount->getBalance()}\n";
