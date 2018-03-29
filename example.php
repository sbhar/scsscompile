<?php
header('Access-Control-Allow-Origin: *'); 

include __DIR__ . '/vendor/autoload.php';

/*$cssContent = <<<EOF
a[href^="javascript:"]:after {
    border: 0;
}
EOF;*/

$cssContent = htmlentities($_POST['css'], ENT_QUOTES, "UTF-8");

$css2scssParser = new \Ortic\Css2Scss\Css2Scss($cssContent);
echo $css2scssParser->getScss();
