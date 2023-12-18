<?php

namespace Patterns\TemplateMethod;

abstract class ChartGenerator
{
    final public function generateChart(): void
    {
        $this->initialize();
        $this->generateData();
        $this->drawChart();
        $this->finalize();
        $this->saveChart();
    }

    abstract protected function initialize(): void;

    abstract protected function generateData(): void;

    abstract protected function drawChart(): void;

    protected function finalize(): void
    {
        echo "Finalize chart creation".PHP_EOL;
    }

    protected function saveChart(): void
    {
        echo "The chart was saved".PHP_EOL;
    }
}