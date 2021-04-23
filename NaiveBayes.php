<?php
require_once __DIR__ . '/vendor/autoload.php';

use Phpml\Classification\NaiveBayes;

$classifier = new NaiveBayes();

$samples = [[10], [20], [30], [40], [50], [60], [70], [80], [90], [100]];
$labels = ['L', 'L', 'L', 'M', 'M', 'M', 'R', 'R', 'R', 'R'];

$classifier->train($samples, $labels);

$result = $classifier->predict([[55], [53], [150]]);

function fullName($param)
{
    switch ($param) {
        case 'L':
            return 'LENTO';
            break;
        case 'M':
            return 'MEDIO';
            break;
        case 'R':
            return 'RAPIDO';
            break;
    }
}

echo fullName($result[0]) . "\n";
echo fullName($result[1]) . "\n";;
echo fullName($result[2]) . "\n";;
