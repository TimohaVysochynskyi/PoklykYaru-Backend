<?php

$mysql = new mysqli('localhost', 'root', 'root', 'poklykyaru');
//$mysql = new mysqli('sql304.byethost22.com', 'b22_32947244', 'xfd89zmn', 'b22_32947244_poklykyaru');


$data = $mysql->query("SELECT * FROM `product`");
