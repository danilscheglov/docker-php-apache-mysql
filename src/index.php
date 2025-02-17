<?php

phpinfo();

try {
    $host = 'mysql';
    $databaseName = getenv('MYSQL_DATABASE');
    $username = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');

    $pdo = new PDO("mysql:host=$host;dbname=$databaseName", $username, $password);
    echo "Подключен к базе данных MySQL: $databaseName";
} catch (PDOException $exception) {
    echo "Не удалось выполнить соединение: " . $exception->getMessage();
}