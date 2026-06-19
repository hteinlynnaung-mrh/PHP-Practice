<?php

$name = "Alice";

function hello() {
    global $name; 
    // phpမှာ အပြင်က global variableကိုfunctionထဲမှာတိုက်ရိုက်ခေါ်သုံးလို့မရဘူး globalနဲ့ခေါ်သုံးမှရတယ်
    echo "Hello $name";
}

hello();