<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<title>Processor</title>
</head>
<body>
<h2>Your personal details:</h2>

<?php
// define variables and initialize with empty values
$nameErr = $addrErr = $emailErr = $howManyErr = $favFruitErr = "";
$name = $address = $email = $howMany = "";
$favFruit = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstName"])) {
		echo "<p style=color:red>Missing first name</p>";
    }
    else {
        $name = $_POST["firstName"];
		echo "Your first name is $name<br>"; 
    }

    if (empty($_POST["lastName"])) {
        echo "<p style=color:red>Missing last name</p>";
    }
    else {
        $lname = $_POST["lastName"];
		echo "Your last name is $lname<br>"; 
    }

    if (empty($_POST["email"]))  {
        echo "<p style=color:red>Missing email address</p>";
    }
    else {
        $email = $_POST["email"];
		echo "Your email is $email<br/>"; 
    }

    if (!isset($_POST["source"])) {
        echo "<p style=color:red>Missing media source</p>";
    }
    else {
        $source = $_POST["source"];
		echo "Your found out about our product from $source<br>"; 
    }
	if (!isset($_POST["newsletter"])) {
        echo "<p style=color:red>You don\'t want our newsletter?</p>";
    }
    else {
        $news = $_POST["newsletter"];
		echo "$news to receiving our newsletter<br>"; 
    }

    if (empty($_POST["favourite"])) {
        echo "<p style=color:red>Missing favourite flavour</p>";
    }
    else {
        $favChoc = $_POST["favourite"];
		echo "Your favourite flavour is $favChoc<br>"; 
    }
	 if (empty($_POST["comments"])) {
        echo "<p style=color:red>Missing commments</p>";
    }
    else {
        $comments = $_POST["comments"];
		echo "Your comments: $comments<br>"; 
    }
}

?>
</body>
</html>
