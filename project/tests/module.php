<?php

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\Auth;
use Helpers\HTTP;
use Faker\Factory as Faker;

$mysql = new MySQL;
$mysql->connect();

$table = new UsersTable($mysql);
$table->insert($data);

Auth::check();
HTTP::redirect($path);

$faker = Faker::create();
echo $faker->name;

// Database
// CRUD - Create, Read, Update, Delete

// Create Query
// INSERT INTO roles (name, value) VALUES ('Super', 44)

// Read Query
// SELECT id, name FROM roles ORDER BY name DESC LIMIT 3
// Order by က sorting လုပ်တဲ့ keyword ဖြစ်တယ်
// ASC - အနိမ့်ဆုံး မှ အမြင့်ဆုံး
// DESC - အမြင့်ဆုံး မှ အနိမ့်ဆုံး
// LIMIT - ရလာမယ့် ရလဒ် အရေအတွက်ကို ကန့်သတ်ပေးတယ်

// Update Query
// UPDATE roles SET name='Editor' WHERE id=2
// roles table ရဲ့ id က 2 ဖြစ်တဲ့ record ရဲ့ name ကို Editor လို့ update လုပ်မယ်
// SET nameက update လုပ်မယ့် column ဖြစ်တယ်
// WHEREက  filter လုပ်တဲ့ keyword ဖြစ်တယ်

// Delete Query
// DELETE FROM roles WHERE id=2

// composer require fakerphp/faker နဲဲ့ faker library ကို ထည့်သွင်းထားတယ် vendor fileရလာမယ်

// vendorထဲက autoload file ကိုယူသုံးဖို့အတွက် composer.jsonမှာ autoloadနဲ့ချိတ်ပေးရတယ်
// ချိတ်ပေးပြီးရင် composer dump-autoload နဲ့updateလုပ်ရတယ်
