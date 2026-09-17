<?php

print_r($_FILES);

$name = $_FILES['photo']['name']; // original name of the file
$tmp_name = $_FILES['photo']['tmp_name']; // present location of the file

move_uploaded_file($tmp_name, "./photos/$name");
// move_uploaded_file(present location, "the folder you want to keep the file and original name");