<?php

$mysql = new mysqli('localhost', 'root', 'root', 'poklykyaru');
//$mysql = new mysqli('sql304.byethost22.com', 'b22_32947244', '401376dq', 'b22_32947244_poklykyaru');


$data = $mysql->query("SELECT * FROM `product`"); // heze nasho oce
