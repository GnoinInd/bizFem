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
  <title>Faq</title>

  <!--Bootstrap CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!--Custom CSS-->
  <link rel="stylesheet" href="/css/style.css">
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
  <!-------------------------------------------HEADER SECTION END----------------------------------------->

  <!-------------------------------------------FAQ SECTION STARTS----------------------------------------->
  <section class="container-fluid faqsection">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12  ">
          <img src="../resource/images/faq/Group195.svg" title="Frequently Asked Questions"
            alt="Frequently Asked Questions" class="img-fluid">
        </div>
        <div class="col-md-9 col-sm-12 d-flex align-items-center ">
          <h1 class="heading">Frequently Asked Questions</h1>
        </div>
      </div>
    </div>



  </section>


  <div class="container mt-5 collection-item">
    <div class="row">
      <div class="col-md-4 col-sm-12">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="btn allcategory mb-2" id="#" data-bs-toggle="#" data-bs-target="#" type="button" role="tab"
            aria-controls="#" aria-selected="true">All Category</button>
          <button class="nav-link active  mb-2" id="v-pills-home-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home"
            aria-selected="true">Pricing</button>
          <button class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
            type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">PRODUCT(APP) RELATED</button>

          <button class="nav-link mb-2" id="v-pills-messages-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
            aria-selected="false">LICENSE RELATED</button>
          <button class="nav-link mb-2" id="v-pills-settings-tab" data-bs-toggle="pill"
            data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
            aria-selected="false">DISTRIBUTOR</button>
        </div>
      </div>

      <div class="col-md-8 col-sm-12">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
            tabindex="0">

            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Q. How to change the registered mobile/email through which the license has been generated?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    First you need to probe the customer whether he has the current registered mobile/email . If he has
                    registered mobile number then you have to inform him to go to our website and then update the
                    profile. Else it cannot be changed but with the help of payment verification we can help the
                    customer to attach license.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Q. How to change terms and conditions in Vyapar app?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Go to Vyapar app>>in the left side Click on “Settings”>> Go to “print settings”>> Scroll down a
                    little you will get a option under “Footer” heading “Terms and conditions”>>Update the terms and
                    conditions as per the transaction type” >>after updating click on “Save and Close”
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Q. How to add signature in Vyapar app?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Go to Vyapar app>> Click on “My company”>>In the drop down click on “More information”>> down below
                    you will get the option to add your signature>> after adding click on “save”
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab"
            tabindex="0">

            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Q. How to change the registered mobile/email through which the license has been generated?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    First you need to probe the customer whether he has the current registered mobile/email . If he has
                    registered mobile number then you have to inform him to go to our website and then update the
                    profile. Else it cannot be changed but with the help of payment verification we can help the
                    customer to attach license.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Q. How to change terms and conditions in Vyapar app?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    First you need to probe the customer whether he has the current registered mobile/email . If he has
                    registered mobile number then you have to inform him to go to our website and then update the
                    profile. Else it cannot be changed but with the help of payment verification we can help the
                    customer to attach license.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Q. How to add signature in Vyapar app?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    First you need to probe the customer whether he has the current registered mobile/email . If he has
                    registered mobile number then you have to inform him to go to our website and then update the
                    profile. Else it cannot be changed but with the help of payment verification we can help the
                    customer to attach license.
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
            tabindex="0">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Q. How to change the registered mobile/email through which the license has been generated?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    First you need to probe the customer whether he has the current registered mobile/email . If he has
                    registered mobile number then you have to inform him to go to our website and then update the
                    profile. Else it cannot be changed but with the help of payment verification we can help the
                    customer to attach license.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Q. How to change terms and conditions in Vyapar app?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    First you need to probe the customer whether he has the current registered mobile/email . If he has
                    registered mobile number then you have to inform him to go to our website and then update the
                    profile. Else it cannot be changed but with the help of payment verification we can help the
                    customer to attach license.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Q. How to add signature in Vyapar app?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    First you need to probe the customer whether he has the current registered mobile/email . If he has
                    registered mobile number then you have to inform him to go to our website and then update the
                    profile. Else it cannot be changed but with the help of payment verification we can help the
                    customer to attach license.
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"
            tabindex="0">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Q. How to change the registered mobile/email through which the license has been generated?
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    First you need to probe the customer whether he has the current registered mobile/email . If he has
                    registered mobile number then you have to inform him to go to our website and then update the
                    profile. Else it cannot be changed but with the help of payment verification we can help the
                    customer to attach license.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Q. How to change terms and conditions in Vyapar app?
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    First you need to probe the customer whether he has the current registered mobile/email . If he has
                    registered mobile number then you have to inform him to go to our website and then update the
                    profile. Else it cannot be changed but with the help of payment verification we can help the
                    customer to attach license.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Q. How to add signature in Vyapar app?
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    First you need to probe the customer whether he has the current registered mobile/email . If he has
                    registered mobile number then you have to inform him to go to our website and then update the
                    profile. Else it cannot be changed but with the help of payment verification we can help the
                    customer to attach license.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-------------------------------------------FAQ SECTION ENDS----------------------------------------->


  <!--Bootstrap JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>