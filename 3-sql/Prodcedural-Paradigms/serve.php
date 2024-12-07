<?php
$port = 8090;
$startPath = "public";
exec("php -S localhost:$port -t $startPath");
