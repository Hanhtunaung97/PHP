<?php
function view(string $file, array $data = []): bool
{
    if (isset($data)) extract($data);
    require_once __DIR__ . "/views/" . $file . ".php";
    return true;
}

// controller
function controller(string $fileFun): bool
{
    $arr = explode("@", $fileFun);
    // print_r($arr);
    $controllerFile = $arr[0];
    $controllerFunction = $arr[1];

    require_once __DIR__ . "/controller/" . $controllerFile . ".php";

    call_user_func($controllerFunction);
    return true;
}

// routes
function routing($routes): void
{
    $path = $_SERVER["PATH_INFO"] ?? "/";
    $current = $routes[$path] ?? false;
    if ($current) {
        controller($current);
    } else {
        view("not-found");
    }
}
// templates
function template(string $file): void
{
    require_once __DIR__ . "/views/templates/" . $file . ".php";
}
// assets function
function asset(string $path): string
{
    $url = (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . "/" . ltrim($path, "/");
    return $url;
}
// Url functions
function url(string $path, array $data = null): string

{
    $fullUrl = (isset($_SERVER["HTTPS"]) ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . "/" . ltrim($path, "/") . (is_null($data) ?  "" : "?" . http_build_query($data));
    return $fullUrl;
}
// dd function
function dd($data): void
{
    echo "<pre style='color:white ;background-color:black;border-radius:10px;padding:10px'>";
    print_r($data);
    echo "</pre>";
    die();
}
// db functions
function connect(): object
{
    global $configs;
    return mysqli_connect($configs["db_host"], $configs["db_user"], $configs["db_password"], $configs["db_name"]);
}
function runQuery(string $sql): mixed
{
    $con = connect();
    $query = mysqli_query($con, $sql);
    return $query;
}

function first(string $sql): mixed
{
    $query = runQuery($sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

function get(string $sql): mixed
{
    $query = runQuery($sql);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)) {
        array_push($rows, $row);
    }
    return $rows;
}
// redirect function
function redirect(string $path): void
{
    header("Location: " . url($path));
    exit();
}

// json function
function json(array $data): void
{
    header("Content-Type:application/json");
    echo json_encode($data);
}
