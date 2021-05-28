<?php
// PHP program to replace space with -

$str = "reverse order";
 
for ($i = 0; $i < strlen($str); ++$i)
{
 
    // Changing the ith character
    // to '-' if it's a space.
    if ($str[$i] == ' ')
    {
        $str[$i] = '-';
    }
}
 
echo strrev($str . "\n");



?>