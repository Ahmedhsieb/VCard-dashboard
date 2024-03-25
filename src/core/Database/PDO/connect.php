<?php

use Ahmed\Vcard\core\session;

function connect($host, $db, $user, $password){
    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    try {
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        return new PDO($dsn, $user, $password, $options);

    }catch (PDOException $e){
        die($e->getMessage());
    }
}

return connect("localhost", session::get("dbname"), "root", "");
