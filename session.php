<?php
// 1. Start Session and Set Cookie
session_start();
setcookie("user", "Ali", time() + (86400 * 30), "/");

// (Optional: Set session variable for testing)
if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "Ali";
}

// 2. Conditional Statement Example (if-else)
$age = 20;
if ($age >= 18) {
    echo "You are an adult.<br>";
} else {
    echo "You are a minor.<br>";
}

// 3. While Loop Example
$i = 1;
while ($i <= 5) {
    echo "Number: $i<br>";
    $i++;
}

// 4. File Handling Example (Reading a file)
$file = fopen("example.txt", "r");
if ($file) {
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);
} else {
    echo "Failed to open file.<br>";
}

// 5. Create a Directory Example
if (!file_exists("myfolder")) {
    mkdir("myfolder", 0777); // Creates folder with full permissions
    echo "Folder created!<br>";
} else {
    echo "Folder already exists!<br>";
}

// 6. Session Example (Retrieve Data)
echo "Welcome, " . $_SESSION['username'] . "<br>";

// 7. Cookie Example (Retrieve Cookie Data)
if (isset($_COOKIE['user'])) {
    echo "Cookie says: " . $_COOKIE['user'] . "<br>";
} else {
    echo "Cookie not set!<br>";
}

// 8. Function Example
function greet($name) {
    return "Hello, $name!<br>";
}
echo greet("Ali");
echo greet("Sara");

// 9. Array and Foreach Loop
$fruits = ["Apple", "Banana", "Cherry"];
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}

// 10. Associative Array
$person = [
    "name" => "Ali",
    "age" => 25,
    "email" => "ali@example.com"
];
echo "Name: " . $person["name"] . "<br>";
echo "Email: " . $person["email"] . "<br>";

// 11. OOP Example
class Car {
    public $brand;
    
    function __construct($brand) {
        $this->brand = $brand;
    }

    function honk() {
        return "Beep! I'm a " . $this->brand . "<br>";
    }
}
$myCar = new Car("Toyota");
echo $myCar->honk();

// 12. Date and Time Example
echo "Today is: " . date("Y-m-d H:i:s") . "<br>";

// 13. Include Example
include("header.php"); // Make sure header.php exists in the same directory
echo "Main content goes here.<br>";

?>
