<?php

$http_origin = $_SERVER['HTTP_ORIGIN'];

if ($http_origin == "https://angular-oal2in.stackblitz.io" || $http_origin == "http://angular2portfolio.firebaseapp.com/" || $http_origin == "http://localhost:4200")
{  
    header("Access-Control-Allow-Origin: $http_origin");
}

require "scss.inc.php";
$scss = new scssc();

$src = htmlentities($_POST['scss'], ENT_QUOTES, "UTF-8");

//echo $src;

echo $scss->compile($src);
?>
