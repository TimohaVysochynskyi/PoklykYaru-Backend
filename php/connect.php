<?php

$mysql = new mysqli('localhost', 'root', '', 'poklykyaru');
//$mysql = new mysqli('localhost', 'poklukya', 'b1e5gN8gE2', 'poklukya_poklykyaru');

if ($mysql->connect_error) {
    die("Connection failed: ");
}

$data = $mysql->query("SELECT * FROM `product`"); // heze nasho oce
