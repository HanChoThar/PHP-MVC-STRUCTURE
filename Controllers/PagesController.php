<?php

use Core\App;

class PagesConroller {
  public function home() 
  {
    $users = App::get("database")->selectAll("users");
    view("index", [
      "users" => $users
    ]);
  }
  public function about() 
  {
    view("about");
  }
  public function contact()
  {
    $c = "contact page";

    view("contact", [
      "c" => $c
    ]);
  }
  public function name()
  {
    App::get("database")->insert([
      "name" => request('name'),
    ], "users");
    
    redirect("/");
  }  
}