<?php
//lecture 4 Argument and Types 1-8-25
//example 1
$a = false;
$g = 0;

// Since $a is a boolean, it will return true
if (is_bool($a) === true) {
    echo "Yes, this is a boolean that is true. ";
}

// Since $b is not a boolean, it will return false
if (is_bool($g) === false) {
    echo " No, this is not a boolean that is false. " . "<br />";
}

//example 2
$a = false;
$m = 10;

// Since $a is a boolean, it will return true
if (is_bool($a) == true) {
    echo " Yes, this is a boolean cat. ";
}

// Since $b is not a boolean, it will return false
if (is_bool($m) === false) {
    echo " No, this is not a boolean cat. ". "<br />";
}

//example 3
$r = false;
$h = 0;

// Since $a is a boolean, it will return true
if (is_bool($r) === true) {
    echo " Yes, this is a boolean dog with fur. ";
}

// Since $b is not a boolean, it will return false
if (is_bool($h) === false) {
    echo " No, this is not a boolean dog with fur. ". "<br />";
}

//It is a string bool(true) bool(true bool(false) bool(false)
?>