<?php
function countVowels($string) {
    // Define the vowels (both uppercase and lowercase)
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    // Initialize a counter to zero
    $count = 0;

    // Iterate through each character in the string
    for ($i = 0; $i < strlen($string); $i++) {
        // Check if the character is in the vowels array
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}
echo "Count of vowels in 'hello world': " . countVowels("hello world") . "\n"; // should return 3
echo "Count of vowels in 'The quick brown fox': " . countVowels("The quick brown fox") . "\n"; // should return 5
echo "Count of vowels in 'AEIOU': " . countVowels("AEIOU") . "\n"; // should return 5
echo "Count of vowels in 'Python Programming': " . countVowels("Python Programming") . "\n"; // should return 4
?>




