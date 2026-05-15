<?php
require_once __DIR__ . "/../app/core/App.php";
require_once "../app/middleware.php";
$middleware = new middleware();
$middleware->checklogin();
$app = new App();
?>