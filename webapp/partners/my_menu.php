<?php
require '../databaseControl/RetreiveStoreDetails.php';
// Check the user's role
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

// Redirect if the user's role is not "partner"
if ($role !== 2) {
  header("Location: ../login.php");
  exit();
}
$data = isset($_SESSION['data']) ? $_SESSION['data'] : '';
$mobileNumber = $_SESSION['data']['mobileNo'];
$partnerID = getPartnerIDByMobileNumber($conn, $mobileNumber);
getProductInformationByPartnerID($conn,$partnerID)
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/be2e1f99e9.js" crossorigin="anonymous"></script>
  <!-- My CSS -->
  <link rel="stylesheet" href="../../css/partner/my_menu_style.css" />

  <title>Vendor Hub</title>
  <link rel="shortcut icon" type="image/png" href="./img/favicon.ico" />
</head>

<body>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="partner.php" class="brand">
      <!-- <i class="bx bxs-smile"></i> -->
      <span class="text">My Store</span>
    </a>
    <ul class="side-menu top">
      <li>
        <a href="partner.php">
          <i class="bx bxs-dashboard"></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li class="active">
        <a href="add_menu.php">
          <i class="bx bxs-shopping-bag-alt"></i><span class="text">My Menu</span>
        </a>
      </li>
      <li>
        <a href="add_customer.php">
          <i class='bx bxs-add-to-queue'></i><span class="text">Add Customer</span>
        </a>
      </li>
      <li>
        <a href="track_orders.php">
          <i class="bx bxs-doughnut-chart"></i>
          <span class="text">Track Orders</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class="bx bxs-message-dots"></i>
          <span class="text">Message</span>
        </a>
      </li>
      <li>
        <a href="customers.php">
          <i class="bx bxs-group"></i>
          <span class="text">Customers</span>
        </a>
      </li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="settings.php">
          <i class="bx bxs-cog"></i>
          <span class="text">Settings</span>
        </a>
      </li>
      <li>
        <a href="../logout.php" class="logout">
          <i class="bx bxs-log-out-circle"></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->

  <!-- CONTENT -->
  <section id="content">
    <!-- NAVBAR -->
    <nav>
      <i class="bx bx-menu"></i>
      <form action="#">
        <div class="form-input">
          <input type="search" placeholder="Search..." />
          <button type="submit" class="search-btn">
            <i class="bx bx-search"></i>
          </button>
        </div>
      </form>
      <a href="#" class="notification">
        <i class="bx bxs-bell"></i>
        <span class="num">8</span>
      </a>
      <span class="text">
        <?php
        echo $_SESSION['data']["userName"]; ?>
      </span>
      <a class="profile">
        <img src="../../img/people.png" />
      </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>Sales</h1>
        </div>
      </div>
      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="table-data">
            <div class="order">
              <div class="head">
              </div>
              <table>
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Purchase Date</th>
                            <th>Selling Date</th>
                            <th>Expire Date</th>
                            <th>Total Customers</th>
                            <th>Rest Customers</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>

                    <?php
                    // Loop through the product information data and print each row in the table
                    foreach ($_SESSION['productInformation'] as $product) {
                        echo '<tr>';
                        echo '<td>' . $product['productName'] . '</td>';
                        echo '<td>' . $product['purchaseDate'] . '</td>';
                        echo '<td>' . $product['sellingDate'] . '</td>';
                        echo '<td>' . $product['expireDate'] . '</td>';
                        echo '<td>' . $product['totalCustomers'] . '</td>';
                        echo '<td>' . $product['restCustomers'] . '</td>';
                        echo '<td>' . $product['status'] . '</td>';
                        echo '</tr>';
                    }
                   ?>

                    </tbody>
                </table>
              <?php 
              // echo var_dump($_SESSION['productInformation']); 
              ?>
            </div>
          </div>
        </div>
      </main>
      <!-- MAIN -->
    </main>
    <!-- MAIN -->
  </section>
  <!-- CONTENT -->

  <!-- footer -->
  <div class="footer">
  </div>
  <!-- End of footer -->

  <script src="/css/partner/script.js"></script>
  <script src="/css/partner/script.js"></script>
</body>

</html>