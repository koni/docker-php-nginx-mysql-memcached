<?php
error_reporting(E_ALL);

echo "<h1>docker-php-nginx-mysql-memcached</h1>";

$now = date('Y-m-d H:i:s');

echo "<h2>Connect to MySQL</h2>";

$mysql = new mysqli($_ENV['DATABASE_HOST'], $_ENV['DATABASE_USER'],
	$_ENV['DATABASE_PASSWORD'], $_ENV['DATABASE_NAME']);

if (!$mysql) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

$sql = "INSERT INTO hoges(created_at) VALUES('" . $now . "')";

$result = $mysql->query($sql);

$sql = "SELECT * FROM hoges ORDER BY hoge_id desc limit 1";

$result = $mysql->query($sql)->fetch_row();

var_dump($result);

mysqli_close($mysql);

echo "<h2>Connect to memcached</h2>";

$m = new Memcached();
$m->addServer('memcached', 11211);
var_dump($m->get('foo'));
$m->set('foo', $now);
var_dump($m->get('foo'));

echo "<div><a href='https://github.com/koni/docker-php-nginx-mysql-memcached'>koni/docker-php-nginx-mysql-memcached</a></div>";

echo "<hr />";

phpinfo();