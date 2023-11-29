<?php

namespace Patterns\Adapter2;
interface OldDbInterface
{
    public function oldFetchData(): array;
}