<?php

// Input = Request
// superglobal variable

// print_r($_GET); // output = Array() ->variableရှိပေမယ့် အထဲမှာ ဘာdataမှမရှိတာ
/*  
http://localhost/hello/app.php?php?q=php&hl=my (localhost serverမှာ inputထည့်)
// urlက ?နဲ့တွဲရေးတဲ့valueကို GETထဲကနေယူလို့ရတယ်

ဒီinputကိုရိုက်ထည့်လိုက်ရင် localhost serverက GETလို့ခေါ်တဲ့ Superglobalထဲကို ဒီdataရောက်သွားမယ် ရောက်သွားတဲ့အခါ serverကဒီdataကိုဆွဲထုတ်ပြီး ဆွဲထုတ်လို့ရလာတဲ့dataကို php variableတစ်ခုနဲ့
ကြိုထည့်ပေးထားပြီး အဲ့ဒီကြိုထည့်ပေးထားတဲ့ variableထဲက valueကို client browser မှာပြပေးတယ်
*/

// print_r($_POST); 
// formက GET methodဖြစ်ပြီး print_r($_POST)နဲ့outputထုတ်ရင်Browserရဲ့backgroundမှာအလုပ်လုပ်တယ်

print_r($_REQUEST); // REQUESTသည်formကဘာmethodဖြစ်ဖြစ်အလုပ်လုပ်တယ် POSTဖြစ်ဖြစ် GETဖြစ်ဖြစ်


/*
https://google.com/search?q=php+8.5&hl=my

google.comကိုသွား searchကိုလိုချင်တယ် ထည့်ပေးမယ့်dataက php8.5
userကinputကိုနှစ်မျိူးပေးလို့ရတယ် urlရိုက်ထည့်ရင်းနဲ့လည်းပေးလို့ရတယ်  urlကinputမှာလာည်းပေးလို့ရတယ် 


https://www.google.com:443/search#result

Protocol - https://
Sub-Domain - www
Domain - google.com 
Port: 443
Resource: /search <!-- want to the result from the search
ID: #result 
*/

