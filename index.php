<link href="style.css" rel="stylesheet" />
<?php
// Load the syntax highlighter class used to color code samples.
include_once("highlighter.class.php");

// Create the highlighter object and render the first source file.
$colorObj = new highlighter();
$fileContent = $colorObj->applycolor("highlighter.class.php");
echo $fileContent;

// Hide the file name label for the second snippet and display the current page.
$colorObj->showfilename(false);
$fileContent = $colorObj->applycolor("index.php");
echo $fileContent;
?>
