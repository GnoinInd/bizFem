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

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="../slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css">

    <!-- Custom CSS (style.css) -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Favicon - Small icon displayed in the browser tab -->
    <link rel="icon" href="../resource/images/favicon/favicon.png" type="image/x-icon">

    <!-- International Telephone Input CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />

    <!-- International Telephone Input JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <!-- Another Font Awesome CSS (may be redundant) -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Star Rating CSS -->
    <link rel="stylesheet" href="../css/star-rating.css" media="all" type="text/css" />

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <!-- Star Rating JS -->
    <script src="../js/star-rating.js" type="text/javascript"></script>

    <!-- Custom JS -->
    <script src="../js/custom.js"></script>




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
    <div class="container  mt-5">
        <div class="row">
            <div class="col-md-12 ">
                <div class="row">
                    <div class="col-md-6 col-sm-12 columncenter">
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
    <!-------------------------------------------GST BILLING SECTION ENDS----------------------------------------->

    <!-------------------------------------------HAPPY CUSTOMERS SECTION STARTS----------------------------------------->
    <div class="container-fluid aboutsection mt-6rem">
        <div class="container">
            <div class="col-md-12 mt-6rem">
                <div class="aboutsection  py-5 px-3">
                    <div class="row">
                        <div class="col">
                            <div class="abouticons">
                                <img src="../resource/images/logo/customer/happy_customer.webp" alt="">
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
                                <img src="../resource/images/logo/customer/phone_icon.webp" alt="">
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
                                <img src="../resource/images/logo/customer/gplay_store.webp" alt="">
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
                                <img src="../resource/images/logo/customer/multi_device.webp" alt="">
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
                                <img src="../resource/images/logo/customer/multi_user.webp" alt="">
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

    <!-------------------------------------------CREATE GST BILLS FOR CUSTOMERS STARTS----------------------------------------->
    <div class="container mt-6rem">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-6 col-sm-12 columncenter">
                        <div class="imgcontainer">
                            <img src="../resource/images/index/make_gst_bills_and_share_with_your_customers (1).webp" alt="" class="img-fluid">
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-12 columncenter">
                        <div class="centered-content">
                            <div class="textcont">
                                <h1 class="textheroheading">Create GST Bills for customers and share them online</h1>
                            </div>

                            <div class="herodecri">
                                <p>Vyapar billing software helps you set up a professional brand identity with useful GST</p>
                            </div>

                            <div class="downldbtn">
                                <a href="" class="btn btn-danger">+Read more</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



            <div class="col-md-12 mt-6rem">
                <div class="row">
                    <div class="col-md-6 col-sm-12 columncenter">
                        <div class="centered-content">
                            <div class="textcont">
                                <h1 class="textheroheading">Manage Inventory Seamlessly</h1>
                            </div>

                            <div class="herodecri">
                                <p>Vyapar brings the finest inventory management software with incredibly effective</p>
                            </div>

                            <div class="downldbtn">
                                <a href="" class="btn btn-danger">+Read more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12 columncenter">
                        <div class="imgcontainer">
                            <img src="../resource/images/index/check_inventory_instantly.webp" alt="" class="img-fluid">
                        </div>
                    </div>


                </div>
            </div>



            <div class="col-md-12 mt-6rem">
                <div class="row">

                    <div class="col-md-6 col-sm-12 columncenter">
                        <div class="imgcontainer">
                            <img src="../resource/images/index/remind_to_recover_payments.webp" alt="" class="img-fluid">
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-12 columncenter">
                        <div class="centered-content">
                            <div class="textcont">
                                <h1 class="textheroheading">Send Payment Reminders to Recover Dues</h1>
                            </div>

                            <div class="herodecri">
                                <p>Vyapar accounting and billing software help SMEs ensure timely payments and maintain</p>
                            </div>

                            <div class="downldbtn">
                                <a href="" class="btn btn-danger">+Read more</a>
                            </div>
                        </div>
                    </div>




                </div>
            </div>



            <div class="col-md-12 mt-6rem">
                <div class="row">
                    <div class="col-md-6 col-sm-12 columncenter">
                        <div class="centered-content">
                            <div class="textcont">
                                <h1 class="textheroheading">Send Payment Reminders to Recover Dues</h1>
                            </div>

                            <div class="herodecri">
                                <p>Vyapar accounting and billing software help SMEs ensure timely payments and maintain</p>
                            </div>

                            <div class="downldbtn">
                                <a href="" class="btn btn-danger">+Read more</a>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-12 columncenter">
                        <div class="imgcontainer">
                            <img src="../resource/images/index/gst_filing_made_simplerAndFaster.webp" alt="" class="img-fluid">
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------CREATE GST BILLS FOR CUSTOMERS ENDS----------------------------------------->


    <!-------------------------------------------FEATURES OF GST BILLING STARTS----------------------------------------->
    <div class="container-fluid bg-fafafa mt-6rem">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="textconth1 ">
                        <h1 class="textheroheading text-center">Features of GST Billing and Accounting Software</h1>
                    </div>
                </div>
                <div class="col-6">
                    <section id="features-wrapper">
                        <div class="d-flex align-items-start  ">
                            <div id='features-headers-list' class="nav flex-column nav-pills me-3 " style="height: 500px; overflow-y: scroll; width: 100%; flex-wrap: nowrap !important;" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"> <img src="../resource/images/index/Send Estimate.webp" alt="" class="img-fluid featuresicon"> Send Estimate &
                                    Quotations</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="../resource/images/index/Send Estimate.webp" alt="" class="img-fluid featuresicon"> Track Orders</button>
                                <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false"><img src="../resource/images/index/Send Estimate.webp" alt="" class="img-fluid featuresicon"> Choose Themes</button>
                                <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><img src="../resource/images/index/Send Estimate.webp" alt="" class="img-fluid featuresicon"> Record Expenses</button>
                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><img src="../resource/images/index/Send Estimate.webp" alt="" class="img-fluid featuresicon"> Receivables and Payable</button>
                                <button class="nav-link " id="v-pills-home-tab0" data-bs-toggle="pill" data-bs-target="#v-pills-home0" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><img src="../resource/images/index/Send Estimate.webp" alt="" class="img-fluid featuresicon"> Delivery
                                    Challan</button>
                                <button class="nav-link" id="v-pills-profile-tab1" data-bs-toggle="pill" data-bs-target="#v-pills-profile1" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><img src="../resource/images/index/Send Estimate.webp" alt="" class="img-fluid featuresicon"> Bank Accounts</button>
                                <button class="nav-link" id="v-pills-disabled-tab2" data-bs-toggle="pill" data-bs-target="#v-pills-disabled2" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false"><img src="../resource/images/index/Send Estimate.webp" alt="" class="img-fluid featuresicon"> Business Reports</button>
                                <button class="nav-link" id="v-pills-messages-tab3" data-bs-toggle="pill" data-bs-target="#v-pills-messages3" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><img src="../resource/images/index/Send Estimate.webp" alt="" class="img-fluid featuresicon"> GST Invoicing / Billing</button>
                                <button class="nav-link" id="v-pills-settings-tab4" data-bs-toggle="pill" data-bs-target="#v-pills-settings4" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><img src="../resource/images/index/Send Estimate.webp" alt="" class="img-fluid featuresicon"> Automatic data backup</button>




                            </div>

                        </div>
                    </section>
                </div>
                <div class="col-6">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">

                            <h3>Send Estimate & Quotations</h3>
                            <p>


                                Using our free billing software, you can easily create useful documents. It includes quotations,

                                estimates,
                                and accurate GST invoices. Inbuilt features in the GST billing app allow you to send quotes/estimates to
                                customers anytime. You can send them directly through WhatsApp, email, SMS, or by printing.<br><br>

                                Vyapar billing software provides professional outlook with instant estimates and quotes. The Vyapar app
                                helps automate most processes. It makes the quotes and estimates error-free. Additionally, you can set
                                up
                                a
                                due date for tracking invoices seamlessly.<br><br>

                                Further, you can convert your estimates and quotations into sale invoices anytime. All you need is the
                                Vyapar software for billing and its done in a few clicks. Vyapar free billing software offers the
                                business
                                a
                                complete option for quickly saving more time getting instant quotes. Using the accounting software, you
                                can
                                manage your business with higher productivity.<br><br>

                                The billing app brings a professionalism for your valued customers to attract them back. Choosing
                                advanced
                                Software for GST billing is one of the best investments for your business. Our Billing Software helps
                                simplifies estimates and quotations.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">

                            <h3>Track Orders</h3>
                            <p>



                                Using our advanced GST Compliant Software for Billing makes creating sales or purchase orders easier. It
                                helps set up a due date for tracking order seamlessly. With this GST Accounting and Billing Software, we
                                get
                                an auto stock adjustment. It help ensure the availability of inventory items.

                                Having tracking features is pretty helpful for fulfilling the orders timely. Tracking avoid unnecessary
                                losses. You can save time with tracking and use it to perform other day to day tasks. It enables better
                                customer satisfaction. You can attach tax invoice with order and track if payment is due using the app.

                                Using our GST billing app, it is easier to improve your purchase/sale order formats. As Vyapar App
                                provides
                                various options, including Word, PDF, and Excel. Using our GST invoicing software, you can save labour
                                cost
                                and efforts. You can do save time by converting orders to sale/purchase invoices using automation.

                                You can track open, close, and overdue orders using our free billing app. It makes it a perfect choice
                                for
                                businesses. Using these features makes the entire tracking process seamless for businesses. In short, it
                                helps improve the performance of employees.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">

                            <h3>Choose Themes</h3>
                            <p>

                                Maintaining and sharing professional invoices with your clients can improve your brand’s Identity. The
                                GST
                                Billing App has two invoice themes for thermal printers. Also, it has twelve invoice themes for regular
                                printers.

                                With this GST invoice software, you can quickly improve the look of your invoice Using available
                                customisation options is seamless. You can neatly prepare the invoice for your client. Business bills
                                generated can better impress a client.

                                The Billing App for GST is the best option for your accounting inventory. It is very easy to handle.
                                Choose
                                from the best GST invoice formats to meet your business requirements. Most businesses choose our free
                                billing software to help present a professional image. It is an ideal way to build a positive brand
                                image.

                                This free billing app is efficient for quickly gaining the highest invoice standard. It provides
                                multiple
                                theme options for thermal and regular printers. GST Invoicing Software is suitable, and all themes are
                                fully
                                customisable. A business can use it for all commercial businesses. The list includes retailers,
                                pharmaceutical businesses, gyms, restaurants, and many other businesses.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <h3> Record Expenses</h3>
                            <p>

                                Tracking and recording all expenses in the business is important for accounting and tax filing. It is
                                easier
                                to follow the money spent and create an accurate report with the GST billing software.

                                Our free billing app is an efficient option for recording expenses. Businesses can easily optimise their
                                business expenditure to save more money. With our free GST software for billing, you record both GST and
                                non-GST expenses.

                                Further, Vyapar billing solutions comes with various benefits over competitors. It help you reduce costs
                                and
                                maximise sales. The free billing software is an efficient option for quickly recording outstanding
                                expenses.
                                It helps in tracking them in future too.

                                Our free mobile app is suitable for growing businesses. It helps keep their finances in check. By
                                recording
                                the expenses using GST software, the company can optimise the expenditure. It helps save money.
                                Moreover,
                                keeping track of costs will help build better strategies. It will result in better profitability of
                                business.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">
                            <h3> Receivables and Payable</h3>
                            <p>

                                A professional,free billing and accounting software lets users keep all the transaction details and
                                track
                                business cash flow seamlessly. Now you have a better way of keeping your transaction details safe.

                                Free GST Invoicing Software allows you to track party-wise receivables and payables. Using the business
                                dashboard in the GST mobile app, you can track the money you ‘have to receive’ and the money you ‘need
                                to
                                pay in the Vyapar app.

                                You can easily track observe who didn’t pay you back. You can set payment reminders to collect dues from
                                these customers on time. You can send free payment reminders to any party via WhatsApp, SMS, and email.
                                You
                                can provide all type of online payment solutions to collect dues seamlessly. Further, it will allow you
                                to
                                save time for your day to day tasks.

                                Also, with the bulk payment reminder feature, you can save time by sending payment reminders to all your
                                customers in bulk at once. The GST Billing and invoicing software perform automated calculations. It
                                help
                                track receivables and payables seamlessly.

                                Using the cash flow management system by Vyapar enables you to avoid taking too much debt and revisit
                                your
                                business plan as it indicates an early sign of issues in cash flow. Further, you can also use the Vyapar
                                billing app to perform party-to-party balance transfers.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-home0" role="tabpanel" aria-labelledby="v-pills-home-tab0" tabindex="0">
                            <h3> Delivery Challan</h3>
                            <p>

                                Get acknowledgement upon delivery with “Delivery Challan” of Vyapar. Create delivery challans and attach
                                them with your consignment using this free GST invoicing app.

                                You can ensure your goods have reached customers safely by tracking delivery challans. Our GST billing
                                software helps you track your consignments easily and help provide instructions if it gets misplaced.
                                Our
                                ultimate free GST Invoicing Software helps manage consignor and consignee details seamlessly.

                                You can include the terms and conditions of the order to avoid disputes and bring more clarity to the
                                scope
                                of the order. This process makes the business run smoothly and is helpful for the customers to get the
                                consignment safely.

                                Converting the delivery challans into bills is also a pretty efficient option as it helps adjust auto
                                stock.
                                Maintain all the records of delivery acknowledgement with the GST billing & Accounting software. It is
                                an
                                easier way of running a business with major productivity goals.

                                You can convert your delivery challans into invoices when the consignment reaches the customer. You can
                                do
                                it using the free billing app by Vyapar. It will allow you to receive payments using multiple payment
                                options. To avoid delayed dues collection, you can offer both offline and online payment solutions
                                through
                                the tax invoice.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile1" role="tabpanel" aria-labelledby="v-pills-profile-tab1" tabindex="0">
                            <h3> Bank Accounts</h3>
                            <p>

                                Businesses can easily add, manage, and track online and offline payments quickly. If they opt for an
                                easy-to-use free GST billing app for mobile, the tasks gets easier. Whether your revenue is from the
                                banks
                                or e-wallets, you can seamlessly enter data into the free billing software.

                                You can send or receive money using bank accounts and perform bank-to-bank transfers for seamless cash
                                flow
                                management. So, it is ideal for businesses with all the cash-ins and cash-outs using the Vyapar
                                invoicing
                                app.

                                A business account in your bank needs to be added with the GST Accounting Software to use the bank
                                accounts
                                feature within the app. You can easily manage credit cards and OD and loan accounts using the Vyapar
                                app.
                                This process is the most suitable option for keeping the complete bank account book without hassle.
                                Further,
                                it allows you to withdraw or deposit money in the bank accounts seamlessly.

                                Free invoicing & accounting software can also be accessed anywhere with internet connectivity from your
                                mobile. Free accounting software by Vyapar helps you adjust the amount manually and manage cheque
                                payments.

                                The Vyapar App has open cheques which allow the user to make a quick deposit or withdraw and close them
                                quickly. Along with many other payment options available in the app, we also allow you to keep track of
                                cheque payments.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-disabled2" role="tabpanel" aria-labelledby="v-pills-disabled-tab2" tabindex="0">
                            <h3>Business Reports</h3>
                            <p>

                                Businesses are required to make informed decisions to ensure a consistent growth trajectory. Use 37+
                                business reports created using our free billing software for all your business requirements.

                                Vyapar accounting software comes with professional balance sheets. Using Vyapar extensively increases
                                your
                                business’s operational efficiency as you can easily export the reports in PDF or Excel.

                                Accounting and management
                                Billing and e-payments
                                GST Reports and taxation


                                Users can easily view and analyse the data instantly using our free GST Invoicing & Accounting Software.
                                You
                                can create graphical reports for tracking sales and expenses using the app. This free software analyses
                                accurate business details, accounts, and many more; it is also an efficient way to quickly analyse the
                                business’s profit. Various reports such as:
                                GSTR 1 format
                                GSTR 3B
                                GST-related reports
                                Balance Sheet
                                Profit & Loss
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages3" role="tabpanel" aria-labelledby="v-pills-messages-tab3" tabindex="0">
                            <h3> GST Invoicing / Billing</h3>
                            <p>

                                Our all-in-one free GST billing software is an excellent addition to your business as it helps you
                                automate
                                your billing requirements. It is pretty efficient in assisting medium and small enterprises to save more
                                time in accounting.

                                With the help of free billing software with GST, business owners could efficiently perform various
                                tasks,
                                including GST return filing, inventory management, invoicing, and billing. Our free accounting app
                                allows
                                businesses to customise the fields per their unique requirements.

                                You can use the app to generate GST invoices for your clients within 20 seconds and print/share them
                                with
                                customers. Bills are mainly recommended in the GST invoice format, and you can create them using ou GST
                                Software for billing.

                                You can use the barcode scanner to speed up your billing process, and shortcut keys can help you do
                                redundant tasks faster. “Bill wise payment” in the Vyapar app is one of the essential features as it is
                                pretty easy to link your payments with your sales invoices.

                                The free GST mobile app creates multiple parties to manage all clients seamlessly. With the help of this
                                feature, it is easier to track all the due dates in the invoice and track old invoices anytime. Vyapar
                                app
                                allows any business to identify’ any overdue payments quickly.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-settings4" role="tabpanel" aria-labelledby="v-pills-settings-tab4" tabindex="0">
                            <h3> Automatic data backup</h3>
                            <p>

                                GST billing & accounting Software is 100% secure, and you can easily store your data accurately. Our
                                free
                                app lets you keep your data secure by creating local, external or online Google Drive backups.

                                You can easily use this GST Invoicing & Accounting Software to recover data quickly. The data is
                                encrypted
                                with added security, and the Vyapar app is the advanced free invoicing & accounting software.

                                Vyapar GST billing software in India comes with a hassle-free backup system with the “auto-backup”
                                feature.
                                After activating this mode on the Vyapar app, an automatic backup is created every day, so getting all
                                your
                                data backup is easier, so you would not lose anything.

                                Most businesses in India have used this free accounting and invoicing software to make the job quick
                                with
                                added data security. The app has an encryption system that allows it to keep the data accessible to the
                                owner only to enhance security further.

                                Anyone in the Vyapar team cannot use your business data, and thus it makes your data secure for future
                                reference. Using the GST billing app, you can create data backups per your requirement and help ensure
                                the
                                security of your data using multiple backup options.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------FEATURES OF GST BILLING ENDS----------------------------------------->





    <!-------------------------------------------BENEFITS OF GST BILLING STARTS----------------------------------------->
    <div class="container gstbenefits mt-6rem">
        <div class="row">
            <div class="col-12">
                <div class="textconth1 ">
                    <h1 class="textheroheading text-center">Benefits of GST Billing Software</h1>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 p-4">
                <div class="row">
                    <div class="col-12">
                        <div class="headingsmall">
                            <h5 class="text-end">Lifetime free basic usage <img src="../resource/images/index/lifetime_free_basic_usage.webp" alt="" class="img-fluid"></h5>
                        </div>
                        <div class="col-12">
                            <div class="gstbenefitstext text-end">
                                Using our free GST accounting and billing software, you can seamlessly create custom invoices.
                                Further, you can manage your dashboard and track inventory items. The free access provides you use
                                many other useful features.
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="gstbnftsreadmore text-end py-3">
                                +Read More
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="headingsmall">
                            <h5 class="text-end">Lifetime free basic usage<img src="../resource/images/index/lifetime_free_basic_usage.webp" alt="" class="img-fluid"></h5>
                        </div>
                        <div class="col-12">
                            <div class="gstbenefitstext text-end">
                                Using our free GST accounting and billing software, you can seamlessly create custom invoices.
                                Further, you can manage your dashboard and track inventory items. The free access provides you use
                                many other useful features.
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="gstbnftsreadmore text-end py-3">
                                +Read More
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="headingsmall">
                            <h5 class="text-end">Lifetime free basic usage<img src="../resource/images/index/lifetime_free_basic_usage.webp" alt="" class="img-fluid"></h5>
                        </div>
                        <div class="col-12">
                            <div class="gstbenefitstext text-end">
                                Using our free GST accounting and billing software, you can seamlessly create custom invoices.
                                Further, you can manage your dashboard and track inventory items. The free access provides you use
                                many other useful features.
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="gstbnftsreadmore text-end py-3">
                                +Read More
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="headingsmall">
                            <h5 class="text-end">Lifetime free basic usage<img src="../resource/images/index/lifetime_free_basic_usage.webp" alt="" class="img-fluid"></h5>
                        </div>
                        <div class="col-12">
                            <div class="gstbenefitstext text-end">
                                Using our free GST accounting and billing software, you can seamlessly create custom invoices.
                                Further, you can manage your dashboard and track inventory items. The free access provides you use
                                many other useful features.
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="gstbnftsreadmore text-end py-3">
                                +Read More
                            </div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="col-md-4 col-sm-12 d-flex justify-content-center align-items-center p-3">
                <div class="midimage">
                    <img src="../resource/images/index/benefits_of_gst_billing_and_invoicing_software.webp" alt="" class="img-fluid">
                </div>
            </div>


            <div class="col-md-4 col-sm-12 p-4">
                <div class="row">
                    <div class="col-12">
                        <div class="headingsmall">
                            <h5 class="text-start"><img src="../resource/images/index/lifetime_free_basic_usage.webp" alt="" class="img-fluid">Lifetime
                                free basic usage</h5>
                        </div>
                        <div class="col-12">
                            <div class="gstbenefitstext text-start">
                                Using our free GST accounting and billing software, you can seamlessly create custom invoices.
                                Further, you can manage your dashboard and track inventory items. The free access provides you use
                                many other useful features.
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="gstbnftsreadmore text-start py-3">
                                +Read More
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="headingsmall">
                            <h5 class="text-start"><img src="../resource/images/index/lifetime_free_basic_usage.webp" alt="" class="img-fluid">Lifetime
                                free basic usage</h5>
                        </div>
                        <div class="col-12">
                            <div class="gstbenefitstext text-start">
                                Using our free GST accounting and billing software, you can seamlessly create custom invoices.
                                Further, you can manage your dashboard and track inventory items. The free access provides you use
                                many other useful features.
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="gstbnftsreadmore text-start py-3">
                                +Read More
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="headingsmall">
                            <h5 class="text-start"><img src="../resource/images/index/lifetime_free_basic_usage.webp" alt="" class="img-fluid">Lifetime
                                free basic usage</h5>
                        </div>
                        <div class="col-12">
                            <div class="gstbenefitstext text-start">
                                Using our free GST accounting and billing software, you can seamlessly create custom invoices.
                                Further, you can manage your dashboard and track inventory items. The free access provides you use
                                many other useful features.
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="gstbnftsreadmore text-start py-3">
                                +Read More
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="headingsmall">
                            <h5 class="text-start"><img src="../resource/images/index/lifetime_free_basic_usage.webp" alt="" class="img-fluid">Lifetime
                                free basic usage</h5>
                        </div>
                        <div class="col-12">
                            <div class="gstbenefitstext text-start">
                                Using our free GST accounting and billing software, you can seamlessly create custom invoices.
                                Further, you can manage your dashboard and track inventory items. The free access provides you use
                                many other useful features.
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="gstbnftsreadmore text-start py-3">
                                +Read More
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------BENEFITS OF GST BILLING ENDS----------------------------------------->


    <!-------------------------------------------BUILT FOR YOUR INDUSTRY SECTION STARTS----------------------------------------->
    <div class="container-fluid mt-6rem">
        <div class="container">
            <div class="row">

                <div class="col-12 builtforyourheading">
                    <h2 class="text-center">Built for your Industry</h2>
                </div>
                <div class="col-12">
                    <section class="multiple-items sliderSlick" style='width: 100% !important ;'>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-4">
                                <div class="slideimg">
                                    <img src="../resource/images/index/Pharmacist-bro.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="sliderheading">Retail Store's</p>
                                <p class="sliderdescription">
                                    Vyapar billing and invoicing software helps retail businesses create professional customer invoices.
                                    It
                                    allows them to present their business information in the invoice. Further, it makes the process
                                    seamless
                                    for a retail buisness owner.
                                    <br><br>
                                    The GST billing app helps small business owners keep track of all the inventory items. They can
                                    include
                                    their price, discounts, taxes, and others, to bill the customers faster. Another benefit is that they
                                    can create custom invoices. It helps them look professional. The business can include all payment
                                    options in the invoice for faster billing.
                                </p>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-4">
                                <div class="slideimg">
                                    <img src="../resource/images/index/Pharmacist-bro.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="sliderheading">Retail Store's</p>
                                <p class="sliderdescription">

                                    Vyapar billing and invoicing software helps retail businesses create professional customer invoices.
                                    It
                                    allows them to present their business information in the invoice. Further, it makes the process
                                    seamless
                                    for a retail buisness owner.
                                    <br><br>
                                    The GST billing app helps small business owners keep track of all the inventory items. They can
                                    include
                                    their price, discounts, taxes, and others, to bill the customers faster. Another benefit is that they
                                    can create custom invoices. It helps them look professional. The business can include all payment
                                    options in the invoice for faster billing.
                                </p>
                            </div>
                        </div>


                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-4">
                                <div class="slideimg">
                                    <img src="../resource/images/index/Pharmacist-bro.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="sliderheading">Retail Store's</p>
                                <p class="sliderdescription">

                                    Vyapar billing and invoicing software helps retail businesses create professional customer invoices.
                                    It
                                    allows them to present their business information in the invoice. Further, it makes the process
                                    seamless
                                    for a retail buisness owner.
                                    <br><br>
                                    The GST billing app helps small business owners keep track of all the inventory items. They can
                                    include
                                    their price, discounts, taxes, and others, to bill the customers faster. Another benefit is that they
                                    can create custom invoices. It helps them look professional. The business can include all payment
                                    options in the invoice for faster billing.
                                </p>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-4">
                                <div class="slideimg">
                                    <img src="../resource/images/index/Pharmacist-bro.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="sliderheading">Retail Store's</p>
                                <p class="sliderdescription">

                                    Vyapar billing and invoicing software helps retail businesses create professional customer invoices.
                                    It
                                    allows them to present their business information in the invoice. Further, it makes the process
                                    seamless
                                    for a retail buisness owner.
                                    <br><br>
                                    The GST billing app helps small business owners keep track of all the inventory items. They can
                                    include
                                    their price, discounts, taxes, and others, to bill the customers faster. Another benefit is that they
                                    can create custom invoices. It helps them look professional. The business can include all payment
                                    options in the invoice for faster billing.
                                </p>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-4">
                                <div class="slideimg">
                                    <img src="../resource/images/index/Pharmacist-bro.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="sliderheading">Retail Store's</p>
                                <p class="sliderdescription">

                                    Vyapar billing and invoicing software helps retail businesses create professional customer invoices.
                                    It
                                    allows them to present their business information in the invoice. Further, it makes the process
                                    seamless
                                    for a retail buisness owner.
                                    <br><br>
                                    The GST billing app helps small business owners keep track of all the inventory items. They can
                                    include
                                    their price, discounts, taxes, and others, to bill the customers faster. Another benefit is that they
                                    can create custom invoices. It helps them look professional. The business can include all payment
                                    options in the invoice for faster billing.
                                </p>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-4">
                                <div class="slideimg">
                                    <img src="../resource/images/index/Pharmacist-bro.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p class="sliderheading">Retail Store's</p>
                                <p class="sliderdescription">

                                    Vyapar billing and invoicing software helps retail businesses create professional customer invoices.
                                    It
                                    allows them to present their business information in the invoice. Further, it makes the process
                                    seamless
                                    for a retail buisness owner.
                                    <br><br>
                                    The GST billing app helps small business owners keep track of all the inventory items. They can
                                    include
                                    their price, discounts, taxes, and others, to bill the customers faster. Another benefit is that they
                                    can create custom invoices. It helps them look professional. The business can include all payment
                                    options in the invoice for faster billing.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------BUILT FOR YOUR INDUSTRY SECTION ENDS----------------------------------------->



    <!-------------------------------------------FAQ SECTION STARTS----------------------------------------->
    <div class="container-fluid bg-eeeeee mt-6rem">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h2 class="text-center">Frequently Asked Questions</h2>
                </div>
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                    Which is the best software for billing?

                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        In general, billing software helps generate and send GST bills. It allows you to track the products
                                        and services your customers use. Further it allows you to receive payments. However, some billing
                                        platforms like Vyapar are capable of much more. Using Vyapar, you can automate the repetitive tasks
                                        of your business. You can manage accounts, and create business reports too.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button py-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                    Which is the best software for billing?

                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        In general, billing software helps generate and send GST bills. It allows you to track the products
                                        and services your customers use. Further it allows you to receive payments. However, some billing
                                        platforms like Vyapar are capable of much more. Using Vyapar, you can automate the repetitive tasks
                                        of your business. You can manage accounts, and create business reports too.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button py-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                                    Which is the best software for billing?

                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        In general, billing software helps generate and send GST bills. It allows you to track the products
                                        and services your customers use. Further it allows you to receive payments. However, some billing
                                        platforms like Vyapar are capable of much more. Using Vyapar, you can automate the repetitive tasks
                                        of your business. You can manage accounts, and create business reports too.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button py-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">

                                    Which is the best software for billing?

                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        In general, billing software helps generate and send GST bills. It allows you to track the products
                                        and services your customers use. Further it allows you to receive payments. However, some billing
                                        platforms like Vyapar are capable of much more. Using Vyapar, you can automate the repetitive tasks
                                        of your business. You can manage accounts, and create business reports too.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button py-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">

                                    Which is the best software for billing?

                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        In general, billing software helps generate and send GST bills. It allows you to track the products
                                        and services your customers use. Further it allows you to receive payments. However, some billing
                                        platforms like Vyapar are capable of much more. Using Vyapar, you can automate the repetitive tasks
                                        of your business. You can manage accounts, and create business reports too.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button py-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">

                                    Which is the best software for billing?

                                </button>
                            </h2>
                            <div id="collapsesix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        In general, billing software helps generate and send GST bills. It allows you to track the products
                                        and services your customers use. Further it allows you to receive payments. However, some billing
                                        platforms like Vyapar are capable of much more. Using Vyapar, you can automate the repetitive tasks
                                        of your business. You can manage accounts, and create business reports too.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button py-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">

                                    Which is the best software for billing?

                                </button>
                            </h2>
                            <div id="collapseseven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        In general, billing software helps generate and send GST bills. It allows you to track the products
                                        and services your customers use. Further it allows you to receive payments. However, some billing
                                        platforms like Vyapar are capable of much more. Using Vyapar, you can automate the repetitive tasks
                                        of your business. You can manage accounts, and create business reports too.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button py-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseight" aria-expanded="false" aria-controls="collapseight">

                                    Which is the best software for billing?

                                </button>
                            </h2>
                            <div id="collapseight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        In general, billing software helps generate and send GST bills. It allows you to track the products
                                        and services your customers use. Further it allows you to receive payments. However, some billing
                                        platforms like Vyapar are capable of much more. Using Vyapar, you can automate the repetitive tasks
                                        of your business. You can manage accounts, and create business reports too.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button py-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">

                                    Which is the best software for billing?

                                </button>
                            </h2>
                            <div id="collapsenine" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        In general, billing software helps generate and send GST bills. It allows you to track the products
                                        and services your customers use. Further it allows you to receive payments. However, some billing
                                        platforms like Vyapar are capable of much more. Using Vyapar, you can automate the repetitive tasks
                                        of your business. You can manage accounts, and create business reports too.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button py-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">

                                    Which is the best software for billing?

                                </button>
                            </h2>
                            <div id="collapseten" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        In general, billing software helps generate and send GST bills. It allows you to track the products
                                        and services your customers use. Further it allows you to receive payments. However, some billing
                                        platforms like Vyapar are capable of much more. Using Vyapar, you can automate the repetitive tasks
                                        of your business. You can manage accounts, and create business reports too.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------FAQ SECTION ENDS----------------------------------------->

    <!-------------------------------------------RATING SECTION STARTS----------------------------------------->
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h4>How Useful Was This Post?</h4>
                <p>Click on a star to rate it!</p>
            </div>
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

            <div class="col-12 text-center">
                <p>Average rating 4.15 / 5. Vote count: 9977</p>
            </div>
        </div>
    </div>
    <!-------------------------------------------RATING SECTION ENDS----------------------------------------->

    <!-------------------------------------------LOGIN SIDEBAR SECTION STARTS----------------------------------------->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">

                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <div class="container">
                            <?php
                            if (isset($error_message)) {
                                echo "<p style='color: red;'>$error_message</p>";
                            }
                            ?>
                            <form method="POST" action="webapp/connect.php" class="row">

                                <div class="col-md-12 col-sm-12" id="mobileinputlogin">
                                    <input type="tel" id="phone" name="mobile" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" placeholder="Mobile" class="form-control w-100" required>
                                </div>

                                <div class="col-md-12 col-sm-12" id="emailinputlogin">
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-wrapping"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                                    <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z" />
                                                    <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z" />
                                                </svg>
                                            </svg>
                                        </span>
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping">
                                    </div>
                                </div>

                                <div class="col-12 mt-2">
                                    <p><a href="#" id="login-switch">Login using email</a></p>
                                </div>
                                <div class="col-12 py-3">
                                    <input class="btn btn-primary w-100 mb-3" type="submit" name="submit" id="loginButton" value="Login">
                                    <a href="" id="forgotPassword">Forgot Password</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------LOGIN SIDEBAR SECTION ENDS----------------------------------------->


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
                                <img src="../resource/images/index/qrcode.webp" alt="" class="img-fluid">
                                <p class="heading">Scan With Your Camera</p>
                                <p class="headingtext">Monitor your business activity from anywhere in the world, sync mobile app with
                                    desktop app.</p>
                            </div>

                            <div class="col-12">
                                <div class="mb-3 border border-1 rounded-pill">
                                    <input type="number" class="form-control px-4  " id="exampleFormControlInput1" placeholder="Enter Number">
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


    <!-------------------------------------------PAGE LOAD BANNER IMAGE STARTS----------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-lg-11 col-xl-9">
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                            <div class="modal-body p-0">
                                <img src="../resource/images/banner/exit-pop-up.jpg" alt="Image description" class="img-fluid">
                            </div>

                            <div class="crossimg">
                                <button> <img src="../resource/images/banner/crossnew.webp" alt="" class="img-fluid" data-bs-dismiss="modal"></button>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------PAGE LOAD BANNER IMAGE STARTS----------------------------------------->



    <!-------------------------------------------FOOTER SECTION STARTS----------------------------------------->
    <footer id="footer">
        <div class="container-fluid">
            <div class="container navbar-expand-lg">

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



















    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!--Jquery cdn-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--Slick js cdn-->
    <script src="../slick/slick.js" type="text/javascript" charset="utf-8"></script>

    <!--Slick initialization-->
    <script type="text/javascript">
        $('.multiple-items').slick({
            infinite: true,
            dots: true,
            autoplay: true,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    </script>


    <!--Telephone input initialise Jquery-->
    <script>
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
            initialCountry: "in",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/654a143da84dd54dc48958e0/1heklu580';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

</body>

</html>