<?php
session_start();
// Check the user's role
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

// Redirect if the user's role is not "partner"
if ($role !== 2) {
  header("Location: ../login.php");
  exit();
}
$data = isset($_SESSION['data']) ? $_SESSION['data'] : '';
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
  <link rel="stylesheet" href="/./css/partner/my_menu_style.css" />

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
        <img src="/./img/people.png" />
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
                    <th>Product name</th>
                    <th>Purchasing date</th>
                    <th>Selling date</th>
                    <th>Expire date</th>
                    <th>Total customer</th>
                    <th>Rest customer</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Product A</td>
                    <td>2023-01-15</td>
                    <td>2023-02-20</td>
                    <td>2023-07-15</td>
                    <td>150</td>
                    <td>50</td>
                    <td>Active</td>
                    <td><button>Edit</button> <button>Delete</button></td>
                  </tr>
                  <tr>
                    <td>Product B</td>
                    <td>2023-02-20</td>
                    <td>2023-03-25</td>
                    <td>2023-08-22</td>
                    <td>120</td>
                    <td>30</td>
                    <td>Inactive</td>
                    <td><button>Edit</button> <button>Delete</button></td>
                  </tr>
                  <tr>
                    <td>Product C</td>
                    <td>2023-03-05</td>
                    <td>2023-04-10</td>
                    <td>2023-09-30</td>
                    <td>200</td>
                    <td>80</td>
                    <td>Active</td>
                    <td><button>Edit</button> <button>Delete</button></td>
                  </tr>
                  <tr>
                    <td>Product D</td>
                    <td>2023-04-10</td>
                    <td>2023-05-15</td>
                    <td>2023-10-12</td>
                    <td>180</td>
                    <td>60</td>
                    <td>Inactive</td>
                    <td><button>Edit</button> <button>Delete</button></td>
                  </tr>
                  <tr>
                    <td>Product E</td>
                    <td>2023-05-25</td>
                    <td>2023-06-30</td>
                    <td>2023-11-01</td>
                    <td>220</td>
                    <td>90</td>
                    <td>Active</td>
                    <td><button>Edit</button> <button>Delete</button></td>
                  </tr>
                  <tr>
                    <td>Product F</td>
                    <td>2023-06-08</td>
                    <td>2023-07-15</td>
                    <td>2023-12-15</td>
                    <td>250</td>
                    <td>110</td>
                    <td>Active</td>
                    <td><button>Edit</button> <button>Delete</button></td>
                  </tr>
                  <tr>
                    <td>Product G</td>
                    <td>2023-07-15</td>
                    <td>2023-08-20</td>
                    <td>2024-01-25</td>
                    <td>200</td>
                    <td>40</td>
                    <td>Inactive</td>
                    <td><button>Edit</button> <button>Delete</button></td>
                  </tr>
                  <tr>
                    <td>Product H</td>
                    <td>2023-08-22</td>
                    <td>2023-09-30</td>
                    <td>2024-02-28</td>
                    <td>150</td>
                    <td>70</td>
                    <td>Active</td>
                    <td><button>Edit</button> <button>Delete</button></td>
                  </tr>
                </tbody>
              </table>
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