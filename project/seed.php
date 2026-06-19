<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;

$faker = Faker::create();

$table = new UsersTable(new MySQL);

echo "Data seeding started... <br>";
for($i = 0; $i < 20; $i++) {
    $table->insert([
        "name" => $faker->name(),
        "email" => $faker->email(),
        "phone" => $faker->phoneNumber(),
        "address" => $faker->address(),
        "password" => "password",
    ]);
}

echo "Data seeding done.";

// SELECT users.id, users.name, users.role_id, roles.name AS role
// FROM users LEFT JOIN roles
// ON users.role_id = roles.id