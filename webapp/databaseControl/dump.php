<?php
session_start();

$host = "localhost";
$username = "root";
$password = "";
$database = "panjibook";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getPartnerIDByMobileNumber($conn, $mobileNumber)
{
    $mobileNumber = mysqli_real_escape_string($conn, $mobileNumber);

    $query = "SELECT `partnerID` FROM `partners` WHERE `mobileNo` = '$mobileNumber'";

    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $partnerID = $row['partnerID'];

        // Save partnerID in session variable
        $_SESSION['partnerID'] = $partnerID;

        return $partnerID;
    } else {
        return null;
    }
}
// Example usage:
// $mobileNumber = "1234567890";
// $partnerID = getPartnerIDByMobileNumber($conn, $mobileNumber);

function getOrdersByPartnerID($conn, $partnerID)
{
    $query = "SELECT * FROM `orders` WHERE `partnerID` = '$partnerID'";
    $result = $conn->query($query);

    $orders = [];

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $orders[] = $row;
        }
        // Save orders in a session variable
        $_SESSION['partnerOrders'] = $orders;
        // Now $_SESSION['partnerOrders'] contains an array of orders for the specified partnerID
        // You can loop through $_SESSION['partnerOrders'] to display or process the orders
    } else {
        echo "Error executing query: " . $conn->error;
    }

    $result->close();
}

function getNumberOfOrdersByPartnerID($conn, $partnerID)
{
    $query = "SELECT COUNT(*) AS orderCount FROM `orders` WHERE `partnerID` = '$partnerID'";
    $result = $conn->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $orderCount = $row['orderCount'];

        $result->close();
        $conn->close();

        return $orderCount;
    } else {
        echo "Error executing query: " . $conn->error;
        $result->close();
        $conn->close();
        return false;
    }
}

//Example
// if ($partnerID !== null) {
//     getOrdersByPartnerID($conn, $partnerID);

//     $orderCount = getNumberOfOrdersByPartnerID($conn, $partnerID);
//     echo "Number of Orders: $orderCount";
// }


function getAllCustomersByPartnerID($conn, $partnerID)
{
    $sql = "
        SELECT
            t.transactionID,
            t.transactionDate,
            t.totalAmount,
            t.paymentStatus,
            p.partnerName,
            p.address,
            p.mobileNo,
            p.emailID
        FROM
            transaction t
        JOIN
            partners p ON t.partnerID = p.partnerID
        WHERE
            t.partnerID = ?;
    ";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $partnerID);

    // Execute the query
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Fetch all rows
    $customers = $result->fetch_all(MYSQLI_ASSOC);

    // Get the count of customers
    $customerCount = count($customers);

    // Close the statement
    $stmt->close();

    // Save the result and count in session variables
    $_SESSION['allCustomers'] = $customers;
    $_SESSION['customerCount'] = $customerCount;

    return $customers;
}

// Example usage:
// $partnerID = $_SESSION['partnerID'];
// $customers = getAllCustomersByPartnerID($conn, $partnerID);

// Further processing based on your requirements...
// Now, $_SESSION['allCustomers'] contains the data you retrieved, and $_SESSION['customerCount'] contains the count.

?>