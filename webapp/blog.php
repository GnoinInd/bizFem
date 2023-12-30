<?php
session_start();
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
$data = isset($_SESSION['data']) ? $_SESSION['data'] : '';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!--Custom CSS-->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <!-------------------------------------------HEADER SECTION STARTS----------------------------------------->
    <header class="sticky-top">
        <nav class="navbar  navbar-expand-lg  bg-body-tertiary">
            <div class="container">
                <div class="logoimg ">
                    <a class="navbar-brand" href="../index.php"><img src="../resource/images/logo/company/logo.png"
                            alt="" class="img-fluid w-100"></a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100 " id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="./IndexLO.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Try mobile app</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./pricing.php">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./aboutus.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./gst-accounting-pc.php">Desktop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./careers.php">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./partner-with-us.php">Partner with us</a>
                        </li>
                        <?php
                        if ($role > 1) { ?>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    My Account
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">
                                            <?php
                                            if ($role > 1 && $role <= 3) {
                                                echo $_SESSION['data']["userName"]; ?>
                                        </a></li>
                                    <li><a class="dropdown-item" href="#">
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Rewards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">My Invoices</a>
                                    </li>
                                    <?php if ($role != 3) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="partners/partner.php">My Store</a>
                                    </li>
                                    <?php } ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Edit Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Set Password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php
                                            }
                        } else {
                            ?>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php?openModal=true">Login</a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-------------------------------------------HEADER SECTION END----------------------------------------->


    <!-------------------------------------------BLOG SECTION STARTS----------------------------------------->
    <div class="container mt-5">
        <div class="row d-flex justify-content-center ">

            <div class="col-9 d-flex justify-content-start">


                <div class="row d-flex justify-content-center">
                    <div class="col-12 text-center">
                        <h3>Blog Posts</h3>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="blogheading">
                                <a href="#">What is Cash Flow Statement? It’s Uses, Importance, Types</a>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="d-flex blogauthor">
                                <li>
                                    <a href="#">by Vyapar/</a>
                                </li>
                                <li>
                                    May 16, 2022
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="blogpara">
                                <p>As a businessman you are supposed to prepare multiple reports to Calculate your
                                    Businesses financial condition for a given accounting period. Reports like Sales &
                                    Revenue reports, financial reports, inventory reports, formal & informal business
                                    reports, summarized business reports, GST reports, performance reports, annual
                                    reports etc, but few of them are required to prepare on a daily basis to measure…
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="blogheading">
                                <a href="#">What is Cash Flow Statement? It’s Uses, Importance, Types</a>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="d-flex blogauthor">
                                <li>
                                    <a href="#">by Vyapar/</a>
                                </li>
                                <li>
                                    May 16, 2022
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="blogpara">
                                <p>As a businessman you are supposed to prepare multiple reports to Calculate your
                                    Businesses financial condition for a given accounting period. Reports like Sales &
                                    Revenue reports, financial reports, inventory reports, formal & informal business
                                    reports, summarized business reports, GST reports, performance reports, annual
                                    reports etc, but few of them are required to prepare on a daily basis to measure…
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="blogheading">
                                <a href="#">What is Cash Flow Statement? It’s Uses, Importance, Types</a>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="d-flex blogauthor">
                                <li>
                                    <a href="#">by Vyapar/</a>
                                </li>
                                <li>
                                    May 16, 2022
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="blogpara">
                                <p>As a businessman you are supposed to prepare multiple reports to Calculate your
                                    Businesses financial condition for a given accounting period. Reports like Sales &
                                    Revenue reports, financial reports, inventory reports, formal & informal business
                                    reports, summarized business reports, GST reports, performance reports, annual
                                    reports etc, but few of them are required to prepare on a daily basis to measure…
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="blogheading">
                                <a href="#">What is Cash Flow Statement? It’s Uses, Importance, Types</a>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="d-flex blogauthor">
                                <li>
                                    <a href="#">by Vyapar/</a>
                                </li>
                                <li>
                                    May 16, 2022
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="blogpara">
                                <p>As a businessman you are supposed to prepare multiple reports to Calculate your
                                    Businesses financial condition for a given accounting period. Reports like Sales &
                                    Revenue reports, financial reports, inventory reports, formal & informal business
                                    reports, summarized business reports, GST reports, performance reports, annual
                                    reports etc, but few of them are required to prepare on a daily basis to measure…
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="blogheading">
                                <a href="#">What is Cash Flow Statement? It’s Uses, Importance, Types</a>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="d-flex blogauthor">
                                <li>
                                    <a href="#">by Vyapar/</a>
                                </li>
                                <li>
                                    May 16, 2022
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="blogpara">
                                <p>As a businessman you are supposed to prepare multiple reports to Calculate your
                                    Businesses financial condition for a given accounting period. Reports like Sales &
                                    Revenue reports, financial reports, inventory reports, formal & informal business
                                    reports, summarized business reports, GST reports, performance reports, annual
                                    reports etc, but few of them are required to prepare on a daily basis to measure…
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="blogheading">
                                <a href="#">What is Cash Flow Statement? It’s Uses, Importance, Types</a>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="d-flex blogauthor">
                                <li>
                                    <a href="#">by Vyapar/</a>
                                </li>
                                <li>
                                    May 16, 2022
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="blogpara">
                                <p>As a businessman you are supposed to prepare multiple reports to Calculate your
                                    Businesses financial condition for a given accounting period. Reports like Sales &
                                    Revenue reports, financial reports, inventory reports, formal & informal business
                                    reports, summarized business reports, GST reports, performance reports, annual
                                    reports etc, but few of them are required to prepare on a daily basis to measure…
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="blogheading">
                                <a href="#">What is Cash Flow Statement? It’s Uses, Importance, Types</a>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="d-flex blogauthor">
                                <li>
                                    <a href="#">by Vyapar/</a>
                                </li>
                                <li>
                                    May 16, 2022
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="blogpara">
                                <p>As a businessman you are supposed to prepare multiple reports to Calculate your
                                    Businesses financial condition for a given accounting period. Reports like Sales &
                                    Revenue reports, financial reports, inventory reports, formal & informal business
                                    reports, summarized business reports, GST reports, performance reports, annual
                                    reports etc, but few of them are required to prepare on a daily basis to measure…
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="blogheading">
                                <a href="#">What is Cash Flow Statement? It’s Uses, Importance, Types</a>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="d-flex blogauthor">
                                <li>
                                    <a href="#">by Vyapar/</a>
                                </li>
                                <li>
                                    May 16, 2022
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="blogpara">
                                <p>As a businessman you are supposed to prepare multiple reports to Calculate your
                                    Businesses financial condition for a given accounting period. Reports like Sales &
                                    Revenue reports, financial reports, inventory reports, formal & informal business
                                    reports, summarized business reports, GST reports, performance reports, annual
                                    reports etc, but few of them are required to prepare on a daily basis to measure…
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="blogheading">
                                <a href="#">What is Cash Flow Statement? It’s Uses, Importance, Types</a>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="d-flex blogauthor">
                                <li>
                                    <a href="#">by Vyapar/</a>
                                </li>
                                <li>
                                    May 16, 2022
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="blogpara">
                                <p>As a businessman you are supposed to prepare multiple reports to Calculate your
                                    Businesses financial condition for a given accounting period. Reports like Sales &
                                    Revenue reports, financial reports, inventory reports, formal & informal business
                                    reports, summarized business reports, GST reports, performance reports, annual
                                    reports etc, but few of them are required to prepare on a daily basis to measure…
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-5">
                            <div class="blogheading">
                                <a href="#">What is Cash Flow Statement? It’s Uses, Importance, Types</a>
                            </div>
                        </div>

                        <div class="col-12">
                            <ul class="d-flex blogauthor">
                                <li>
                                    <a href="#">by Vyapar/</a>
                                </li>
                                <li>
                                    May 16, 2022
                                </li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="blogpara">
                                <p>As a businessman you are supposed to prepare multiple reports to Calculate your
                                    Businesses financial condition for a given accounting period. Reports like Sales &
                                    Revenue reports, financial reports, inventory reports, formal & informal business
                                    reports, summarized business reports, GST reports, performance reports, annual
                                    reports etc, but few of them are required to prepare on a daily basis to measure…
                                </p>
                            </div>
                        </div>
                    </div>

                </div>





            </div>





        </div>
    </div>

    <!-------------------------------------------BLOG SECTION END----------------------------------------->



    <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>