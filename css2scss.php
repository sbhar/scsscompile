<?php

header('Access-Control-Allow-Origin: *'); 

require "scss.inc.php";
$scss = new scssc();

$src = htmlentities($_POST['css'], ENT_QUOTES, "UTF-8");

//echo $src;

echo $scss->compile($src);
?>