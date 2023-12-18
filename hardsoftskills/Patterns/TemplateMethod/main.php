<?php

use Patterns\TemplateMethod\BarChart;
use Patterns\TemplateMethod\ChartGenerator;
use Patterns\TemplateMethod\LineChart;

require_once 'ChartGenerator.php';
require_once 'LineChart.php';
require_once 'BarChart.php';

function initializeChart(ChartGenerator $generator)
{
    $generator->generateChart();
}

initializeChart(new BarChart());
initializeChart(new LineChart());