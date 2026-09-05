<?php

$password = "apple";
$hash = password_hash($password, PASSWORD_DEFAULT);

if(password_verify("apple", $hash)) {
    echo "Correct Password";
} else {
    echo "Incorrect Password";
}

// password hashထဲမှာ နှစ်ပိုင်းပါတယ် တစ်ပိုင်းက salt ဖြစ်ပြီး တစ်ပိုင်းက hash ဖြစ်ပါတယ်။


/* $password = "apple";
$salt = md5(rand(1, 20000) . time());
echo md5($salt . $password); */