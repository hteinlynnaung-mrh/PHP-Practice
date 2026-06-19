<?php

include("vendor/autoload.php");

use Carbon\Carbon;
use Libs\Support\Square;
use Math\Circle;

echo Carbon::now()->addDay(5);

echo "<br>";


// include("autoload.php");

/* include("Libs/Support/Square.php");
include("Math/Circle.php"); */
// indexမှာ Libs နဲ့ Math ထဲကယူသုံးမယ်ဆိုတော့ include လုပ်ပေးရမယ်
// folder path တွေနဲ့ includeမလုပ်ပဲ autoloadနဲ့သုံးလို့လည်းရတယ်


// folder path တွေကြိုကြေညာထားလို့လည်းရတယ် newအနောက်မှာ ကြေညာလို့လည်းရတယ်

$square = new Square;
echo $square->area(8, 8);

echo "<br>";

$circle = new Circle;
echo $circle->area(10);