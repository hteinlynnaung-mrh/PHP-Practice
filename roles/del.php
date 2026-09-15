<?php

$id = $_GET['id']; /* index.phpကDelခလုတ်ရဲ့urlက id-valueကို GETနဲ့ယူတယ် */

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '');
$db->query("DELETE FROM roles WHERE id = $id");

header("location: index.php");
