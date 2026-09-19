<?php

$password = "apple";
$hash = password_hash($password, PASSWORD_DEFAULT);

if(password_verify("apple", $hash)) { // user passwordနဲ့ hashနဲ့ တူမတူတိုက်စစ်ခြင်း
    echo "Correct Password";
} else {
    echo "Incorrect Password";
}

/* 
- hashက inputတူရင် output hashလည်းတူတယ်
- inputအရေအတွက် နဲသည်ဖြစ်စေ များသည်ဖြစ်စေ output hashကတစ်သတ်မတ်တည်းထွက်မယ်
- hash codeကိုပြန်ဖြည်ပြီး မူရင်းပြန်ပြောင်းလို့မရဘူး
- databaseထဲမှာ hashနဲ့သိမ်းပြီး userက passwordရိုက်ထည့်တဲ့အချိန်မှာလည်း passwordကို
hashပြောင်းပြီး databaseထဲက hashနဲ့တူမတူ တိုက်စစ်တယ်

- user passwordက နှစ်ပိုင်းရှိတယ် နောက်ဆုံးထွက်လာတဲ့ output hashရယ် အဲ့ဒီ output hashထွက်လာဖို့ အသုံးပြုခဲ့တဲ့ random saltရယ်
- saltက hashရှည်သွားအောင်လုပ်ပေးတယ် (Brute Force Attackလုပ်ရခက်အောင်)
 
*/


/* $password = "apple";
$salt = md5(rand(1, 20000) . time());
echo md5($salt . $password); */