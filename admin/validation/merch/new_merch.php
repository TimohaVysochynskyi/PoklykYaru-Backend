<?php




echo $folder;

// Вставка даних до бази даних
$sql = "INSERT INTO `product` (`name`, `description`, `cost`, `image`, `type`)
	VALUES ('$name', '$description', '$cost', '$Filename', '$type')";

if (move_uploaded_file($Tempname, $folder)) {
    echo "<h3>  Image uploaded successfully!</h3>";
} else {
    echo "<h3>  Failed to upload image!</h3>";
}

if ($conn->query($sql) === FALSE) {
	echo "Помилка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("Location: ../../merch.php");

?>
