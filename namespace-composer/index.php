<?php 

require __DIR__.'\vendor\autoload.php';

use Rych\Random\Random; 

$random = new Random();

$randomNumber = $random->getRandomInteger(1, 100);

echo $randomNumber;