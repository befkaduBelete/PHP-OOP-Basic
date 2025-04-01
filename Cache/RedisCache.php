<?php
require_once "CacheInterface.php";
class RedisCache implements CacheInterface
{
    public function set(string $key, $value)
    {
        echo "Calling Method " . __METHOD__ . PHP_EOL;
    }
    public function get(string $key)
    {
        echo "Calling Method " . __METHOD__ . PHP_EOL;
    }
    public function invalidate(string $key)
    {
        echo "Calling Method " . __METHOD__ . PHP_EOL;
    }
}
