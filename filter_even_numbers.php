<?php
function filterEvenNumbers($numbers) {
    // Filter only even numbers using array_filter
    return array_filter($numbers, function($number) {
        return $number % 2 === 0;
    });
}



// Filter even numbers examples
print_r(filterEvenNumbers([1, 2, 3, 4, 5])); // Output: [2, 4]
print_r(filterEvenNumbers([10, 15, 20, 25])); // Output: [10, 20]
print_r(filterEvenNumbers([7, 11, 13])); // Output: []
print_r(filterEvenNumbers([0, -2, -4])); // Output: [0, -2, -4]
?>