<?php

/**
 * This file is part of the Constant workload simulation project.
 * 
 * @author Valentino Pesce
 * @copyright (c) 2024 Valentino Pesce <valentino@iltuobrand.it>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

set_time_limit(0);

$bigString = "";

while (true) {
    while (strlen($bigString) < 100 * 1024 * 1024) {
        $bigString .= str_repeat("data", 1024);
    }

    //echo "String length: " . strlen($bigString) . ". Memory usage: " . round(memory_get_usage() / 1024 / 1024, 2) . " MB\n";

    // Reset
    $bigString = "";

    usleep(100000);
}

function isPrime($number)
{
    if ($number <= 1) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

while (true) {
    $number = rand(10000, 100000);
    if (isPrime($number)) {
        //echo $number . "\n";
    }

    usleep(100000);
}
