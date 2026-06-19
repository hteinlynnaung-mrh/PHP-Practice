<?php

$arr = [123, 'abc', true, [1,2]]; 

// Arrayတွေကိုရိုက်ထုတ်ချင်ရင် echoနဲ့ရိုက်ထုတ်လို့မရဘူး var_dumpနဲ့ရိုက်ထုတ်ရတယ် var_dumpသည်variableတခုရဲ့contentကိုoutputအနေနဲ့ထုတ်ပေးတယ်

// print_rနဲ့လည်းရိုက်ထုတ်လို့ရတယ် but var_dump လောက်အသေးစိတ်မမြင်ရပေမယ့် မျက်စိနဲနဲပိုရှင်းတယ်

var_dump($arr);

echo "<br>"; // Browserကိုတစ်လိုင်းဆင်းရန်

// another array of php
$user =["name" => "Hnin Mon Thant", "age" => 20]; // associative array of php
// In javascript we write as: let user = {name: 'Hnin Mon Thant', age: 20};
print_r($user);



