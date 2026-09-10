<?php
// cookieထဲက dataဖျက်နည်း

setcookie("mode", "", time() - 1);


// sessionထဲက dataဖျက်နည်း

session_start();
unset($_SESSION['user']);