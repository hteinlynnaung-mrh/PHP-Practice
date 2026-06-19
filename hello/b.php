<?php
// cookieထဲက dataထုတ်နည်း

// print_r( $_COOKIE );



// sessionထဲက dataထုတ်နည်း
// sessionထဲမှာသိမ်းထားတဲ့ sessionIDကိုလည်းထုတ်ကြည့်လို့ရတယ်

session_start();
print_r($_SESSION);
echo "<br>";

print_r($_COOKIE);