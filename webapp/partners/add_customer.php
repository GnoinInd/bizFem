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

    <title>Vendor Hub</title>
    <link rel="shortcut icon" type="image/png" href="./img/favicon.ico" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
            <a href="#" class="notification">
                <i class="bx bxs-bell"></i>
                <span class="num">1</span>
            </a>
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
                    <h1>Add Customer</h1>
                </div>
            </div>

            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Add Customer Details</h3>
                    </div>
                    <form action="process_customer.php" method="post">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Name :</p>
                                    </td>
                                    <td><input type="text" id="name" name="name"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Mobile No :</p>
                                    </td>
                                    <td><input type="text" id="mobileNo" name="mobileNo"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Email :</p>
                                    </td>
                                    <td><input type="email" id="email" name="email"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Address :</p>
                                    </td>
                                    <td><input type="text" id="address" name="address"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Products :</p>
                                    </td>
                                    <td>
                                        <!-- Dynamic product options will be loaded here by dropdown-->
                                        <select id="productList" name="product"></select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Price per Product</p>
                                    </td>
                                    <td>
                                        <!-- Display product price here -->
                                        <input type="text" id="price" name="price" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Product Quantity :</p>
                                    </td>
                                    <td>
                                        <!-- Input for product quantity -->
                                        <input type="number" id="productQuantity" name="productQuantity" min="1" oninput="calculateTotal()">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Total Price :</p>
                                    </td>
                                    <td>
                                        <!-- Display total price here -->
                                        <input type="text" id="totalPrice" name="totalPrice" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <!-- Dynamically calculate offer -->
                                    <td>
                                        <p>Offer :</p>
                                    </td>
                                    <td>
                                        <!-- Display calculated offer here -->
                                        <input type="text" id="offer" name="offer" readonly>%
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Price To Pay :</p>
                                    </td>
                                    <td>
                                        <!-- Display calculated price to pay here -->
                                        <input type="text" id="priceToPay" name="priceToPay" readonly>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button type="submit">Add</button></td>
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
    <script>
        $(document).ready(function () {
            // Fetch product data when the page loads
            $.ajax({
                url: '../databaseControl/get_products.php',
                method: 'GET',
                success: function (products) {
                    $('#productList').html(products);
                    updatePrice(); // Trigger price update on page load
                },
                error: function (xhr, status, error) {
                    console.error(error);
                }
            });

            // Update price and total price when product selection changes
            $('#productList').on('change', function () {
                updatePrice();
            });

            // Update total price when quantity changes
            $('#productQuantity').on('input', function () {
                calculateTotal();
            });

            // Function to update price based on selected product
            function updatePrice() {
                const selectedProduct = $('#productList').val();
                $.ajax({
                    url: '../databaseControl/get_price.php',
                    method: 'POST',
                    data: { product: selectedProduct },
                    success: function (price) {
                        $('#price').val(price);
                        updateOffer(); // Trigger offer update when price changes
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            // Function to calculate total price, offer, and price to pay
            function calculateTotal() {
                const price = parseFloat($('#price').val()) || 0;
                const quantity = parseInt($('#productQuantity').val()) || 0;
                const totalPrice = price * quantity;

                // Display total price
                $('#totalPrice').val(totalPrice.toFixed(2));

                updateOffer(); // Trigger offer update when quantity changes
            }

            // Function to update offer based on selected product and quantity
            function updateOffer() {
                const selectedProduct = $('#productList').val();
                const quantity = parseInt($('#productQuantity').val()) || 0;

                $.ajax({
                    url: '../databaseControl/get_offer.php',
                    method: 'POST',
                    data: { product: selectedProduct, quantity: quantity },
                    success: function (offer) {
                        $('#offer').val(offer);
                        updatePriceToPay(); // Trigger price to pay update when offer changes
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            }

            // Function to calculate and display price to pay
            function updatePriceToPay() {
                const totalPrice = parseFloat($('#totalPrice').val()) || 0;
                const offer = parseFloat($('#offer').val()) || 0;
                const priceToPay = totalPrice - (totalPrice * (offer/100));

                // Display price to pay
                $('#priceToPay').val(priceToPay.toFixed(2));
            }

            // Trigger calculation on page load
            calculateTotal();
        });
    </script>
</body>

</html>