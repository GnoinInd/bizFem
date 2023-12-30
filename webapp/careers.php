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
    <title>Careers</title>

    <!-- Favicon - Small icon displayed in the browser tab -->
    <link rel="icon" href="../resource/images/favicon/favicon.png" type="image/x-icon">

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
    <!-------------------------------------------HEADER SECTION ENDS----------------------------------------->


    <!-------------------------------------------WORK WITH US SECTION STARTS----------------------------------------->
    <div class="container-fluid sectionbgcurve ">
        <div class="container career ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-6 col-sm-12">
                    <h1>Work With Us</h1>
                    <p>Join our teams and have the freedom to do your best work. We are building a culture with amazing
                        people like you at its centre. Your work here will help millions of small businesses succeed &
                        grow</p>

                    <div class="careerbtn">
                        <a href="">Check Open Positions</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 pt-sm-4 pt-sm-5 pt-2">
                    <div class="row ">
                        <div class="col">
                            <div class="row">
                                <div class="col-12">
                                    <div class="carredheroimg1 text-end">
                                        <img src="../resource/images/Careers/career-hero-1.webp" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="carredheroimg2 text-end">
                                        <img src="../resource/images/Careers/career-hero-3.webp" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="carredherogif">
                                <img src="../resource/images/Careers/GIF Vyapar.webp" alt="" class="img-fluid">
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="carredheroimg3 text-center">
                                <img src="../resource/images/Careers/career-hero-4.webp" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="margintopspace ">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="whyworktext">
                        <h2>Why Work With Us</h2>
                        <p>People are at the centre of our culture. We are not in a mad race for unsustainable growth.
                            The org structure is flat where leadership team to interns, everyone freely shares
                            information, knowledge and ideas. You will have ownership and will be empowered to learn
                            fast & grow faster in your roles. Transparency, Trust, Leadership are the pillars of our
                            cultural values.</p>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="whyworkimg">
                        <img src="../resource/images/Careers/why-work-with-us-1.webp" alt="" class="img-fluid">
                    </div>

                </div>
            </div>


            <div class="row mt-6rem">
                <div class="col-md-6 col-sm-12">
                    <div class="whyworkimg">
                        <img src="../resource/images/Careers/why-work-with-us-1.webp" alt="" class="img-fluid">
                    </div>

                </div>


                <div class="col-md-6 col-sm-12">
                    <div class="whyworktext">
                        <h2>Why Work With Us</h2>
                        <p>People are at the centre of our culture. We are not in a mad race for unsustainable growth.
                            The org structure is flat where leadership team to interns, everyone freely shares
                            information, knowledge and ideas. You will have ownership and will be empowered to learn
                            fast & grow faster in your roles. Transparency, Trust, Leadership are the pillars of our
                            cultural values.</p>
                    </div>

                </div>

            </div>


            <div class="row mt-6rem">
                <div class="col-md-6 col-sm-12">
                    <div class="whyworktext">
                        <h2>Why Work With Us</h2>
                        <p>People are at the centre of our culture. We are not in a mad race for unsustainable growth.
                            The org structure is flat where leadership team to interns, everyone freely shares
                            information, knowledge and ideas. You will have ownership and will be empowered to learn
                            fast & grow faster in your roles. Transparency, Trust, Leadership are the pillars of our
                            cultural values.</p>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="whyworkimg">
                        <img src="../resource/images/Careers/why-work-with-us-1.webp" alt="" class="img-fluid">
                    </div>

                </div>
            </div>


            <div class="row mt-6rem">

                <div class="col-md-6 col-sm-12">
                    <div class="whyworkimg">
                        <img src="../resource/images/Careers/why-work-with-us-1.webp" alt="" class="img-fluid">
                    </div>

                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="whyworktext">
                        <h2>Why Work With Us</h2>
                        <p>People are at the centre of our culture. We are not in a mad race for unsustainable growth.
                            The org structure is flat where leadership team to interns, everyone freely shares
                            information, knowledge and ideas. You will have ownership and will be empowered to learn
                            fast & grow faster in your roles. Transparency, Trust, Leadership are the pillars of our
                            cultural values.</p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!-------------------------------------------WORK WITH US SECTION ENDS----------------------------------------->


    <!-------------------------------------------PERKS SECTION STARTS----------------------------------------->

    <div class="container-fluid perks mt-6rem">
        <div class="container  mt-5">
            <div class="row">
                <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                    <div class="perksimg">
                        <img src="../resource/images/Careers/perks-2.webp" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                    <div class="perksimg">
                        <img src="../resource/images/Careers/perks-2.webp" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                    <div class="perksimg">
                        <img src="../resource/images/Careers/perks-2.webp" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                    <div class="perksimg">
                        <img src="../resource/images/Careers/perks-2.webp" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                    <div class="perksimg">
                        <img src="../resource/images/Careers/perks-2.webp" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 d-flex justify-content-center">
                    <div class="perksimg">
                        <img src="../resource/images/Careers/perks-2.webp" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------PERKS SECTION ENDS----------------------------------------->


    <!-------------------------------------------IMAGE GALLERY SECTION STARTS----------------------------------------->

    <div class="container-fluid mt-6rem">
        <div class="row">
            <div class="col">
                <div class="imggallery">
                    <img src="images/careerimages/careers-pictures-1.webp" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col">
                <div class="imggallery">
                    <img src="images/careerimages/careers-pictures-1.webp" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col">
                <div class="imggallery">
                    <img src="images/careerimages/careers-pictures-1.webp" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <!-------------------------------------------IMAGE GALLERY SECTION ENDS----------------------------------------->

    <!-------------------------------------------GREAT WORKPLACES SECTION STARTS----------------------------------------->
    <div class="container mt-6rem">
        <div class="row">
            <div class="col-12">
                <div class="temdeservhead text-center">
                    <h2>
                        Great Teams deserve Great Workplaces!
                    </h2>
                    <p>Check out our Bangalore Office. Collaborate, Unwind & unlock the full potential of collective
                        growth
                    </p>
                </div>
            </div>

            <div class="col-12">
                <div class="teamdesimg p-5">
                    <div class="card h-100 border border-0" style="width: 100%;">
                        <div class="embed-responsive m-auto embed-responsive-16by9">
                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"
                                class="random_video embed-responsive-item" height="480" width="640"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------GREAT WORKPLACES SECTION ENDS----------------------------------------->


    <!-------------------------------------------OPEN POSITION SECTION STARTS----------------------------------------->
    <div class="openposition pt-5 mt-6rem">

        <div class="container">
            <div class="row">
                <div class="col-lg colsm-12">
                    <div class="input-group mb-3 flex-nowrap">
                        <span class="input-group-text" id="basic-addon1"> <svg xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg> </span>
                        <input type="text" class="form-control " placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-lg-2 colsm-12">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2 colsm-12">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-lg-2 colsm-12">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>


                <div class="col-md-12 mt-5">
                    <div class="jobheading">
                        <h2>Customer Experience</h2>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 mt-5">
                    <div class="jobheading">
                        <h2>Customer Experience</h2>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 mt-5">
                    <div class="jobheading">
                        <h2>Customer Experience</h2>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-12 mt-5">
                    <div class="jobheading">
                        <h2>field Sales</h2>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 mt-5">
                    <div class="jobheading">
                        <h2>field Sales</h2>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-12 mt-5">
                    <div class="jobheading">
                        <h2>field Sales</h2>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-md-12 mt-5">
                    <div class="jobheading">
                        <h2>field Sales</h2>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5">
                    <div class="jobheading">
                        <h2>field Sales</h2>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mt-5">
                    <div class="jobheading">
                        <h2>field Sales</h2>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <div class="jobcardbox p-3">
                        <h3>Customer Support Executive</h3>

                        <div class="d-flex text-secondary align-items-center mt-auto">
                            <div class="d-flex align-items-center flex-wrap"><span
                                    class="font-large text-capitalize text-nowrap text-truncate-1"
                                    title="Bangalore">Bangalore</span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span
                                    class="font-large text-capitalize text-truncate-1" title="0">0 </span>
                                <div class="dot dot-xs bg-slate-900 mx-2"></div><span>Full Time</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="horizontal"></div>


        </div>
    </div>

    <!-------------------------------------------OPEN POSITION SECTION ENDS----------------------------------------->




    <!-------------------------------------------FOOTER SECTION STARTS----------------------------------------->
    <footer id="footerCareer" class="pt-5 mt-6rem">
        <div class="container-fluid">
            <div class="container">

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="weblogo">
                                    <img src="images/logo1.png" alt="" class="img-fluid">
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
    <!-------------------------------------------TRY MOBILE APP SECTION ENDS----------------------------------------->
















    <!--Bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>