<?php 

$route->get("", "PagesConroller@home");
$route->get("about", "PagesConroller@about");
$route->get("contact", "PagesConroller@contact");
$route->post("name", "PagesConroller@name");

// use Controllers\PagesController;

// $route->get("", [PagesController::class, 'home']);
// $route->get("about", [PagesController::class, "about"]);
// $route->get("contact", [PagesController::class, "contact"]);
// $route->post("name", [PagesController::class, "name"]);




