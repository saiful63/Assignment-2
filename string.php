<?php
$strings = ["Hello", "World", "PHP", "Programming"];
$i = 0;
$len = count($strings);
function countVowel($strToCountVowel)
{
    $strLen = strlen($strToCountVowel);
    $cnt = 0;
    for ($i = 0; $i < $strLen; $i++) {
        if (
            $strToCountVowel[$i] == 'a' || $strToCountVowel[$i] == 'e' || $strToCountVowel[$i] == 'i'
            || $strToCountVowel[$i] == 'o' || $strToCountVowel[$i] == 'u' || $strToCountVowel[$i] == 'A'|| 
            $strToCountVowel[$i] == 'E' ||$strToCountVowel[$i] == 'I' || $strToCountVowel[$i] == 'O' || 
            $strToCountVowel[$i] == 'U'
        ) {
            $cnt++;
        }
    }

    return $cnt;
}

function reverseString($strToReverse)
{
    $strToReverse = strrev($strToReverse);
    return $strToReverse;
}

while ($i < $len) {
    $countedVowel = countVowel($strings[$i]);
    $reverseString = reverseString($strings[$i]);
    echo "Original String: {$strings[$i]}, Vowel Count: {$countedVowel}, Reversed String: {$reverseString}".PHP_EOL;
    $i++;
}