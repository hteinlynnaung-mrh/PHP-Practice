<?php

$id = $_POST['id']; // POSTနဲ့databaseကို dataပို့တယ်
$name = $_POST['name'];
$value = $_POST['value'];

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '');
$db->query("UPDATE roles SET name='$name', value=$value WHERE id=$id");

header("location: index.php");