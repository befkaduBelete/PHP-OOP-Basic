<?php
require_once 'DatabaseInterface.php';
class SqliteDb implements DatabaseInterface
{
    public function getOrders(): array
    {
        echo "Calling Method " . __METHOD__ . PHP_EOL;
        return [];
    }
    public function getOrderById(int $id)
    {
        echo "Calling Method " . __METHOD__ . PHP_EOL;
    }
    public function createOrder(array $data): bool
    {
        echo "Calling Method " . __METHOD__ . PHP_EOL;
        return true;
    }
    public function updateOrder(int $id, array $data): bool
    {
        echo "Calling Method " . __METHOD__ . PHP_EOL;
        return true;
    }
    public function deleteOrder(int $id): bool
    {
        echo "Calling Method " . __METHOD__ . PHP_EOL;
        return true;
    }
}
