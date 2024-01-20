<?php

require '../connect.php';

$name = $_POST['create-new-merch__name'];
$description = $_POST['create-new-merch__desc'];
$cost = $_POST['create-new-merch__price'];
$size = $_POST['create-new-merch__size'];
$type = $_POST['create-new-merch__type'];

$filename = $_FILES['create-new-merch__image']["name"];
$tempname = $_FILES['create-new-merch__image']["tmp_name"];
$fileArray = '';
$i = 0;

foreach ($filename as $file) {
    $folder = "../../../temp/" . $file;
    $fileArray = $fileArray . $file . '|';
    if (move_uploaded_file($tempname[$i], $folder)) {
        echo "<h3> Image uploaded successfully!</h3>";
    } else {
        echo "<h3> Failed to upload image!</h3>";
    }
    $i++;
}

echo "Name: $name; Description: $description; Price: $cost; Size: $size; Type: $type; Images: $fileArray";

$conn->query("INSERT INTO `product` (`name`, `description`, `cost`, `size`, `image`, `type`)
VALUES ('$name', '$description', '$cost', '$size', '$fileArray', '$type')");

header("Location: ../../merch.php");
?>