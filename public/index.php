<?php

echo "Hello! World!<br>";

$mysql = new mysqli($_ENV['DATABASE_HOST'], $_ENV['DATABASE_USER'],
	$_ENV['DATABASE_PASSWORD'], $_ENV['DATABASE_NAME']);

if (!$mysql) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

$sql = "INSERT INTO hoges(created_at) VALUES('" . date('Y-m-d H:i:s') . "')";

$result = $mysql->query($sql);

$sql = "SELECT * FROM hoges ORDER BY hoge_id desc limit 1";

$result = $mysql->query($sql)->fetch_row();

var_dump($result);

mysqli_close($mysql);

phpinfo();