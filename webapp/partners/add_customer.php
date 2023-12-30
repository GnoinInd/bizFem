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
    <link rel="stylesheet" href="/css/partner/style.css" />

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
            <li>
                <a href="my_menu.php">
                    <i class="bx bxs-shopping-bag-alt"></i>
                    <span class="text">My Menu</span>
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
            <li class="active">
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
            <!-- <a href="#" class="nav-link">Categories</a> -->
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
                <span class="num">1</span>
            </a>
            <span class="text">
                <?php
                echo $_SESSION['data']["userName"]; ?>
            </span>
            <a href="settings.php" class="profile">
                <img src="/./img/people.png" />
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Add</h1>

                </div>
            </div>


            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add Customer Details</h3>
                        <!-- <i class="bx bx-search"></i>
              <i class="bx bx-filter"></i> -->
                    </div>
                    <form action="*">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Name :</p>
                                    </td>
                                    <td><input type="text" id="menuname" name="menuname"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Address :</p>
                                    </td>
                                    <td><input type="text" id="menuname" name="menuname"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Products :</p>
                                    </td>
                                    <td>
                                        <select id="menu_type" name="menu_type">
                                            <option value="malay">Product A</option>
                                            <option value="chinese">Product B</option>
                                            <option value="indian">Product C</option>
                                            <option value="indian">Product D</option>
                                            <option value="indian">Product E</option>
                                            <option value="indian">Product F</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Price per Product</p>
                                    </td>
                                    <td><input type="text" id="price" name="price"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Product Quantity :</p>
                                    </td>
                                    <td><input type="int" id="min_pax" name="min_pax"></td>
                                </tr>
                                <!-- <tr>
                                    <td>
                                        <p>Food Description :</p>
                                    </td>
                                    <td><input type="text" id="menuname" name="menuname"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="/./img/people.png" />
                                        <p>Menu image :</p>
                                    </td>
                                    <td><input type="file" id="/./img" name="/./img" accept="image/*"></td>
                                </tr> -->
                                <tr>
                                    <td>
                                    </td>
                                    <td> <button type="submit">Add</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <!-- footer -->
    <div class="footer">
        <!-- <p>Made with Love by <a href="#">GANESSA</a> <span id="date"></span></p> -->
    </div>
    <!-- End of footer -->

    <script src="/css/partner/script.js"></script>
</body>

</html>