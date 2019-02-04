<?php

session_start();
require_once("vendor/autoload.php");
require_once("functions.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

require_once ("site.php");
require_once ("admin.php");
require_once ("admin-forgot.php");
require_once ("admin-user.php");
require_once ("admin-blog.php");
require_once ("admin-galeria.php");

$app->run();

 ?>