<?php

echo "Hi! You are on: ";

$path = $_SERVER['REQUEST_URI'];

echo $path;


if($path == '/home'){
  echo '<br> Welcome home!';
}
