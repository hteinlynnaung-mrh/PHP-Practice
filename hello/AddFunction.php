<?php

namespace AddFunction; 
// တခုထက်ပိုတဲ့functionတွေကို တခြားfileကနေခေါ်သုံးဖို့အတွက်််် namespaceသုံးပြီး function nameခွဲထားရမယ်
// phpမှာfunction name/ class name တွေတူလို့မရဘူး eg:add functionနှစ်ခုထပ်လို့မရဘူး


function add(int $a, int $b) {
    echo $a + $b;
}
// phpမှာfunctionတွေရဲ့variabel data typeကို hintလုပ်ပြီးရေးလို့ရတယ် return valueရှိရင်လည်း return typeကိုhintလုပ်ပြီးရေးလို့ရတယ်

add(8, 2);

/* <?php

function add(int $a, int $b): int {
    return $a + $b;
}

echo add(2, 2);
 */