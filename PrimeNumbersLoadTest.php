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

while (true) {
    $number = rand(1, 1000);
    $dividers = 0;

    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $dividers++;
        }
    }

    if ($dividers == 2) {
        echo $number . " it is a prime number\n";
    } else {
        echo $number . " it is not a prime number\n";
    }

    sleep(10);
}
