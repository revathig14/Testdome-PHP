<?php

function isPalindrome(string $word) : bool
{
    $word = strtolower($word);
    $rev  = strrev($word);
    if ($word == $rev) {
        return true;
    }
    return false;
}   

echo isPalindrome('Deleveled');