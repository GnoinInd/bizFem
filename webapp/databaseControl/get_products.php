<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "panjibook";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT productName, productID FROM products"; // Replace with your actual query

$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error fetching product data: " . mysqli_error($conn));
}

$productOptions = "";
while ($row = mysqli_fetch_assoc($result)) {
    $productName = $row['productName'];
    $productID = $row['productID'];
    $productOptions .= "<option value=\"$productID\" >$productName</option>";
}

mysqli_close($conn);

// echo var_dump($productOptions);

echo $productOptions;
?>
