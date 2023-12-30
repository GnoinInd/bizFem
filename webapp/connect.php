<?php
session_start();
// error_reporting(0);
$host = "localhost";
$username = "root";
$password = "";
$database = "panjibook";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the user input
$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;

// Prepare the SQL query with a UNION and use prepared statements
$sql = "
    SELECT 
        mobileNo, emailID, password, roleID, userName, address
    FROM 
        users
    WHERE 
        mobileNo = ? OR emailID = ?
    
    UNION
    
    SELECT 
        mobileNo, emailID, password, roleID, partnerName AS userName, address
    FROM 
        partners
    WHERE 
        mobileNo = ? OR emailID = ?
    
    UNION
    
    SELECT 
        mobileNo, emailID, password, roleID, name AS userName, '' AS address
    FROM 
        admins
    WHERE 
        mobileNo = ? OR emailID = ?
";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $mobile, $email, $mobile, $email, $mobile, $email);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Fetch and echo the result set
$user = $result->fetch_assoc();
$count = mysqli_num_rows($result);

// Close the statement
$stmt->close();

if ($count == 1) {
    // Store user data and mobile in session;
    $_SESSION['data'] = $user;
    $_SESSION['mobile'] = $mobile;
    // var_dump($_SESSION['data']['mobileNo']);

    // Check the user's role from the appropriate table (admins or partners)
    // var_dump($_SESSION['data']);
    $role = $user['roleID'];

    // Store the user's role in a session variable
    $_SESSION['role'] = $role;

    // Redirect based on the user's role
    if ($role == 1) {
        header("Location: Admin/adminDash.php");
    } elseif ($role == 2) {
        header("Location: pricing.php");
    } elseif ($role == 3) {
        header("Location: pricing.php");
    } else {
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");
}
