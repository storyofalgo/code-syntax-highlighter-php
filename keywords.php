<?php
// Define the keyword lists used by the highlighter for supported languages.
// PHP keywords are matched by file extension before rendering the colored output.
$languageKeywords["php"] = array("function","if","else","isset","unset","foreach","for","while","do","new","private","public","protected");

// C++ keywords for code snippets written in that language.
$languageKeywords["cpp"] = array("void","char","int","main","static","if","else","for","while","do","cout","cin","struct","unsigned","long","return");

// Java keywords for standard syntax highlighting support.
$languageKeywords["java"] = array("if","else","for","while","do","return","public","private","static","void","import","class","try","catch","package","main","this","int","null","new"); 

// JavaScript keywords used in simple browser-side examples.
$languageKeywords["js"] = array("var","function");
?>