In our db.php we'll place a simple hello world with a DB connection.

<?php

$connection = new PDO('mysql:host=localhost;dbname=demo', 'demo', 'demo');
$statement  = $connection->query('SELECT message FROM demo');

echo $statement->fetchColumn(); CREATE TABLE IF NOT EXISTS demo (
  message varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO demo (message) VALUES('Hello World!');
