<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstname =htmlspecialchars($_POST["firstname"]);
    $lastname =htmlspecialchars($_POST["lastname"]);
    $gender =htmlspecialchars($_POST["gender"]);

    if (empty($firstname) || empty($lastname) ||$gender == "none"){
        echo "please fill out all fields.";
    } else {

        echo "<h1>Form Subitted Successfully!</h1>";
        echo "<p><strong>First Name:</strong>" .$firstname ."<br>";
        echo "<p><strong>Last Name:</strong>" .$lastname ."<br>";
        echo "<p><strong>gender:</strong>"  .$gender."<br>";
    }
} else {
    echo "form was not submitted properly.";
}
?>