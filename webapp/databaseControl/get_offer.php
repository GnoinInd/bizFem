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

// Fetch offer details based on the specific productID
if (isset($_POST['product'])) {
    $specificProductID = mysqli_real_escape_string($conn, $_POST['product']);
    
    // Query to retrieve offer details based on productID
    $query = "SELECT p.productID, o.discount
              FROM price p
              JOIN offer o ON p.offerID = o.offerID
              WHERE p.productID = '$specificProductID'";

    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);

        // Get offer details
        $productID = $row['productID'];
        $discount = $row['discount'];

        // Close the database connection
        mysqli_close($conn);

        // Return the offer details as JSON
        // echo json_encode(['productID' => $productID, 'discount' => $discount]);

        // Return the offer details as
        echo $discount;
    } else {
        echo "Error fetching offer details: " . mysqli_error($conn);
    }
} else {
    echo "Product ID not specified.";
}
?>
