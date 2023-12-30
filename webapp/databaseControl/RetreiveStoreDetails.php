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
    $stmt = $conn->prepare("SELECT `partnerID` FROM `partners` WHERE `mobileNo` = ?");
    $stmt->bind_param("s", $mobileNumber);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $partnerID = $row['partnerID'];

            // Save partnerID in session variable
            $_SESSION['partnerID'] = $partnerID;

            return $partnerID;
        }
    }

    return null;
}

function getOrdersByPartnerID($conn, $partnerID)
{
    $stmt = $conn->prepare("SELECT * FROM `orders` WHERE `partnerID` = ?");
    $stmt->bind_param("i", $partnerID);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result) {
            $orders = $result->fetch_all(MYSQLI_ASSOC);

            // Save orders in a session variable
            $_SESSION['partnerOrders'] = $orders;
            // Now $_SESSION['partnerOrders'] contains an array of orders for the specified partnerID
            // You can loop through $_SESSION['partnerOrders'] to display or process the orders
        } else {
            echo "Error executing query: " . $conn->error;
        }

        $stmt->close();
    }
}

function getNumberOfOrdersByPartnerID($conn, $partnerID)
{
    $stmt = $conn->prepare("SELECT COUNT(*) AS orderCount FROM `orders` WHERE `partnerID` = ?");
    $stmt->bind_param("i", $partnerID);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        if ($result) {
            $row = $result->fetch_assoc();
            $orderCount = $row['orderCount'];

            $stmt->close();

            return $orderCount;
        } else {
            echo "Error executing query: " . $conn->error;
        }

        $stmt->close();
    }

    return false;
}

function getSalesByPartnerID($conn, $partnerID)
{
    $stmt = $conn->prepare("
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
            t.partnerID = ?
    ");

    $stmt->bind_param("i", $partnerID);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if there are rows in the result
    if ($result) {
        $salesData = $result->fetch_all(MYSQLI_ASSOC);

        // Get the count of sales
        $salesCount = count($salesData);

        // Close the statement
        $stmt->close();

        // Save the result and count in session variables
        $_SESSION['salesData'] = $salesData;
        $_SESSION['salesCount'] = $salesCount;

        return $salesData;
    } else {
        echo "Error executing query: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

function getCustomersByPartnerID($conn, $partnerID)
{
    $stmt = $conn->prepare("
        SELECT
            p.partnerID,
            p.partnerName,
            p.address AS partnerAddress,
            u.userID,
            u.userName,
            u.address AS userAddress,
            u.mobileNo AS userMobileNo,
            u.emailID AS userEmail
        FROM
            partners p
        JOIN
            partner_user pu ON p.partnerID = pu.partnerID
        JOIN
            users u ON pu.userID = u.userID
        WHERE
            p.partnerID = ?
    ");

    $stmt->bind_param("i", $partnerID);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if there are rows in the result
    if ($result) {
        $customersData = $result->fetch_all(MYSQLI_ASSOC);

        // Get the count of customers
        $customersCount = count($customersData);

        // Close the statement
        $stmt->close();

        // Save the result and count in session variables
        $_SESSION['customersData'] = $customersData;
        $_SESSION['customersCount'] = $customersCount;

        return $customersData;
    } else {
        echo "Error executing query: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}


function getRemainingCustomers($conn, $partnerID)
{
    $stmt = $conn->prepare("
        SELECT
            u.userID,
            u.userName,
            u.address AS userAddress,
            u.mobileNo AS userMobileNo,
            u.emailID AS userEmail
        FROM
            users u
        LEFT JOIN
            partner_user pu ON u.userID = pu.userID
        LEFT JOIN
            transaction t ON u.userID = t.userID AND t.partnerID = ?
        WHERE
            pu.partnerID = ?
            AND t.userID IS NULL
    ");

    $stmt->bind_param("ii", $partnerID, $partnerID);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if there are rows in the result
    if ($result) {
        $remainingCustomersData = $result->fetch_all(MYSQLI_ASSOC);

        // Get the count of remaining customers
        $remainingCustomersCount = count($remainingCustomersData);

        // Close the statement
        $stmt->close();

        // Save the result and count in session variables
        $_SESSION['remainingCustomersData'] = $remainingCustomersData;
        $_SESSION['remainingCustomersCount'] = $remainingCustomersCount;

        return $remainingCustomersData;
    } else {
        echo "Error executing query: " . $conn->error;
    }

    // Close the statement
    $stmt->close();
}


?>