<?php

require("vendor/autoload.php");
require("Core/bootstrap.php");
Route::load("routes.php")->driect(Request::uri(), $_SERVER['REQUEST_METHOD']);
