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
  <title>AboutUs</title>

  <!-- Favicon - Small icon displayed in the browser tab -->
  <link rel="icon" href="../resource/images/favicon/favicon.png" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>


  <!-------------------------------------------HEADER SECTION START----------------------------------------->
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
  <!-------------------------------------------HEADER SECTION END----------------------------------------->

  <!-------------------------------------------GST BILLING SECTION STARTS----------------------------------------->
  <section id="hero" class="bg-white">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 mt-5">
          <h1 class="about-us-head">GST Billing App</h1>


          <div class="mobile-hero-img d-none d-md-block d-lg-block">
            <a href=""><img src="../resource/images/banner/desktop-down.webp" class="w-50" alt="GST Billing App"
                width="100%" height="100%"></a>

          </div>
          <div class="desktop-download mx-auto mx-lg-0">
            <a class="d-none d-lg-none" href="#">
              <img src="../resource/images/banner/desktop-down.webp" alt="Desktop download icon">
            </a>
            <a class="d-lg-none" href="https://billing.vyaparapp.in/Vyapar-Install" target="_blank">
              <img src="../resource/images/banner/mobile-down.webp" alt="Mobile download icon" width="100%"
                height="100%">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------------------------------------------GST BILLING SECTION ENDS----------------------------------------->


  <!-------------------------------------------BUSINESS ACCOUNTING SECTION STARTS----------------------------------------->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="gstbillng">
          <img src="../resource/images/About_Us/mobile-hand.webp" alt="" class="img-fluid">
        </div>
      </div>

      <div class="col-md-8 col-sm-12">
        <div class="gstbillingtext">
          <p>
            Vyapar is a FREE Business Accounting Software built for Indian small businesses to deal with
            invoicing, inventory, accounting needs, and much more! The goal is to make a businessman’s daily
            routine less tiring and let them focus more on growing their business, less on paperwork.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------------BUSINESS ACCOUNTING SECTION ENDS----------------------------------------->


  <!-------------------------------------------RIGHT TECHNOLOGY SECTION STARTS----------------------------------------->
  <section class="adopt-technology">
    <div class="container">
      <div>
        <h2 class="adopt-tech-head text-center text-dark">Adopt Right Technology for your Business</h2>
        <div class="adopt-tech-feature">
          <div class="col-md-4 px-0 px-lg-3">
            <div class="adot-technology">
              <img src="../resource/images/About_Us/download.webp" alt="Download image" width="28%" height="32%">
              <p class="pt-2 pb-0 mb-0 fs5">Downloads</p>
              <p class="pb-0 m-0 fs4 font-weight-bold">10M+</p>
            </div>
          </div>
          <div class="col-md-4 px-0 px-lg-3">
            <div class="adot-technology">
              <img src="../resource/images/About_Us/rating.webp" alt="Play store ratings" width="28%" height="32%">
              <p class="pt-2 pb-0 mb-0 fs5">Play Store Ratings</p>
              <p class="pb-0 m-0 fs4 font-weight-bold">4.7 out of 5 Stars</p>
            </div>
          </div>
          <div class="col-md-4 px-0 px-lg-3">
            <div class="adot-technology">
              <img src="../resource/images/About_Us/indian-product.webp" alt="Indian product" width="28%" height="32%">
              <p class="pt-2 pb-0 mb-0 fs5">Made in</p>
              <p class="pb-0 m-0 fs4 font-weight-bold">India</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------------------------------------------RIGHT TECHNOLOGY SECTION ENDS----------------------------------------->


  <!-------------------------------------------SMALL/MEDIUM SECTION STARTS----------------------------------------->
  <div class="container mt-6rem">
    <div class="small-medium-business d-lg-flex">
      <div class="col-12 col-lg-6 small-medium-img">
        <h2 class="small-medium-head d-block d-lg-none p-3">Small/Medium Business (SME)</h2>
        <img src="../resource/images/About_Us/small-midium.webp" alt="Small/Medium Business" class="img-fluid">
      </div>
      <div class="small-medium-para col-lg-5">
        <h2 class="small-medium-head d-none d-lg-block px-lg-3">Small/Medium Business (SME)</h2>
        <p class="small-medium-paragraph px-0 py-3 px-lg-3">
          Even today, <strong>70% SMEs</strong> in India still create bills on paper. Being that, most of
          their productive time is consumed in making manual entries and calculations. When small things go
          wrong, the entire business goes down, simply because there is no place to fall back. Not having the
          resources can really wear out the business owner driving them away from doing what matters most.
          <strong>Small Business Accounting Software needs a Digital Upgrade</strong>. An upgrade that is
          simple yet efficient. We are trying to bring in a simpler solution that works for them and hence
          VYAPAR!
        </p>
      </div>
    </div>
  </div>
  <!-------------------------------------------SMALL/MEDIUM SECTION ENDS----------------------------------------->



  <!-------------------------------------------SMALL/MEDIUM FOUNDER SECTION STARTS----------------------------------------->
  <div class="container pt-5 mt-6rem">
    <div class="small-medium-business d-lg-flex">
      <div class="col-12 col-lg-5 d-block d-lg-none small-medium-img">
        <img src="../resource/images/About_Us/founder-img.webp" alt="Founder" width="100%" height="100%"
          class="small-medium-img-src">
      </div>
      <div class="small-medium-para col-lg-5">
        <p class="small-medium-paragraph px-0 px-lg-3 py-lg-3 my-lg-4">
          "We are talking about improving the life of a segment that is the largest in our nation, i.e ‘Small
          Business Sector’ the heartbeat of our economy. One of the major aspect holding down the small and
          medium enterprise (SME) sector is that they hardly have any access to proper technology. Easing this
          situation will go a long way in nurturing and sustaining SMEs. To let India emerge as one of the
          brightest economic spots in the coming years, businesses should focus on ways to make cash rather
          than stuck up in counting cash. Vyapar basically helps them do business accounting easier with the
          modern digital way!"
        </p>
      </div>
      <div class="col-12 col-lg-6 d-none d-lg-block small-medium-img">
        <img src="../resource/images/About_Us/founder-img.webp" alt="" width="100%" height="100%"
          class="small-medium-img-src">
      </div>
    </div>
  </div>
  <!-------------------------------------------SMALL/MEDIUM FOUNDER SECTION ENDS----------------------------------------->

  <!-------------------------------------------BUSINESS ACCOUNTING SECTION STARTS----------------------------------------->
  <section class="business-accounting mt-6rem">
    <div class="container">
      <div class="d-lg-flex">
        <div class="col-lg-6 col-sm-12 px-0 mx-auto">
          <div class="business-accounting-section">
            <div class="col-6 pe-2 pe-lg-3 ps-0">
              <div class="business-account-feature fixed-left-border">
                <div class="business-feature-img">
                  <img src="../resource/images/About_Us/window.webp" alt="Platforms android &amp; windows" width="30%"
                    height="100%" class="platforms-feature">
                </div>
                <p class="mt-2 pb-0 mb-0 accounting-higlight">Platforms</p>
                <p class="p-0 m-0 accounting-feature-higlight"><strong>Android &amp; Windows</strong>
                </p>
              </div>
            </div>
            <div class="col-6 pl-2 pl-lg-3 pe-0">
              <div class="business-account-feature fixed-right-border">
                <div class="business-feature-img">
                  <img src="../resource/images/About_Us/phone.webp" alt="100% free for mobile user" width="9%"
                    height="7%" class="mobile-feature">
                </div>
                <p class="mt-2 pb-0 mb-0 accounting-higlight">Mobile</p>
                <p class="p-0 m-0 accounting-feature-higlight"><strong>100% FREE</strong></p>
              </div>
            </div>
          </div>
          <div class="business-accounting-section pt-0">
            <div class="col-6 pe-2 pe-lg-3 ps-0 pt-0 mt-0">
              <div class="business-account-feature fixed-left-border">
                <div class="business-feature-img">
                  <img src="../resource/images/About_Us/language.webp" alt="Language supported in vyapar app"
                    width="15%" height="100%" class="language-feature">
                </div>
                <p class="mt-2 pb-0 mb-0 accounting-higlight">Language</p>
                <p class="p-0 m-0 accounting-feature-higlight"><strong>English, Hindi</strong></p>
              </div>
            </div>
            <div class="col-6 ps-2 ps-lg-3 pe-0 pt-0 mt-0">
              <div class="business-account-feature fixed-right-border">
                <div class="business-feature-img mx-auto">
                  <img src="../resource/images/About_Us/device.webp" alt="Multiple device support" width="30%"
                    height="100%" class="device-feature">
                </div>
                <p class="mt-2 pb-0 mb-0 accounting-higlight">Device</p>
                <p class="p-0 m-0 accounting-feature-higlight"><strong>Mobile, Desktop, Tablet</strong>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12 mx-auto px-0 px-lg-3 py-0 accounting-feature-para">
          <p>
            <strong>A Business Accounting App</strong> like Vyapar (available both as Android/Desktop App)
            most importantly sets up the business financial data at all times 100% accurately. It works
            offline,
            helping one use it without being connected to unreliable internet. Vyapar App paints the picture
            of
            what they own (assets), how much they owe (liabilities) and what are their business values
            (equity).
            It serves as a basis for proper planning of the business accounting activities.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-------------------------------------------BUSINESS ACCOUNTING SECTION ENDS----------------------------------------->



  <!-------------------------------------------BUSINESSMAN EFFORTLESSLY SECTION STARTS----------------------------------------->
  <div class="container py-5 mt-6rem">
    <div>
      <h2 class="adopt-tech-head text-center text-dark">With Vyapar, a Businessman can effortlessly</h2>
      <div class="gnoin-effortlessly">
        <div class="col-lg-6 pt-5 d-block d-lg-none">
          <img src="../resource/images/About_Us/effortlessly.webp" alt="With Vyapar, a Businessman can effortlessly"
            height="100%" width="100%">
        </div>
        <div class="col-12 col-lg-6 pt-5 px-1 col-md-11 mx-auto">
          <ul class="col-11 col-md-12 mx-auto">
            <li>Become <strong>GST compatible</strong>.</li>
            <li>Manage all parties in one single place and market business much easily.</li>
            <li>View how business is performing instantly.</li>
            <li>Create, print/share <strong>customized invoices</strong>.</li>
            <li>Set up “Auto Backup” and secure his business accounting data against accidental data loss.
            </li>
            <li>Expired items can be easily selected for upcoming sale by simply tracking individual units
              of the item by batch numbers.</li>
            <li>Set automatic payment reminders.</li>
            <li>Do business accounting software offline without internet.</li>
          </ul>
        </div>
        <div class="col-lg-6 pt-5 d-none d-lg-block col-md-11 mx-auto">
          <img src="../resource/images/About_Us/effortlessly.webp" alt="With Vyapar,Businessman can effortlessly"
            height="100%" width="100%">
        </div>
      </div>
    </div>
  </div>
  <!-------------------------------------------BUSINESSMAN EFFORTLESSLY SECTION ENDS----------------------------------------->


  <!-------------------------------------------BUSINESSMAN RECOGNITION SECTION STARTS----------------------------------------->
  <section class="aboutus-banner-container mt-6rem">
    <div class="container">
      <div class="aboutus-banner-section">
        <div class="col-lg-6 d-block d-lg-none aboutus-mobile-banner">
          <img src="../resource/images/About_Us/aboutus-banner.webp" alt="Vyapar banner" width="70%" height="70%">
        </div>
        <div class="aboutus-banner-para col-lg-6">
          <p>
            We’re thrilled that <strong>Vyapar</strong> has been recognized by Indian Businessmen who have
            taken
            it up and made it a success as a result of which we’re running towards 10 Million installs on
            play
            store.
            <br><br>
            We hope "Vyapar App" continues to ease the life of our Indian businessmen.
          </p>
          <div class="aboutus-banner-btn mx-auto mx-lg-0">
            <a class="d-none d-lg-block">
              <img src="../resource/images/banner/desktop-down.webp" alt="Download for desktop" width="100%"
                height="100%" class="d-lg-block">
            </a>
            <a class="d-lg-none" href="#" target="_blank">
              <img src="../resource/images/banner/desktop-down.webp" alt="Download for mobile" width="100%"
                height="100%" class="d-lg-block">
            </a>
          </div>
        </div>
        <div class="col-lg-6 m-auto text-right d-none d-lg-block aboutus-desktop-banner">
          <img src="../resource/images/banner/aboutus-banner.webp" alt="Vyapar banner icon" width="65%" height="65%">
        </div>
      </div>
    </div>
  </section>
  <!-------------------------------------------BUSINESSMAN RECOGNITION SECTION ENDS----------------------------------------->


  <!-------------------------------------------FOOTER SECTION STARTS----------------------------------------->
  <footer id="footer" class="mt-6rem">
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
            <a href="../resource/images/logo/social/vyaparsoftware">
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



  <!-------------------------------------------TRY MOBILE APP MODAL STARTS----------------------------------------->
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
                <p>Monitor your business activity from anywhere in the world, sync mobile app with desktop app.</p>
              </div>

              <div class="col-12">
                <div class="mb-3 border border-1">
                  <input type="number" class="form-control " id="exampleFormControlInput1" placeholder="Enter Number">
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
  <!-------------------------------------------TRY MOBILE APP MODAL ENDS----------------------------------------->


















  <!--Bootstrap js-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>