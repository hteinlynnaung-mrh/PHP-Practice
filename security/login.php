<?php

// SQL Injection 'OR 1=1; --
/* 
emialနေရာမှာ OR 1=1 ဝင်သွားပြီး commandလည်းပိတ်ထားတဲ့အတွက်ကြောင့် queryက OR 1=1 နဲ့ပဲ runသွားပြီး 1=1တစ်ခုမှန်တဲ့အတွက် email & password မမှန်ဘဲနဲ့ users table ထဲက
dataတွေအကုန်ထွက်လာနိုင်တယ် 
*/
$email = $_POST['email']; // formက လာတဲ့emailကို POSTကနေယူ
$password = $_POST['password']; // formက လာတဲ့passwordကို POSTကနေယူ

$sql = "SELECT * FROM users WHERE email=:email AND password=:password";
// securityအတွက် user input dataတွေကိုလက်မခံဘဲ/မပါဘဲနဲ့ အရင်အလုပ်လုပ်ရတယ် 
// email=:email and password=:password

$db = new PDO("mysql:dbhost=localhost;dbname=project", "root", "");
$statement = $db->prepare($sql); 
// databaseပေါ်မှာ ခုဏကရေးထားတဲ့ sql query ကို securityအတွက် prepareနဲ့ runလိုက်မယ် 
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