<?php
require __DIR__ . '/vendor/autoload.php';
use Codedungeon\PHPCliColors\Color;
use NFQ\Akademija\NotTyped;
use NFQ\Akademija\Soft;
use NFQ\Akademija\Strict;
use NFQ\CalculateHomeWork;

$calculateHomeWork = new CalculateHomeWork();
$notTyped = new NotTyped();
$soft = new Soft();
$strict = new Strict();
$color = new Color();

echo $color->green() ."NFQ\\calculateHomeWorkSum: " .  $calculateHomeWork->calculateHomeWorkSum(3, 2.2, '1') . "\n\r";
echo $color->red() ."NFQ\\Akademija\\NotTyped\\calculateHomeWorkSum: " .  $notTyped->calculateHomeWorkSum(3, 2.2, '1') . "\n\r";
echo $color->blue() ."NFQ\\Akademija\\Soft\\calculateHomeWorkSum: " . $soft->calculateHomeWorkSum(3, 2.2, '1') . "\n\r";

try {
    echo $color->yellow() . "NFQ\\Akademija\\Strict\\calculateHomeWorkSum: " . $strict->calculateHomeWorkSum(3, 2.2, '1') . "\n\r";
} catch (TypeError $e) {
    echo "wrong data type entered";
}
