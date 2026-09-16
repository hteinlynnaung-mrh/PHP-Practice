<?php 

namespace Helpers;

class HTTP
{
    static $base = "http://localhost/project";

    static function redirect($path, $q = "")
    {
        $url = static::$base . $path;
        if($q) $url .= "?$q";

        header("location: $url");
        exit();
    }
}

// HTTP::redirect("/profile.php"); // သွားချင်တဲ့pathလမ်းကြောင်းကို redirectနဲ့ခေါ်လို့ရတယ်
// http://localhost/project/profile.php

// HTTP::redirect("/profile.php", "a=b");
// http://localhost/project/profile.php?a=b