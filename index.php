<?php

spl_autoload_register(function($className) {
    $path = __DIR__ . "/src/" . str_replace("\\", "/", $className) . ".php";
    require($path);
});

$obj1 = new First_class\first();
$obj1->get_mess();
$obj2 = new Second_class\second();
$obj2->get_mess();
