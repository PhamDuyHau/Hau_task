<?php
// This line prints a large heading using echo
echo "<h1>Welcome to My Page</h1>";

// This prints a paragraph using echo
echo "<p>This is a paragraph of text.</p>";

// You can also use print instead of echo
print "<p>This is printed using print instead of echo.</p>";

// Declare the variables
$name = "Ali";
$age = 25;

// Using echo with variables directly
echo "<p>Hello, $name! You are $age years old.</p>"; // Outputs: Hello, Ali! You are 25 years old.

// Using print with string concatenation
print "<p>Hello, " . $name . "! You are " . $age . " years old.</p>"; // Outputs: Hello, Ali! You are 25 years old.

// Display multiple lines using <br> tags
echo "Line 1<br>";
echo "Line 2<br>";

// You can use \n for line breaks in logs or console output (not visible in browser)
echo "This is a log-style message.\n"; // This won't create a visible break in the browser
echo "This is on a new line.\n"; // Same here

// String Length - Get the length of the string
$text = "Hello, world!";
echo "<p>$text<p>";

echo "<p>The length of the text is: " . strlen($text) . " characters.</p>"; // Outputs: 13

// String Replacement - Replace 'world' with 'PHP'
$newText = str_replace("world", "PHP", $text);
echo "<p>Text after replacement: $newText</p>"; // Outputs: Hello, PHP!

// Find position of a substring - Find 'world' in the text
$position = strpos($text, "world");
echo "<p>'world' starts at position: $position</p>"; // Outputs: 7

// Substring - Get part of the string (from position 7, length 5)
$subText = substr($text, 7, 5);
echo "<p>Substring: $subText</p>"; // Outputs: world

// Change case - Convert text to uppercase and lowercase
echo "<p>Uppercase: " . strtoupper($text) . "</p>"; // Outputs: HELLO, WORLD!
echo "<p>Lowercase: " . strtolower($text) . "</p>"; // Outputs: hello, world!

// Trim whitespace from the string
$trimmedText = "   Hello, world!   ";
echo "<p>Trimmed text: '$trimmedText'</p>"; // Outputs: 'Hello, world!'

// Count words in a string
$wordCount = str_word_count($text);
echo "<p>The text has $wordCount words.</p>"; // Outputs: 2

// String formatting with sprintf
$formattedText = sprintf("My name is %s and I am %d years old.", $name, $age);
echo "<p>Formatted text: $formattedText</p>"; // Outputs: My name is Ali and I am 25 years old.

// Using regular expressions - Check if email is valid
$email = "test@example.com";
if (preg_match("/^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})$/", $email)) {
    echo "<p>Valid email!</p>"; // Outputs: Valid email!
} else {
    echo "<p>Invalid email.</p>";
}

// Convert newlines to <br> for HTML output (useful for displaying multiline text)
$textWithNewlines = "Hello\nWorld\nPHP";
echo "<p>Text with newlines converted to <br>: </p>";
echo nl2br($textWithNewlines); // Outputs: Hello<br>World<br>PHP
?>
