<?php

require '../connect.php';

$eName = strip_tags($_POST['e-name']);
$eDescription = strip_tags($_POST['e-desc']);
$ePrice = strip_tags($_POST['e-cost']);
$id = strip_tags($_POST['e-id']);
$oldImage = strip_tags($_POST['old-e-image']);

if (file_exists("../temp/" . $oldImage)) {
    unlink("../temp/" . $oldImage);
}

$eFilename = $_FILES['e-image']["name"];
$eTempname = $_FILES['e-image']["tmp_name"];
$folder = "../temp/" . $eFilename;

if(empty($eFilename)){
    $eFilename = $oldImage;
} else {
    move_uploaded_file($eTempname, $folder);
}

$conn->query("UPDATE `product` 
    SET `name` = '$eName', `description` = '$eDescription', `cost` = '$ePrice', `image` = '$eFilename' 
        WHERE `id` = '$id'");


header("Location: ../../merch.php");