<?php

declare(strict_types=1);

class Solution
{
    private const QUEEN_COUNT = 8;
    private const BOARD_SIZE = 8;

    public function solve()
    {
        $board = array_fill(
            0,
            self::BOARD_SIZE,
            array_fill(0, self::BOARD_SIZE, 0)
        );

        $this->storeQueen($board, 0);
        $this->print($board);
    }

    private function storeQueen(array &$board, int $col): bool
    {
        if ($col >= self::QUEEN_COUNT) {
            return true;
        }

        for ($i = 0; $i < self::QUEEN_COUNT; $i++) {
            if ($this->isPossibleChoice($board, $i, $col)) {
                $board[$i][$col] = 1;

                if ($this->storeQueen($board, $col + 1)) {
                    return true;
                }

                $board[$i][$col] = 0;
            }
        }

        return false;
    }

    private function isPossibleChoice(array &$board, int $row, int $col): bool
    {
        for ($i = 0; $i < $col; $i++) {
            if ($board[$row][$i]) {
                return false;
            }
        }

        for ($i = $row, $j = $col; $i >= 0 && $j >= 0; --$i, --$j) {
            if ($board[$i][$j]) {
                return false;
            }
        }

        for ($i = $row, $j = $col; $j >= 0 && $i < self::BOARD_SIZE; ++$i, --$j) {
            if ($board[$i][$j]) {
                return false;
            }
        }

        return true;
    }

    function print(&$board)
    {
        for ($i = 0; $i < self::BOARD_SIZE; ++$i)
        {
            for ($j = 0; $j < self::BOARD_SIZE; ++$j) {
                echo $board[$i][$j];
            }
            echo PHP_EOL;
        }
    }
}

print_r((new Solution())->solve());