<?php

namespace Patterns\TemplateMethod;

class BarChart extends ChartGenerator
{
    protected function initialize(): void
    {
        echo "Initialisation the bar chart".PHP_EOL;
    }

    protected function generateData(): void
    {
        echo "Generate data for the bar chart".PHP_EOL;
    }

    protected function drawChart(): void
    {
        echo "Drawing the bar chart".PHP_EOL;
    }
}