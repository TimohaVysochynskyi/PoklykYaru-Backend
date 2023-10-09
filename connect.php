<?php

//$mysql = new mysqli('localhost', 'root', '', 'poklykyaru');
$mysql = new mysqli('localhost', 'poklukya', 'b1e5gN8gE2', 'poklukya_poklykyaru');

if ($mysql->connect_error) {
    die("Connection failed: ");
}
$mysql->set_charset("utf8");
$data = $mysql->query("SELECT * FROM `product`"); // heze nasho oce
