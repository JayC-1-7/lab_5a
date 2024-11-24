<?php
// Define the calculateArea function
function calculateArea($width, $length) {
    // Calculate the area
    $area = $width * $length;
    // Return the calculated area
    return $area;
}

// Call the function with sample values
$width = 4;
$length = 2;
$area = calculateArea($width, $length);

// Display the result
echo "The area of a rectangle with a width of $width and a length of $length is $area.";
?>
