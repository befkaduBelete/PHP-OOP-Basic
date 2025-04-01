<?php
require_once 'Application.php';
require_once "FileCache.php";
require_once "RedisCache.php";


//Only change happens here

$app =  new Application(
   // new RedisCache(),
   new FileCache(),
   // new RESTDb()

);
$HTML = "....";
$app->cache->set("home-page",$HTML);
$app->cache->get("home-page");
$app->cache->invalidate("home-page");