<?php

function moyenne($notes) {
    if (count($notes) === 0) {
        return 0; 
    }
    return array_sum($notes) / count($notes);
}

function médiane($notes) {
    if (count($notes) === 0) {
        return 0;
    }

    sort($notes);
    $count = count($notes);
    $middleIndex = floor($count / 2); 

    if ($count % 2 === 1) {
        return $notes[$middleIndex];
    } else {
        return ($notes[$middleIndex - 1] + $notes[$middleIndex]) / 2; 
    }
}

?>
