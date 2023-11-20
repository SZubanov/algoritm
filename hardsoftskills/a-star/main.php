<?php

class Solution
{
    function solve($grid, $start, $end): array
    {
        $openSet = [$start];

        while(count($openSet) > 0) {
            $lowestIndex = 0;
            foreach ($openSet as $i => $iValue) {
                if($iValue->getF() < $openSet[$lowestIndex]->getF()) {
                    $lowestIndex = $i;
                }
            }

            $current = $openSet[$lowestIndex];

            if($current === $end) {
                // Путь найден
                $path = [];
                $temp = $current;
                while($temp !== null) {
                    $path[] = $temp;
                    $temp = $temp->parent;
                }
                return array_reverse($path);
            }

            unset($openSet[$lowestIndex]);
            $openSet = array_values($openSet);
            $current->closed = true;

            $neighbors = $this->getNeighbors($grid, $current);

            foreach($neighbors as $neighbor) {
                if(!$neighbor->closed && !$neighbor->wall) {
                    $tempG = $current->g + 1;

                    if(!in_array($neighbor, $openSet, true)) {
                        $openSet[] = $neighbor;
                    } elseif($tempG >= $neighbor->g) {
                        continue;
                    }

                    $neighbor->parent = $current;
                    $neighbor->g = $tempG;
                    $neighbor->h = $this->heuristic($neighbor, $end);
                }
            }
        }

        // Путь не найден
        return [];
    }

    public function getNeighbors($grid, $node): array
    {
        $neighbors = [];
        $i = $node->i;
        $j = $node->j;

        if(isset($grid[$i+1][$j]) && !$grid[$i+1][$j]->wall) {
            $neighbors[] = $grid[$i+1][$j];
        }
        if(isset($grid[$i-1][$j]) && !$grid[$i-1][$j]->wall) {
            $neighbors[] = $grid[$i-1][$j];
        }
        if(isset($grid[$i][$j+1]) && !$grid[$i][$j+1]->wall) {
            $neighbors[] = $grid[$i][$j+1];
        }
        if(isset($grid[$i][$j-1]) && !$grid[$i][$j-1]->wall) {
            $neighbors[] = $grid[$i][$j-1];
        }

        return $neighbors;
    }

    public function heuristic($a, $b): float|int
    {
        return abs($a->i - $b->i) + abs($a->j - $b->j);
    }
}

class Node {
    public $i;
    public $j;
    public $visited = false;
    public $closed = false;
    public $parent = null;
    public $h = 0;
    public $g = 0;
    public $wall = false;

    public function __construct($i, $j) {
        $this->i = $i;
        $this->j = $j;
    }

    public function getF() {
        return $this->g + $this->h;
    }
}

$gridData = [
    [0, 1, 0, 0, 0],
    [0, 1, 0, 1, 0],
    [0, 1, 0, 1, 0],
    [0, 1, 0, 0, 0],
    [0, 0, 0, 1, 0]
];

$grid = [];
for($i = 0, $iMax = count($gridData); $i < $iMax; $i++) {
    for($j = 0, $jMax = count($gridData[$i]); $j < $jMax; $j++) {
        $node = new Node($i, $j);
        $node->wall = $gridData[$i][$j] === 1;
        $grid[$i][$j] = $node;
    }
}

$start = $grid[0][0];
$end = $grid[4][4];

$path = (new Solution())->solve($grid, $start, $end);
foreach($path as $node) {
    echo "({$node->i}, {$node->j})\n";
}
