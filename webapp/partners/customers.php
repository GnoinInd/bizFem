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
                <a href="#">
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
                echo $_SESSION['data']["userName"]; ?>
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
                    <h1>Customers</h1>
                </div>
                <div class="table-data">
                    <div class="order">
                        <div class="head">
                            <h3>Customers all details </h3>
                            <!-- <i class="bx bx-search"></i>
              <i class="bx bx-filter"></i> -->
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Product Purchased</th>
                                    <th>Delivery Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="../../img/people.png" />
                                    </td>
                                    <td>John Doe</td>
                                    <td>john.doe@example.com</td>
                                    <td>1234567890</td>
                                    <td>123 Main St, City</td>
                                    <td>Product A</td>
                                    <td>2023-01-15</td>
                                    <td>Delivered</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="../../img/people.png" />
                                    </td>
                                    <td>Jane Smith</td>
                                    <td>jane.smith@example.com</td>
                                    <td>9876543210</td>
                                    <td>456 Oak St, Town</td>
                                    <td>Product B</td>
                                    <td>2023-02-20</td>
                                    <td>Shipped</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="../../img/people.png" />
                                    </td>
                                    <td>Bob Johnson</td>
                                    <td>bob.johnson@example.com</td>
                                    <td>5555555555</td>
                                    <td>789 Pine St, Village</td>
                                    <td>Product C</td>
                                    <td>2023-03-05</td>
                                    <td>Processing</td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src="../../img/people.png" />
                                    </td>
                                    <td>Alice Johnson</td>
                                    <td>alice.johnson@example.com</td>
                                    <td>1111111111</td>
                                    <td>321 Maple St, Suburb</td>
                                    <td>Product D</td>
                                    <td>2023-04-10</td>
                                    <td>Delivered</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="../../img/people.png" />
                                    </td>
                                    <td>Charlie Brown</td>
                                    <td>charlie.brown@example.com</td>
                                    <td>9999999999</td>
                                    <td>654 Elm St, District</td>
                                    <td>Product E</td>
                                    <td>2023-05-25</td>
                                    <td>Shipped</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="../../img/people.png" />
                                    </td>
                                    <td>Eva Williams</td>
                                    <td>eva.williams@example.com</td>
                                    <td>7777777777</td>
                                    <td>987 Oak St, County</td>
                                    <td>Product F</td>
                                    <td>2023-06-08</td>
                                    <td>Processing</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="../../img/people.png" />
                                    </td>
                                    <td>David Miller</td>
                                    <td>david.miller@example.com</td>
                                    <td>8888888888</td>
                                    <td>456 Birch St, Hamlet</td>
                                    <td>Product G</td>
                                    <td>2023-07-15</td>
                                    <td>Shipped</td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="../../img/people.png" />
                                    </td>
                                    <td>Grace Taylor</td>
                                    <td>grace.taylor@example.com</td>
                                    <td>4444444444</td>
                                    <td>789 Pine St, Village</td>
                                    <td>Product H</td>
                                    <td>2023-08-22</td>
                                    <td>Processing</td>
                                </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <!-- footer -->
    <div class="footer">
    </div>
    <!-- End of footer -->

    <script src="/css/partner/script.js"></script>
</body>

</html>