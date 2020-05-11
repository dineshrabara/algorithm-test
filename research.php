<?php

for ($i = 0; $i <= 100; $i++) {
    echo researchORsquare($i);
    echo "\n";
}

function researchORsquare($i)
{
    if ($i % 3 == 0 && $i % 5 == 0) {
        return 'Research Square';
    } elseif ($i % 3 == 0) {
        return 'Research';
    } elseif ($i % 5 == 0) {
        return 'Square';
    }
    return $i;
}
