<?php


$dsn = 'mysql:dbname=' . $MySQL["name"] . ';host=' . $MySQL["host"];
try
{
    $pdo = new PDO($dsn, $MySQL["user"], $MySQL["pass"], array(PDO::
            MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch (PDOException $e)
{
    die($e->getMessage());
}

?>