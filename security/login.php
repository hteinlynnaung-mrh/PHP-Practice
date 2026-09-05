<?php

// SQL Injection 'OR 1=1; --

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email=:email AND password=:password";

$db = new PDO("mysql:dbhost=localhost;dbname=project", "root", "");
$statement = $db->prepare($sql);
$statement->execute(['email' => $email, 'password' => $password]);

$user = $statement->fetch();
if ($user) {
    echo "Correct login";
} else {
    echo "Incorrect login!";
}

/* <?php

// SQL Injection 'OR 1=1; --

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password';

$db = new PDO("mysql:dbhost=localhost;dbname=project", "root", "");
$statement = $db->query($sql);

$user = $statement->fetch();
if ($user) {
    echo "Correct login";
} else {
    echo "Incorrect login!";
} */