<?php
// require("Database/Connection.php");
// require("Database/Querybuilder.php");
// require("Core/Router.php");
// require("Core/Request.php");
// $config = require("config.php");
use Core\App;
require("function.php");
// dependcy injection like service container
App::bind("config", require("config.php"));
App::bind("database", new QueryBuilder(
  Connection::make(App::get("config")['database'])
));
