<?php
require_once "Application.php";
require_once "DBLog.php";
require_once "FileLog.php";

$app  = new Application(
    //new FileLog()
    new DBLog()
);

$app->logger->info("info Message");
$app->logger->error("Error Message");
$app->logger->warning("warning Message");
$app->logger->success("success Message");
$app->logger->log("DEBUG", "DEBUG Message");