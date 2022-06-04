<?php

function dd($para) {
  echo "<pre>";
  var_dump($para);
  die();
}

function view($name, $data=[]) {
  extract($data);
  return require("Views/$name.view.php");
} 

function redirect($uri) {
  header("location: $uri");
}

function request($name) {
  if($_SERVER['REQUEST_METHOD'] === 'POST') {
    return $_POST[$name];
  } 
  if($_SERVER['REQUEST_METHOD'] === 'GET') {
    return $_GET[$name];
  }
}