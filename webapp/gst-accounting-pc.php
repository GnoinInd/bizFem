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
  <title>Vyapar</title>

  <!-- Favicon - Small icon displayed in the browser tab -->
  <link rel="icon" href="images/favicon/favicon.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Font Awesome CSS - Icons for your web page -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Slick CSS - A responsive carousel/slick slider library -->
  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">

  <!-- Custom Stylesheet - Your own CSS styles -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- International Telephone Input CSS - Styles for a customizable international telephone input field -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

  <!-- International Telephone Input JavaScript - JavaScript for a customizable international telephone input field -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

  <!-- Font Awesome CSS again (duplicate entry, consider removing one) -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- Star Rating CSS - Styles for a star rating component -->
  <link rel="stylesheet" href="../css/star-rating.css" media="all" type="text/css" />

  <!-- jQuery - A fast, small, and feature-rich JavaScript library -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!-- Star Rating JavaScript -->
  <script src="../js/star-rating.js" type="text/javascript"></script>




</head>

<body>

  <!-------------------------------------------HEADER SECTION STARTS----------------------------------------->
  <header class="sticky-top">
    <nav class="navbar  navbar-expand-lg  bg-body-tertiary">
      <div class="container">
        <div class="logoimg ">
          <a class="navbar-brand" href="../index.php"><img src="../resource/images/logo/company/logo.png" alt=""
              class="img-fluid w-100"></a>
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
  <!-------------------------------------------HEADER SECTION ENDS----------------------------------------->

  <!-------------------------------------------GST BILLING SOFTWARE SECTION STARTS----------------------------------------->
  <div class="container ">
    <div class="row">
      <div class="col-md-12 mt-6rem">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="centered-content">
              <div class="textcont">
                <h1 class="textheroheading">GST Billing Software in India for Small Businesses</h1>
              </div>

              <div class="herodecri">
                <p>Manage your business professionally with Vyapar. Using the best software for your billing, inventory
                  &
                  accounting needs. Be a part of 1 Cr+ SMEs in India who trust Vyapar.</p>
              </div>

              <div class="downldbtn">
                <a href="#" class="btn btn-danger py-3">Download For Desktop</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-12">
            <div class="imgcontainer">
              <img src="../resource/images/banner/new-vyapar-hero.webp" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------------GST BILLING SOFTWARE SECTION ENDS----------------------------------------->



  <!-------------------------------------------HAPPY CUSTOMERS SECTION STARTS----------------------------------------->
  <div class="container-fluid aboutsection mt-6rem">
    <div class="container">
      <div class="col-md-12">
        <div class="aboutsection  py-5 px-3">
          <div class="row">
            <div class="col">
              <div class="abouticons">
                <img src="../resource/images/Desktop/happy_customer-1.webp" alt="">
              </div>

              <div class="abouticonstextdesc">
                <p class="text m-auto">1 Crore<span class="text-ed1a3b">+</span></p>
              </div>

              <div class="abouticonstextdesc">
                <p class="text">Happy customers</p>

              </div>

            </div>
            <div class="col">
              <div class="abouticons">
                <img src="../resource/images/Desktop/phone_icon-1.webp" alt="">
              </div>

              <div class="abouticonstextdesc">
                <p class="text m-auto">1 Crore<span class="text-ed1a3b">+</span></p>
              </div>

              <div class="abouticonstextdesc">
                <p class="text">Happy Customers</p>
              </div>
            </div>

            <div class="col">
              <div class="abouticons">
                <img src="../resource/images/Desktop/gplay_store-2.webp" alt="">
              </div>

              <div class="abouticonstextdesc">
                <p class="text m-auto">1 Crore<span class="text-ed1a3b">+</span></p>
              </div>

              <div class="abouticonstextdesc">
                <p class="text">Happy customers</p>
              </div>
            </div>

            <div class="col">
              <div class="abouticons">
                <img src="../resource/images/Desktop/multi_device-1.webp" alt="">
              </div>

              <div class="abouticonstextdesc">
                <p class="text m-auto">1 Crore<span class="text-ed1a3b">+</span></p>
              </div>

              <div class="abouticonstextdesc">
                <p class="text">Happy customers</p>
              </div>
            </div>

            <div class="col">
              <div class="abouticons">
                <img src="../resource/images/Desktop/multi_user-1.webp" alt="">
              </div>

              <div class="abouticonstextdesc">
                <p class="text m-auto">1 Crore<span class="text-ed1a3b">+</span></p>
              </div>

              <div class="abouticonstextdesc">
                <p class="text">Happy customers</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------------HAPPY CUSTOMERS SECTION ENDS----------------------------------------->

  <!-------------------------------------------HOW TO USE APP SECTION STARTS----------------------------------------->
  <section class="container-fluid py-5 mt-6rem" style="background-color: #e6e6e6;">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="appuseheading text-center py-4">How to Use App</h2>
        </div>

        <div class="col-12">
          <div class="card h-100 border border-0" style="width: 100%; background: #e6e6e6;">
            <div class="embed-responsive m-auto embed-responsive-16by9">
              <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" class="random_video embed-responsive-item"
                height="480" width="640"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------------------------------------------HOW TO USE APP SECTION ENDS----------------------------------------->

  <!-------------------------------------------APPLICATION FOR PC SECTION STARTS----------------------------------------->
  <div class="container-fluid  mt-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="billheading text-center py-4">
            <h2 class="billheadingtext py-4">Why Use Vyapar Billing Software for Pc</h2>
          </div>
        </div>

        <div class="col-12">
          <div class="billimg text-center ">
            <img src="../resource/images/Desktop/Invoicing-And-Billing-fetaure-in-SaaS-Invoicing-Software.webp" alt=""
              class="img-fluid">
          </div>
        </div>

        <div class="col-12 mt-5">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>

        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>
        <div class="col-12">
          <div class="billingheading">
            <h3>Keep Accurate Reacords</h3>
            <p>Use desktop billing software to keep track of your everyday transactions. It is crucial for managing cash
              flow and eliminating issues that might occur when you file taxes. Using the Vyapar pc software, you can
              make the whole process of managing invoices and expenditures in one place seamlessly.</p>
          </div>
        </div>










      </div>
    </div>
  </div>
  <!-------------------------------------------APPLICATION FOR PC SECTION ENDS----------------------------------------->


  <!-------------------------------------------DOWNLOAD FOR DESKTOP SECTION STARTS----------------------------------------->
  <div class="container-fluid mt-6rem" style="background-color: #ed1a3b;">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="gstaccountingbannertext">
            <h4 class="text-white">So What are you waiting for?</h4>
            <p class="text-white">Take your business to the next level with Vyapar! Try free for 15 days</p>
          </div>
        </div>

        <div class="col-md-6 col-sm-12">
          <div class="dwnloadfordesktopbtn">
            <a href=""> Download For Desktop</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-------------------------------------------DOWNLOAD FOR DESKTOP SECTION ENDS----------------------------------------->


  <!-------------------------------------------RATING SECTION STARTS----------------------------------------->
  <div class="container my-5 mt-6rem">
    <div class="row">
      <div class="col-12 text-center">
        <div class="ratings-wrapper ">
          <div data-productid="39" class="ratings">
            <span data-rating="1"> &#9733;</span>
            <span data-rating="2"> &#9733;</span>
            <span data-rating="3"> &#9733;</span>
            <span data-rating="4"> &#9733;</span>
            <span data-rating="5"> &#9733;</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------------RATING SECTION ENDS----------------------------------------->


  <!-------------------------------------------TRY MOBILE APP MODAL SECTION STARTS----------------------------------------->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content mobileappsection">
        <div class="modal-header">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <div class="container trymobileapp">
            <div class="row">
              <div class="col-12  trymobileappcontent">
                <img src="images/qrcode.webp" alt="" class="img-fluid">
                <p class="heading">Scan With Your Camera</p>
                <p class="headingtext">Monitor your business activity from anywhere in the world, sync mobile app with
                  desktop app.</p>
              </div>

              <div class="col-12">
                <div class="mb-3 border border-1 rounded-pill">
                  <input type="number" class="form-control px-4  " id="exampleFormControlInput1"
                    placeholder="Enter Number">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button " class="btn btn-danger text-center " data-bs-dismiss="modal">Get The App</button>
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------------TRY MOBILE APP MODAL SECTION ENDS----------------------------------------->





  <!-------------------------------------------FOOTER SECTION STARTS----------------------------------------->
  <footer id="footer mt-6rem">
    <div class="container-fluid">
      <div class="container">

        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="weblogo">
                  <img src="../resource/images/logo/company/logo.png" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <ul>
                  <li class="footrhead">
                    <b>Software</b>
                  </li>
                </ul>
              </div>
              <div class="col-md-4 col-sm-12">
                <ul>
                  <li class="footrhead">
                    <b>Software</b>
                  </li>
                </ul>
              </div>
            </div>


            <div class="row">
              <div class="col-md-4 col-sm-12">
                <div class="footlinks">
                  <ul>
                    <li>Billing Accounting &

                    </li>
                    <li> Inventory software for small</li>
                    <li> business owners in India</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="footlinks">
                  <ul>
                    <li> App</li>
                    <li>NeoDove (Telecalling CRM)</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 col-sm-12">
                <div class="footlinks">
                  <ul>
                    <li>Software</li>
                    <li>Billing Software</li>
                    <li>Accounting Software</li>
                    <li>Inventory Software</li>
                    <li>Invoicing Software</li>
                    <li>Business Management Software</li>
                    <li>Sitemap</li>
                  </ul>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-4 col-sm-12">

                <ul>
                  <li class="footrhead">
                    <b>Software</b>
                  </li>
                  <li>Logo Maker</li>
                  <li>GST Calculator</li>
                  <li>Invoice Generator</li>
                  <li>Quotation Maker</li>
                  <li>Proforma Invoice Generator</li>
                  <li>Purchase Order Generator</li>
                  <li>Receipt Maker</li>
                  <li>Depreciation Calculator</li>
                  <li>Straight Line Depreciation Calculator</li>
                  <li>QR Code Generator</li>
                  <li>Online Barcode Generator</li>
                  <li>QR code scanner from Image</li>
                  <li>Online QR code scanner Camera</li>
                  <li>Business Card Maker</li>
                  <li>Online Barcode Scanner</li>
                </ul>


              </div>
              <div class="col-md-4 col-sm-12">
                <ul>
                  <li class="footrhead">
                    <b>Software</b>
                  </li>
                  <li>Invoice Formats</li>
                  <li>Quotation Format</li>
                  <li>Balance Sheet Formats</li>
                  <li>BillBook Formats</li>
                  <li>Receipt Formats</li>
                  <li>Credit Note Formats</li>
                  <li>Debit Note Formats</li>
                  <li>Sales Report Format</li>
                  <li>Estimate Format</li>
                  <li>Delivery Challan Format</li>
                  <li>Cash Flow Statement Format</li>
                  <li>Voucher Formats</li>
                  <li>Challan Format</li>
                  <li>Work Order Format</li>
                  <li>Reconciliation Format</li>
                  <li>Bill of Exchange</li>
                  <li>Income Statement</li>
                </ul>

              </div>
              <div class="col-md-4 col-sm-12">
                <div class="row">
                  <div class="col-md-12">
                    <ul>
                      <li class="footrhead">
                        <b>Software</b>
                      </li>
                      <li class="secondfoothead">
                        <b>Address</b>
                      </li>
                      <li> 24th 1,2 & 3rd Floor, 150/2 Enzyme Diamond</li>
                      <li> 24th 1,2 & 3rd Floor, 150/2 Enzyme Diamond</li>
                      <li> 24th 1,2 & 3rd Floor, 150/2 Enzyme Diamond</li>
                    </ul>
                  </div>

                  <div class="col-md-12">
                    <ul>
                      <li class="secondfoothead">
                        <b>Address</b>
                      </li>
                      <li> 1234567890</li>
                      <li> 1234567890</li>

                    </ul>
                  </div>


                  <div class="col-md-12">
                    <ul>
                      <li class="secondfoothead">
                        <b>Address</b>
                      </li>
                      <li> email@gmail.com</li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>


        <hr class="horizontal">


        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-9">
            <p class="footrcopyryt">
              Copyright © 2023 Simply Gnoin Pvt. Ltd.<sup>TM</sup>
            </p>
          </div>


          <div class="col-sm-12 col-md-12 col-lg-3 d-flex social-links-wrapper">
            <a href="#" class="text-decoration-none">
              <div>
                <img src="../resource/images/logo/social/youtube.svg">
              </div>
            </a>
            <a class="text-decoration-none" href="#">
              <div>
                <img src="../resource/images/logo/social/instagram.svg">
              </div>
            </a>
            <a href="#">
              <div>
                <img src="../resource/images/logo/social/facebook.svg">
              </div>
            </a>
            <a class="text-decoration-none" href="#">
              <div>
                <img src="../resource/images/logo/social/twitter.svg">
              </div>
            </a>
            <a class="text-decoration-none" href="#">
              <div>
                <img src="../resource/images/logo/social/linkedin.svg">
              </div>
            </a>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <!-------------------------------------------FOOTER SECTION ENDS----------------------------------------->















  <!--Bootstrap js CDN-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>