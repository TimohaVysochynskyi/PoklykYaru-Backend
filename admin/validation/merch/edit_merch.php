<?php

require '../connect.php';

$eName = $_POST['e-name'];
$eDescription = $_POST['e-desc'];
$ePrice = strip_tags($_POST['e-cost']);
$eSize = strip_tags($_POST['e-size']);
$id = strip_tags($_POST['e-id']);
$oldImage = strip_tags($_POST['old-e-image']);

if (file_exists("../../../temp/" . $oldImage)) {
    unlink("../../../temp/" . $oldImage);
}

$eFilename = $_FILES['e-image']["name"];
$eTempname = $_FILES['e-image']["tmp_name"];
$folder = "../../../temp/" . $eFilename;

if(empty($eFilename)){
    $eFilename = $oldImage;
} else {
    move_uploaded_file($eTempname, $folder);
}

$conn->query("UPDATE `product` 
    SET `name` = '$eName', `description` = '$eDescription', `cost` = '$ePrice', `size` = '$eSize', `image` = '$eFilename' 
        WHERE `id` = '$id'");


header("Location: ../../merch.php");