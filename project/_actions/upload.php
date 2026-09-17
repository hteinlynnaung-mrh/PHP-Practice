<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;

$auth = Auth::check(); // user loginဝင်ထားမထားစစ်ပေးတယ် loginဝင်ထားရင် user dataပြန်ပေးတယ်

$name = $_FILES['photo']['name'];
$type = $_FILES['photo']['type'];
$tmp_name = $_FILES['photo']['tmp_name'];

if($type == "image/jpeg" or $type == "image/png") {
    $table = new UsersTable(new MySQL);
    $table->updatePhoto($auth->id, $name);

    $auth->photo = $name;

    move_uploaded_file($tmp_name, "./photos/$name");

    HTTP::redirect("/profile.php");
} else {
    HTTP::redirect("/profile.php", "error=type");
}
