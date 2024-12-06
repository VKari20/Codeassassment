<?php 
function reverseString($string) {
    // Reverse the string using strrev function
    return strrev($string);
}

echo "The reverse for hello is: " .reverseString("hello") . "\n"; 
echo "The reverse for JavaScript is:" .reverseString("JavaScript") . "\n"; 
echo "THe reverse for 12345 is: " .reverseString("12345") . "\n"; 
echo "The revese for A man a plan canal Panama is: "  .reverseString("A man a plan a canal Panama") . "\n"; 