<?php
session_start();
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
$data = isset($_SESSION['data']) ? $_SESSION['data'] : '';
// echo "<script>alert('$data');</script>";
// var_dump($_SESSION['data']);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Page Title -->
  <title>Pricing</title>

  <!-- Favicon - Small icon displayed in the browser tab -->
  <link rel="icon" href="../resource/images/favicon/favicon.png" type="image/x-icon">

  <!-- Bootstrap CSS - A popular CSS framework for building responsive and mobile-first websites -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Custom Stylesheet - Your own CSS styles -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/pricing.css">

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



  <!-------------------------------------------PRICE CARDS SECTION STARTS----------------------------------------->
  <!-- Pricing 1 - Bootstrap Brain Component -->
  <section class="bsb-pricing-1 bg-light py-3 py-md-5 py-xl-8">
    <div class="container">
      <div class="row gy-5 gy-lg-0 align-items-center">
        <div class="col-12 col-lg-4">
          <h2 class="display-5 mb-3 mb-xl-4">Our Pricing</h2>
          <p class="lead mb-4 mb-xl-5">Explore our flexible pricing to find an excellent fit to run your business.</p>
          <a href="#!" class="btn bsb-btn-xl btn-danger rounded-pill">More Plans</a>
        </div>
        <div class="col-12 col-lg-8">
          <div class="row justify-content-xl-end">
            <div class="col-12 col-xl-11">
              <div class="row gy-4 gy-md-0 gx-xxl-5">
                <div class="col-12 col-md-6">
                  <div class="card border-0 border-bottom border-primary shadow-sm">
                    <div class="card-body p-4">
                      <h2 class="h4 mb-2">Silver Plan</h2>
                      <h4 class="display-3 fw-bold  mb-0">Rs 3399</h4>
                      <p class="text-secondary mb-4">1 Year (Desktop+Mobile)</p>
                      <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-check" viewBox="0 0 16 16">
                            <path
                              d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                          </svg>
                          <span><strong></strong>Sync data across devices</span>
                        </li>
                        <li class="list-group-item">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-check" viewBox="0 0 16 16">
                            <path
                              d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                          </svg>
                          <span><strong></strong>Sync data across devices</span>
                        </li>
                        <li class="list-group-item">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-check" viewBox="0 0 16 16">
                            <path
                              d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                          </svg>
                          <span><strong></strong>Sync data across devices</span>
                        </li>
                        <li class="list-group-item">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-x text-danger" viewBox="0 0 16 16">
                            <path
                              d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                          </svg>
                          <span><strong></strong>Sync data across devices</span>
                        </li>
                        <li class="list-group-item">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-x text-danger" viewBox="0 0 16 16">
                            <path
                              d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                          </svg>
                          <span><strong></strong>Sync data across devices</span>
                        </li>
                      </ul>
                      <a href="#!" class="btn bsb-btn-xl btn-danger
                       rounded-pill">Choose Plan</a>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="card card2 border-0 border-bottom border-primary shadow-sm">
                    <div class="card-body p-4">
                      <h2 class="h4 mb-2">Silver Plan</h2>
                      <h4 class="display-3 fw-bold  mb-0">Rs 3399</h4>
                      <p class="text-secondary mb-4">1 Year (Desktop+Mobile)</p>
                      <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-check" viewBox="0 0 16 16">
                            <path
                              d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                          </svg>
                          <span><strong></strong>Sync data across devices</span>
                        </li>
                        <li class="list-group-item">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-check" viewBox="0 0 16 16">
                            <path
                              d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                          </svg>
                          <span><strong></strong>Sync data across devices</span>
                        </li>
                        <li class="list-group-item">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-check" viewBox="0 0 16 16">
                            <path
                              d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                          </svg>
                          <span><strong></strong>Sync data across devices</span>
                        </li>
                        <li class="list-group-item">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-x text-danger" viewBox="0 0 16 16">
                            <path
                              d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                          </svg>
                          <span><strong></strong>Sync data across devices</span>
                        </li>
                        <li class="list-group-item">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-x text-danger" viewBox="0 0 16 16">
                            <path
                              d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                          </svg>
                          <span><strong></strong>Sync data across devices</span>
                        </li>
                      </ul>
                      <a href="#!" class="btn bsb-btn-xl btn-danger
                       rounded-pill">Choose Plan</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-------------------------------------------PRICE CARDS SECTION ENDS----------------------------------------->



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

  <!-------------------------------------------TRY MOBILE APP SECTION ENDS----------------------------------------->




  <!--Bootstrap js CDN-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>