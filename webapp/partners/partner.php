<?php
// session_start();
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
if ($partnerID !== null) {
  getOrdersByPartnerID($conn, $partnerID);

  $_SESSION['orderCount'] = getNumberOfOrdersByPartnerID($conn, $partnerID);
  // echo "Number of Orders: $orderCount";
}
getSalesByPartnerID($conn, $partnerID);
getCustomersByPartnerID($conn, $partnerID);
getRemainingCustomers($conn, $partnerID)
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Boxicons -->
  <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet" />
  <!-- My CSS -->
  <link rel="stylesheet" href="../../css/partner/style.css" />
</head>

<body>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="partner.php" class="brand">
      <!-- <i class="bx bxs-smile"></i> -->
      <span class="text">My Store</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
        <a href="partner.php">
          <i class="bx bxs-dashboard"></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="my_menu.php">
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
      <span class="text">
        <?php
        echo $_SESSION['data']["userName"];
        // echo $_SESSION['data']["mobileNo"]; ?>
      </span>
      <a href="settings.php" class="profile">
        <img src="../../img/people.png" />
      </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>
      <div class="head-title">
        <div class="left">
          <h1>Dashboard</h1>
          <ul class="breadcrumb">
            <li>
              <a href="#">Dashboard</a>
            </li>
            <li><i class="bx bx-chevron-right"></i></li>
            <li>
              <a class="active" href="#">Home</a>
            </li>
          </ul>
        </div>
        <!-- <a href="#" class="btn-download">
          <i class="bx bxs-cloud-download"></i>
          <span class="text">Download PDF</span>
        </a> -->
      </div>

      <ul class="box-info">
        <li>
          <i class="bx bxs-calendar-check"></i>
          <span class="text">
            <h3>
              <?php echo $_SESSION['orderCount']; ?>
            </h3>
            <p>Total Orders</p>
          </span>
        </li>
        <li>
          <i class="bx bxs-group"></i>
          <span class="text">
            <h3>
              <?php echo $_SESSION['customersCount']; ?>
            </h3>
            <p>Customers</p>
          </span>
        </li>
        <li>
          <i class="bx bxs-dollar-circle"></i>
          <span class="text">
            <h3>
              <?php echo $_SESSION['salesCount']; ?>
            </h3>
            <p>Total Sales</p>
          </span>
        </li>
        <li>
          <i class='bx bx-clipboard'></i>
          <span class="text">
            <h3>
              <?php echo $_SESSION['remainingCustomersCount']; ?>
            </h3>
            <p>Remaining</p>
          </span>
        </li>
      </ul>


      <!-- MAIN -->
  </section>
  <!-- CONTENT -->

  <!-- footer -->
  <div class="footer">
    <!-- <p>Made with Love by <a href="#">shekhar roy</a> <span id="date"></span></p> -->
  </div>
  <!-- End of footer -->

  <script src="/css/partner/script.js"></script>
</body>

</html>