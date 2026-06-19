<?php

namespace Addfun; // တခုထက်ပိုတဲ့functionတွေကို တခြားfileကနေခေါ်သုံးဖို့အတွက် function nameခွဲထားရမယ်

function add(int $a, int $b) {
    echo $a + $b;
}
// phpမှာfunctionတွေရဲ့variabel data type ကိုhintလုပ်ပြီးရေးလို့ရတယ် return valueရှိရင်လည်း return typeကိုhintလုပ်ပြီးရေးလို့ရတယ်

// phpမှာfunction name/ class name တွေတူလို့မရဘူး eg:add functionနှစ်ခုထပ်လို့မရဘူး

/* add(2, 2);

<?php

function add(int $a, int $b): int {
    return $a + $b;
}

echo add([2, 2]);
 */