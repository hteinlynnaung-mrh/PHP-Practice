<!-- The method of calling function from othe file -->

<?php

include("AddFunction.php");
include("LibraryFunction.php");

echo "<br>";
AddFunction\add(1, 2);

echo "<br>";
LibraryFunction\add(1, 2, 3);


/* require("addfun.php");
include "addfun.php" ;
require "addfun.php" ;
include_once("addfun.php");
include_once "addfun.php" ;
require_once("addfun.php");
require_once "addfun.php" ; */
