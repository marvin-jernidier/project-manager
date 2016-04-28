<?php
require_once 'inc/config.php';

$pictures = glob('img/*');

	$query = $db->prepare('SELECT name, picture FROM products' );
	$query->execute();
	$products = $query->fetchAll();

var_dump($pictures);

foreach ($products as $key => $product) {
}