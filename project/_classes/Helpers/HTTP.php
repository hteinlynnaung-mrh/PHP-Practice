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
    }
}

// HTTP::redirect("/profile.php");

// http://localhost/project/profile.php?a=b

// HTTP::redirect("/profile.php", "a=b");

// http://localhost/project/profile.php?a=b