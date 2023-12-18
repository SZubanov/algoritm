<?php

namespace Patterns\TemplateMethod;

class LineChart extends ChartGenerator
{
    protected function initialize(): void
    {
        echo "Initialisation the line chart".PHP_EOL;
    }

    protected function generateData(): void
    {
        echo "Generate data for the line chart".PHP_EOL;
    }

    protected function drawChart(): void
    {
        echo "Drawing the line chart".PHP_EOL;
    }
}