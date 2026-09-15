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

