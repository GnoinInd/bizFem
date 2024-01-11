<?php
// Connect to your database
$host = "localhost";
$username = "root";
$password = "";
$database = "panjibook";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch product price based on the selected product
if (isset($_POST['product'])) {
    $selectedProduct = mysqli_real_escape_string($conn, $_POST['product']);
    
    // Use the provided query to retrieve productID and price
    $query = "SELECT p.productID, pr.price
              FROM products p
              JOIN price pr ON p.productID = pr.productID
              WHERE p.productID = '$selectedProduct'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $productPrice = $row['price'];

        // Close the database connection
        mysqli_close($conn);

        // Return the product price
        echo $productPrice;
    } else {
        echo "Error fetching product price: " . mysqli_error($conn);
    }
} else {
    echo "Product not specified.";
}
?>
