<?php
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/functions.php";
require_once __DIR__ . "/router/web.php";
routing($routes);
// echo "Hello I am Index";

// print_r($_SERVER);
// echo $_SERVER["PATH_INFO"];
// echo $path;

// if ($path == "/") {
//     require_once("./views/home.php");
// } else if ($path == "/about-us") {
//     require_once("./views/about.php");
// } else if ($path == "/services") {
//     require_once("./views/services.php");
// } else {
//     require_once("./views/not-found.php");
// }
// view($routes[$path] ?? "not-found");
