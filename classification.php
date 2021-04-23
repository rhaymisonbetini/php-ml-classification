<?php
require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Classification\KNearestNeighbors;

$classifier = new KNearestNeighbors();

$samples = [[10], [20], [30], [40], [50], [60], [70], [80], [90], [100]];
$labels = ['LENTO', 'LENTO', 'LENTO', 'MEDIO', 'MEDIO', 'MEDIO', 'RAPIDO', 'RAPIDO', 'RAPIDO', 'RAPIDO'];

$classifier->train($samples, $labels);

$result = $classifier->predict([[12], [53], [99]]);

var_dump($result);
