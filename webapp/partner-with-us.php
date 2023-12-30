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
    <!-- Page Title -->
    <title>Partner With Us</title>

    <!-- Favicon - Small icon displayed in the browser tab -->
    <link rel="icon" href="../resource/images/favicon/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS - A popular CSS framework for building responsive and mobile-first websites -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- International Telephone Input CSS - Styles for a customizable international telephone input field -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

    <!-- International Telephone Input JavaScript - JavaScript for a customizable international telephone input field -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <!-- Custom Stylesheet - Your own CSS styles -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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

    <!-------------------------------------------BECOME PARTNER SECTION STARTS----------------------------------------->
    <div class="container-fluid ">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 col-sm-12 pt-3 pt-lg-5 mt-lg-5">
                    <div class="partnerwithushero">
                        <h1>Become a Vyapar Partner &amp; earn upto 1 Lakh per month</h1>
                    </div>

                    <div class="row pointers">
                        <div class="col-1">
                            <p class="head-para">
                                <img width="100%" height="100%"
                                    src="../resource/images/Partner_With_Us/tax-professional-tick-mark.svg"
                                    alt="tax-professional tick mark">
                            </p>
                        </div>
                        <div class="col-11">
                            <p class="head-para pointer">Join Vyapar, the fastest growing Billing &amp; Accounting
                                software for small businesses</p>
                        </div>
                        <div class="col-1">
                            <p class="head-para">
                                <img width="100%" height="100%"
                                    src="../resource/images/Partner_With_Us/tax-professional-tick-mark.svg"
                                    alt="tax-professional tick mark">
                            </p>
                        </div>
                        <div class="col-11">
                            <p class="head-para pointer">Zero investment and no infrastructure required</p>
                        </div>
                        <div class="col-1">
                            <p class="head-para">
                                <img width="100%" height="100%"
                                    src="../resource/images/Partner_With_Us/tax-professional-tick-mark.svg"
                                    alt="tax-professional tick mark">
                            </p>
                        </div>
                        <div class="col-11">
                            <p class="head-para pointer">Payment settlements every week</p>
                        </div>
                        <div class="col-1">
                        </div>

                    </div>
                </div>





                <div class="col-md-6 col-sm-12 pt-3 pt-lg-5 mt-lg-5 ">
                    <div class="row partnerhero login-card">
                        <form id="myForm" name="registration">
                            <div class="col-12">
                                <div class="input-group">
                                    <input type="text" class="form-control mb-3 border border-secondary" name="Username"
                                        id="Username" placeholder="Name" aria-label="Name"
                                        aria-describedby="addon-wrapping">

                                    <input type="tel" name="phone" id="phone" placeholder="Mobile"
                                        class="form-control w-100 mb-3 border border-secondary ">
                                    <input type="number" name="Otp" class="form-control mb-3 border border-secondary"
                                        id="Otp" placeholder="OTP" aria-label="Otp" aria-describedby="addon-wrapping">

                                    <input type="email" name="email" class="form-control mb-3 border border-secondary"
                                        id="email" placeholder="Email" aria-label="Email"
                                        aria-describedby="addon-wrapping">

                                    <input type="number" name="pincode" id="pincode"
                                        class="form-control mb-3 border border-secondary" placeholder="Pincode"
                                        aria-label="Pincode" aria-describedby="addon-wrapping">
                                    <div class="col-12">
                                        <div class="partnerherobtn text-center">
                                            <button class="btn btn-primary" id="submitBtn">Submit</button>
                                        </div>
                                    </div>



                                </div>
                            </div>


                        </form>




                        <img src="../resource/images/Partner_With_Us/tax-professional-background.webp" alt=""
                            class="img-fluid man">
                    </div>
                </div>
            </div>
        </div>





        <section id="features" class="mt-6rem">
            <div class="container">
                <div class="row info-tax">
                    <div class="col-lg-3 col-md-6 col-sm-6 w-50-m">
                        <div class="image-c">
                            <img src="../resource/images/Partner_With_Us/tax-professional-users.webp" width="60%"
                                height="60%" alt="tax professional users" class="img-fluid">
                        </div>
                        <h4 class="bold-text overview">8 Mn<span class="blue-text">+</span></h4>
                        <p>Customers</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 w-50-m">
                        <div class="image-c">
                            <img src="../resource/images/Partner_With_Us/tax-professional-invoice-created.webp"
                                width="60%" height="58%" alt="tax professional invocie created" class="img-fluid">
                        </div>
                        <h4 class="bold-text overview">5000<span class="blue-text">+</span></h4>
                        <p>Partners</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 w-50-m">
                        <div class="image-c">
                            <img src="../resource/images/Partner_With_Us/tax-professional-value-of-goods.webp"
                                width="45%" height="55%" alt="commision paid to partners" class="img-fluid">
                        </div>
                        <h4 class="bold-text overview">2 Crore<span class="blue-text">+</span></h4>
                        <p>Commission paid to partners</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 w-50-m">
                        <div class="image-c">
                            <img src="../resource/images/Partner_With_Us/tax-professional-value-of-goods.webp"
                                width="45%" height="55%" alt="on google playstore img" class="img-fluid">
                        </div>
                        <h4 class="bold-text overview">Rated 4.7/<span class="blue-text">5</span></h4>
                        <p>On Google Playstore</p>
                    </div>
                </div>
            </div>
        </section>








        <section id="why-partner" class="white-background mt-6rem">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 col-md-6 d-block d-sm-block d-md-none">
                        <h2 class="heading-left bold-text">
                            Why partner with us?
                        </h2><br>
                        <div class="holder pt-0">
                            <img width="100%" height="100%"
                                src="../resource/images/Partner_With_Us/tax-professional-why-parthner-with-us.webp"
                                class="image-container-new center-mobile pt-5" alt="billing &amp; accounting software"
                                title="easy to use billing &amp; accounting software">
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6 partner">
                        <h2 class="heading-left bold-text d-none d-md-block d-xl-block">
                            Why partner with us?
                        </h2><br>
                        <p class="para-left grey-para para-p">
                            Vyapar is the fastest growing, most affordable &amp; easy to use billing &amp; accounting
                            software for SMBs. We work with 5000+ partners across India and plan to double the partner
                            network in the next year. We have disbursed 2 Crore+ in commissions already with weekly
                            settlements. The market is big and the scope is huge. Come, be a part of Vyapar Partner
                            Network and increase your income substantially.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12 col-md-6 d-none d-md-block d-xl-block">
                        <div class="holder">
                            <img width="100%" height="100%"
                                src="../resource/images/Partner_With_Us/tax-professional-why-parthner-with-us.webp"
                                class="image-container-new" alt="billing &amp; accounting software"
                                title="easy to use billing &amp; accounting software">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid bg-fafafa mt-6rem benefits-Wrapper">
            <div class="container mt-5">
                <div class="row">

                    <div class="col-6">
                        <section id="features-wrapper">
                            <div class="d-flex align-items-start  ">
                                <div class="nav flex-column nav-pills me-3 "
                                    style="height: 500px; overflow-y: scroll; width: 100%; flex-wrap: nowrap !important;"
                                    id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true"> <img
                                            src="../resource/images/index/Send Estimate.webp" alt=""
                                            class="img-fluid featuresicon"> Attractive Program Benefits</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false"><img
                                            src="../resource/images/index/Send Estimate.webp" alt=""
                                            class="img-fluid featuresicon"> Super Fast Settlement</button>
                                    <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-disabled" type="button" role="tab"
                                        aria-controls="v-pills-disabled" aria-selected="false"><img
                                            src="../resource/images/index/Send Estimate.webp" alt=""
                                            class="img-fluid featuresicon">Dedicated Account Manager</button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false"><img
                                            src="../resource/images/index/Send Estimate.webp" alt=""
                                            class="img-fluid featuresicon">Zero investments</button>
                                </div>

                            </div>
                        </section>
                    </div>
                    <div class="col-6 p-5">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" tabindex="0">

                                <h3>Get benefits on every subscription</h3>
                                <p>


                                    Get revenue share every time your client purchases a Vyapar subscription. Get
                                    additional benefits on renewal. Special quarterly rewards for top partners in North,
                                    South, East and West Zones.
                                </p>


                                <a class="d-flex text-decoration-none" href="#">Become a Partner <span
                                        class="material-symbols-outlined">
                                        arrow_forward
                                    </span> </a>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab" tabindex="0">

                                <h3>Get benefits on every subscription</h3>
                                <p>


                                    Get revenue share every time your client purchases a Vyapar subscription. Get
                                    additional benefits on renewal. Special quarterly rewards for top partners in North,
                                    South, East and West Zones.
                                </p>


                                <a class="d-flex text-decoration-none" href="#">Become a Partner <span
                                        class="material-symbols-outlined">
                                        arrow_forward
                                    </span> </a>
                            </div>
                            <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel"
                                aria-labelledby="v-pills-disabled-tab" tabindex="0">

                                <h3>Get benefits on every subscription</h3>
                                <p>


                                    Get revenue share every time your client purchases a Vyapar subscription. Get
                                    additional benefits on renewal. Special quarterly rewards for top partners in North,
                                    South, East and West Zones.
                                </p>


                                <a class="d-flex text-decoration-none" href="#">Become a Partner <span
                                        class="material-symbols-outlined">
                                        arrow_forward
                                    </span> </a>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab" tabindex="0">
                                <h3>Get benefits on every subscription</h3>
                                <p>


                                    Get revenue share every time your client purchases a Vyapar subscription. Get
                                    additional benefits on renewal. Special quarterly rewards for top partners in North,
                                    South, East and West Zones.
                                </p>


                                <a class="d-flex text-decoration-none" href="#">Become a Partner <span
                                        class="material-symbols-outlined">
                                        arrow_forward
                                    </span> </a>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid mt-6rem partnerportfolio">
            <div class="container ">
                <h2 class="top-performer-title">Emerging Partners</h2>
                <div class="row testimonialsection">
                    <div class="col-9">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="ceomd p-4">
                                        <img src="../resource/images/Partner_With_Us/west-zone.webp" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ceomd p-4">
                                        <img src="../resource/images/Partner_With_Us/west-zone.webp" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ceomd p-4">
                                        <img src="../resource/images/Partner_With_Us/west-zone.webp" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ceomd p-4">
                                        <img src="../resource/images/Partner_With_Us/west-zone.webp" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ceomd p-4">
                                        <img src="../resource/images/Partner_With_Us/west-zone.webp" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ceomd p-4">
                                        <img src="../resource/images/Partner_With_Us/west-zone.webp" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ceomd p-4">
                                        <img src="../resource/images/Partner_With_Us/west-zone.webp" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ceomd p-4">
                                        <img src="../resource/images/Partner_With_Us/west-zone.webp" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ceomd p-4">
                                        <img src="../resource/images/Partner_With_Us/west-zone.webp" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <section id="features-2" class="white-background">
            <div class="container">
                <h2 class="text-center bold-text m-b-130 p-t-3em">
                    Vyapar features at a glance
                </h2>
                <div class="row p-t-1em" id="owl_about_main_slider">
                    <div class="col-lg-3">
                        <div class="card card-new m-t-2em">
                            <div class="card-body">
                                <img width="100%" height="100%"
                                    src="../resource/images/Partner_With_Us/tax-professional-billing-2.webp"
                                    class="card-image center" title="Create customized GST bills"
                                    alt="customized GST bills">
                                <h3 class="card-title">
                                    Billing
                                </h3>
                                <p class="card-text">
                                    Create customized GST bills in 10+ formats that comply with the goods and services
                                    tax laws of India. Share bills with customers on Whatsapp
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-new m-t-2em">
                            <div class="card-body">
                                <img width="100%" height="100%"
                                    src="../resource/images/Partner_With_Us/tax-professional-billing-2.webp"
                                    class="card-image center" title="Track complete inventory"
                                    alt="complete inventory with parameters">
                                <h3 class="card-title">
                                    Inventory
                                </h3>
                                <p class="card-text">
                                    Track complete inventory with parameters like serial number, batch number, expiry
                                    date and more. Check item wise P&amp;L, discount report etc.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-new m-t-2em">
                            <div class="card-body">
                                <img width="100%" height="100%"
                                    src="../resource/images/Partner_With_Us/tax-professional-billing-2.webp"
                                    class="card-image center" title="accounting reports, sales &amp; purchase reports"
                                    alt="party-wise reports &amp; expense reports">
                                <h3 class="card-title">
                                    Accounting
                                </h3>
                                <p class="card-text">
                                    Record, manage and track all your business activities digitally. Get all accounting
                                    reports,
                                    sales &amp; purchase reports,
                                    party-wise reports &amp; expense reports
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card card-new m-t-2em">
                            <div class="card-body">
                                <img width="100%" height="100%"
                                    src="../resource/images/Partner_With_Us/tax-professional-billing-2.webp"
                                    class="card-image center" title="Generate GST reports" alt="GST detail report">
                                <h3 class="card-title">
                                    GST Reports
                                </h3>
                                <p class="card-text">
                                    Generate GST reports including GSTR1, GSTR2, GSTR3B, GSTR9, GST detail report.
                                    Export it
                                    to
                                    your tax consultant in excel
                                    or pdf formats easily
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-t-2em">
                        <div class="card card-new">
                            <div class="card-body">
                                <img width="100%" height="100%"
                                    src="../resource/images/Partner_With_Us/tax-professional-billing-2.webp"
                                    class="card-image center" title="Take your business online"
                                    alt="manage your online orders">
                                <h3 class="card-title">
                                    Online Store
                                </h3>
                                <p class="card-text">
                                    Take your business online. Add items with images, additional charges, minimum cart
                                    value.
                                    View &amp; manage your online
                                    orders with order dashboard
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-t-2em">
                        <div class="card card-new">
                            <div class="card-body">
                                <img width="100%" height="100%"
                                    src="../resource/images/Partner_With_Us/tax-professional-billing-2.webp"
                                    class="card-image center" title="Get a hassle free auto backup system"
                                    alt="auto backup system">
                                <h3 class="card-title">
                                    Auto Backup
                                </h3>
                                <p class="card-text">
                                    Get a hassle free auto backup system that ensures that your data is never lost. Back
                                    up
                                    data
                                    to your personal google
                                    drive and set backup frequency
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-t-2em">
                        <div class="card card-new">
                            <div class="card-body">
                                <img width="100%" height="100%"
                                    src="../resource/images/Partner_With_Us/tax-professional-billing-2.webp"
                                    class="card-image center" title="multiple devices and sync your business data"
                                    alt="sync your business data">
                                <h3 class="card-title">
                                    Auto Sync
                                </h3>
                                <p class="card-text">
                                    Use on multiple devices and sync your business data. Create user permission to
                                    restrict
                                    which users can access what
                                    features
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-t-2em">
                        <div class="card card-new">
                            <div class="card-body">
                                <img width="100%" height="100%"
                                    src="../resource/images/Partner_With_Us/tax-professional-billing-2.webp"
                                    class="card-image center" title="Generate E-way bill Software"
                                    alt="Generate E-way bill">
                                <h3 class="card-title">
                                    E-Way Bill
                                </h3>
                                <p class="card-text">
                                    Generate E-way bill on Vyapar software in a single click after you made the invoice.
                                    Share
                                    invoice with E-way bill with
                                    your transporter
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="details-form-2">
            <div class="container card-new2 ">
                <div class="row">
                    <div class="col-md-6 col-sm-12 pt-3 pt-lg-5 mt-lg-5 p-5">
                        <div class="row partnerhero login-card w-100">

                            <form id="myformbottom">
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control mb-3 border border-secondary"
                                            name="Username" id="Username" placeholder="Name" aria-label="Name"
                                            aria-describedby="addon-wrapping">

                                        <input type="tel" name="phone" id="phone" placeholder="Mobile"
                                            class="form-control w-100 mb-3 border border-secondary ">
                                        <input type="number" name="Otp"
                                            class="form-control mb-3 border border-secondary" id="Otp" placeholder="OTP"
                                            aria-label="Otp" aria-describedby="addon-wrapping">

                                        <input type="email" name="email"
                                            class="form-control mb-3 border border-secondary" id="email"
                                            placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping">

                                        <input type="number" name="pincode" id="pincode"
                                            class="form-control mb-3 border border-secondary" placeholder="Pincode"
                                            aria-label="Pincode" aria-describedby="addon-wrapping">
                                        <div class="col-12">
                                            <div class="partnerherobtn text-center">
                                                <button class="btn btn-primary" id="submitBtn">Submit</button>
                                            </div>
                                        </div>



                                    </div>
                                </div>


                            </form>



                        </div>
                    </div>





                    <div class="col-md-6 col-sm-12 pt-3 pt-lg-5 mt-lg-5">
                        <div class="light-background">
                            <div class="p-t-b-10-4">
                                <img src="../resource/images/logo/company/logo.png" title="Vyapar App Logo" alt=""
                                    class="center" width="166px" height="46px">
                                <h2 class="bold-text text-center m-t-30px">Download Vyapar</h2>
                                <p class="text-center m-t-20px">Free GST Billing Software &amp; App for
                                    Small
                                    Businesses</p>
                                <button class="btn-primary center m-t-20px w-50" id="download-button">Download</button>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-------------------------------------------BECOME PARTNER SECTION END----------------------------------------->


    <!-------------------------------------------FOOTER SECTION STARTS----------------------------------------->
    <footer class="partnerfooter mt-6rem">
        <div class="container">
            <div class="row footer-links">
                <div class="col s6 l2">
                    <ul>
                        <li class="footer-header">Let us help you</li>
                        <li><a rel="" href="#" previewlistener="true">Contact Us</a>
                        </li>
                        <li><a rel="" href="#" previewlistener="true">Your Account</a></li>
                        <li><a rel="nofollow" href="https://www.youtube.com/channel/UCPyg1bziA6iTfjjX-IwGlhQ"
                                previewlistener="true">Video Tutorials</a></li>
                        <li><a rel="" href="#" previewlistener="true">Partnership / Distributorship</a></li>
                    </ul>
                </div>
                <div class="col s6 l2">
                    <ul>
                        <li class="footer-header">Features</li>
                        <li><a rel="" href="#" previewlistener="true">Free
                                Inventory Management Software</a></li>
                        <li><a rel="" href="#" previewlistener="true">Billing
                                Software for Retail Shops</a></li>
                        <li><a rel="" href="#" previewlistener="true">POS Billing
                                Software</a></li>
                        <li><a rel="" href="#" previewlistener="true">Small
                                Business Accounting Software</a></li>
                    </ul>
                </div>
                <div class="col s6 l2">
                    <ul>
                        <li class="footer-header">Quick Links</li>
                        <li><a href="#" previewlistener="true">Free Invoice
                                Formats</a></li>
                        <li><a rel="" href="#" previewlistener="true">GST Invoice Format</a></li>
                        <li><a rel="" href="#" previewlistener="true">Balance Sheet Format</a>
                        </li>
                        <li><a rel="" href="#" previewlistener="true">Vyapar Comparison
                                with other Apps</a></li>
                        <li><a rel="" href="#" previewlistener="true">Sitemap</a></li>
                    </ul>
                </div>
                <div class="col s6 l2">
                    <ul class="quick-links">
                        <li class="footer-header">Tools</li>
                        <li><a rel="" href="#" previewlistener="true">Free Online Logo Maker</a></li>
                        <li><a rel="" href="#" previewlistener="true">Online GST Calculator</a></li>
                        <li><a rel="" href="#" previewlistener="true">Free Invoice Generator</a>
                        </li>
                        <li><a rel="" href="#" previewlistener="true">Online
                                Quotation Maker</a></li>
                    </ul>
                </div>
                <div class="col s6 l2">
                    <ul>
                        <li class="footer-header">Other Products</li>
                        <li><a rel="nofollow" href="#" previewlistener="true">NeoDove
                                (Telecalling CRM)</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright center">
                <span><a href="#" previewlistener="true">Terms and Conditions</a></span>
                <span>Simply Gnoin Apps Pvt Ltd<sup>TM</sup></span>
            </div>
        </div>
    </footer>
    <!-------------------------------------------FOOTER SECTION END----------------------------------------->



    <!-------------------------------------------TRY MOBILE APP SECTION STARTS----------------------------------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3>Scan With Your Camera</h3>
                                <p>Monitor your business activity from anywhere in the world, sync mobile app with
                                    desktop app.</p>
                            </div>

                            <div class="col-12">
                                <div class="mb-3 border border-1">
                                    <input type="number" class="form-control " id="exampleFormControlInput1"
                                        placeholder="Enter Number">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Get The App</button>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------TRY MOBILE APP SECTION END----------------------------------------->

















    <!--Bootstrap Js CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>





    <!--Phone Input Initialization-->
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            initialCountry: "in",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        const phoneInputField2 = document.querySelector("#phone2");
        const phoneInput2 = window.intlTelInput(phoneInputField2, {
            initialCountry: "in",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>




    <!--Jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--Slick initialization-->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            pagination: {
                el: ".swiper-pagination",
                dynamicBullets: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },

            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script src="/js/custom.js"></script>

</body>

</html>