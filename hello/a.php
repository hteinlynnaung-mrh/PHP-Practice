<?php
// cookieထဲမှာ dataသိမ်းနည်း

// setcookie("mode", "dark");



// sessionထဲမှာ dataသိမ်းနည်း
// sessionထဲက dataတွေကို session ID နဲ့cookieမှာautoသိမ်းပေးတယ်

session_start();
$_SESSION['user'] = 'Hnin Mon Thant';
