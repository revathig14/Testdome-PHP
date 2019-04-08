<?php

function groupByOwners(array $files) : array
{
    foreach ($files as $l => $v) {
        $result[$v][]=$l;
    }
    return $result;
}

$files = array
(
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
);

var_dump(groupByOwners($files));