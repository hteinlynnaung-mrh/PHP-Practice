<?php
// cookieထဲက dataထုတ်နည်း

print_r( $_COOKIE );
// sessionသုံးလိုက်တာနဲ့ session IDက အလိုလျောက်cookieထဲမှာသိမ်းသွားတယ်
echo "<br>";

// sessionထဲက dataထုတ်နည်း
// sessionထဲမှာသိမ်းထားတဲ့ sessionIDကိုလည်းထုတ်ကြည့်လို့ရတယ်

session_start();
print_r($_SESSION);
