<?php

include("vendor/autoload.php"); 
// တခြားfolderတွေထဲက Square နဲဲ့ Circleကို include autoloadနဲ့ တစ်ခါပဲရေးပြီးယူဖို့ composerလိုတယ်
// Composer Package Manager or Dependency Managerက install(composer require nesbot/carbon)လုပ်လိုက်ရင်ပါလာတဲ့ vendor folderထဲကfileတွေကိုပဲ autoloadလုပ်ပေးတယ် ပြင်ပfolderထဲက fileတွေကိုပါ autoloadလုပ်ပေးနိုင်အောင်composer.json fileထဲမှာ autoloadသွားထည့်ပေးရတယ် ပြီးရင် (composer dump-autoload)runပေး

use Carbon\Carbon; // Namespace
use Libs\Support\Square;
use Math\Circle;

echo Carbon::now();
echo "<br>";


// indexမှာ Libs နဲ့ Math ထဲကယူသုံးမယ်ဆိုတော့ include လုပ်ပေးရမယ်
/* include("Libs/Support/Square.php"); 
   include("Math/Circle.php"); */


// folder path တွေနဲ့ includeမလုပ်ပဲ autoloadနဲ့သုံးလို့လည်းရတယ်
/* include("vendor/autoload.php"); */
// folder pathတွေ useသုံးပြီး ကြိုကြေညာထားလို့လည်းရတယ် newအနောက်မှာ ကြေညာလို့လည်းရတယ်

$square = new Square;
echo $square->area(8, 8);

echo "<br>";

$circle = new Circle;
echo $circle->area(10);