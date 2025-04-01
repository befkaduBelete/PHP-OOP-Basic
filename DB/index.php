<?php
require_once 'Application.php';
require_once "MysqlDb.php";
require_once "RESTDb.php";
require_once "SqliteDb.php";

//Only change happens here

$app =  new Application(
   // new MysqlDb(),
   new SqliteDb(),
   // new RESTDb()

);
$app->db->getOrders();
$app->db->getOrderById(1);
$app->db->createOrder([]);
$app->db->updateOrder(1,[]);
$app->db->deleteOrder(1);
