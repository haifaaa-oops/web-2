<?php
namespace config;

require __DIR__ . '/../vendor/autoload.php';

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Connection 
{
    public static function make() {
        try {
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../');
            $dotenv->safeload();
            $dotenv->required(['DB_HOST', 'DB_NAME', 'DB_USER', 'DB_PASS']);

            $host = $_ENV['DB_HOST'];
            $db = $_ENV['DB_NAME'];
            $user = $_ENV['DB_USER'];
            $password = $_ENV['DB_PASS'];

            $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

            $pdo = new PDO($dsn, $user, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}