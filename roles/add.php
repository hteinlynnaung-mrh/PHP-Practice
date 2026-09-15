<?php

// XSS attack ကာကွယ်ရန် indexထဲမှာ outputရိုက်ထုတ်တဲ့အခါ htmlspecialchars ကိုအသုံးပြုခြင်း
// htmlspecialcharsက javascript codeတွေကို stringအဖြစ်ပြောင်းပေးပြီး browserက codeအဖြစ်မသတ်မှတ်နိုင်အောင် uncodeလုပ်ပြီးကာကွယ်ပေးတယ်

$name = $_POST['name'];   // formကvalueကိုယူ
$value = $_POST['value']; 

$sql = "INSERT INTO roles (name, value) VALUES (:name , :value)";
echo $sql;

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', ''); 
/* join php with database */
// PDO(PHP Data Objects)သည် Databaseနည်းပညာအမျိုးမျိူးနဲ့ချိတ်ဆက်ပြီးအလုပ်လုပ်နိုင်တယ်
// database connection object တခု create လုပ်ခြင်း 
// mysqlသည် data source location (DSL) or data source name (DSN) ဖြစ်သည်
// mysql database အမျိူးအစား or database driver ဖြစ်သည်
// dbhost သည် databaseရဲ့location / server name or host name
// dbname သည် database name
// user nameက root / passwordက မရှိဘူး

$statement = $db->prepare($sql);
$statement->execute(['name' => $name, 'value' => $value]);


header("location: index.php");// လုပ်စရာရှိတဲ့အလုပ်တွေလုပ်တယ် ပြီးရင်indexပြန်သွားတယ်

