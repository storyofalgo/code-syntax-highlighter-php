<link href="style.css" rel="stylesheet" />
<?php
// Load the syntax highlighter class used to color code samples.
include_once("highlighter.class.php");

// Create the highlighter object and render the first source file.
$colorObj = new highlighter();
$colorObj->applycolor("highlighter.class.php");

// Hide the file name label for the second snippet and display the current page.
$colorObj->showfilename(false);
$colorObj->applycolor("index.php");
?>