<?php
session_start();
// error_reporting(0);
// Check if the user is logged in
if (!isset($_SESSION['data'])) {
    // Redirect to the login page
    header("Location: ../../index.php");
    exit();
}

// Access user data from the session
$user = $_SESSION['data'];
$mobile = $_SESSION['mobile'];
// Check the user's role
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

// Redirect if the user's role is not "Admin"
if ($role !== 1) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Edit All Details</title>

    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="../../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="#" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2">
                            <?php echo $_SESSION['data']["userName"]; ?>
                        </span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>
                <!-- menu -->
                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item active open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Dashboards">Setting</div>
                            <!-- <div class="badge bg-danger rounded-pill ms-auto">5</div> -->
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="Logo.php" class="menu-link">
                                    <div data-i18n="CRM">logo</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="banner.php" class="menu-link">
                                    <div data-i18n="Analytics">Banner</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div data-i18n="eCommerce">About</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Profile</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="../logout.php" class="menu-link">
                                    <div data-i18n="Without menu">Logout</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Manage Inventory page-->
                    <li class="menu-item active">
                        <a href="manageInventory.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Support">Manage Inventory</div>
                        </a>
                    </li>
                    <!-- Payment Reminder page -->
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-calendar"></i>
                            <div data-i18n="Support">Payment Reminder</div>
                        </a>
                    </li>
                    <!-- GST Pages -->
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-grid"></i>
                            <div data-i18n="Support">GST</div>
                        </a>
                    </li>
                    <!-- GST Feature page-->
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-grid"></i>
                            <div data-i18n="Support">GST Feature</div>
                        </a>
                    </li>
                    <!-- Benefits Pages -->
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Support">Benefits</div>
                        </a>
                    </li>
                    <!-- Industry Pages -->
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="Support">Industry</div>
                        </a>
                    </li>
                    <!-- Rewards Pages -->
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Support">Rewards</div>
                        </a>
                    </li>
                    <!-- Offer Pages -->
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Support">Offer</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
                    <!-- Question Pages -->
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Support">Question</div>
                        </a>
                    </li>
                    <!-- Help & Support Pages -->
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-support"></i>
                            <div data-i18n="Support">Help & Support</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none ps-1 ps-sm-2"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 mb-4">
                            <!-- <span class="text-muted fw-light">Edit All Settings /</span> -->
                            Manage Inventory
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <!-- <ul class="nav nav-pills flex-column flex-md-row mb-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="javascript:void(0);"><i
                                                class="bx bx-user me-1"></i> Account</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-account-settings-notifications.html"><i
                                                class="bx bx-bell me-1"></i> Notifications</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages-account-settings-connections.html"><i
                                                class="bx bx-link-alt me-1"></i> Connections</a>
                                    </li>
                                </ul> -->
                                <div class="card mb-4">
                                    <h5 class="card-header">Rule Details</h5>
                                    <!-- Account -->
                                    <!-- <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img src="../../assets/img/avatars/1.png" alt="user-avatar"
                                                class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                    <span class="d-none d-sm-block">Upload new photo</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="file" id="upload" class="account-file-input" hidden
                                                        accept="image/png, image/jpeg" />
                                                </label>
                                                <button type="button"
                                                    class="btn btn-outline-secondary account-image-reset mb-4">
                                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Reset</span>
                                                </button>

                                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            </div>
                                        </div>
                                    </div> -->
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <form id="formAccountSettings" method="POST" onsubmit="return false">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="firstName" class="form-label">Product Name</label>
                                                    <input class="form-control" type="text" id="firstName"
                                                        name="firstName" value="John" autofocus />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="lastName" class="form-label">Last Name</label>
                                                    <input class="form-control" type="text" name="lastName"
                                                        id="lastName" value="Doe" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="email" class="form-label">E-mail</label>
                                                    <input class="form-control" type="text" id="email" name="email"
                                                        value="john.doe@example.com"
                                                        placeholder="john.doe@example.com" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="organization" class="form-label">Organization</label>
                                                    <input type="text" class="form-control" id="organization"
                                                        name="organization" value="ThemeSelection" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="phoneNumber">Phone Number</label>
                                                    <div class="input-group input-group-merge">
                                                        <span class="input-group-text">US (+1)</span>
                                                        <input type="text" id="phoneNumber" name="phoneNumber"
                                                            class="form-control" placeholder="202 555 0111" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="address" class="form-label">Address</label>
                                                    <input type="text" class="form-control" id="address" name="address"
                                                        placeholder="Address" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="state" class="form-label">State</label>
                                                    <input class="form-control" type="text" id="state" name="state"
                                                        placeholder="California" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="zipCode" class="form-label">Zip Code</label>
                                                    <input type="text" class="form-control" id="zipCode" name="zipCode"
                                                        placeholder="231465" maxlength="6" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label class="form-label" for="country">Country</label>
                                                    <select id="country" class="select2 form-select">
                                                        <option value="">Select</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="Belarus">Belarus</option>
                                                        <option value="Brazil">Brazil</option>
                                                        <option value="Canada">Canada</option>
                                                        <option value="China">China</option>
                                                        <option value="France">France</option>
                                                        <option value="Germany">Germany</option>
                                                        <option value="India">India</option>
                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Italy">Italy</option>
                                                        <option value="Japan">Japan</option>
                                                        <option value="Korea">Korea, Republic of</option>
                                                        <option value="Mexico">Mexico</option>
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="Russia">Russian Federation</option>
                                                        <option value="South Africa">South Africa</option>
                                                        <option value="Thailand">Thailand</option>
                                                        <option value="Turkey">Turkey</option>
                                                        <option value="Ukraine">Ukraine</option>
                                                        <option value="United Arab Emirates">United Arab Emirates
                                                        </option>
                                                        <option value="United Kingdom">United Kingdom</option>
                                                        <option value="United States">United States</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="language" class="form-label">Language</label>
                                                    <select id="language" class="select2 form-select">
                                                        <option value="">Select Language</option>
                                                        <option value="en">English</option>
                                                        <option value="fr">French</option>
                                                        <option value="de">German</option>
                                                        <option value="pt">Portuguese</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="timeZones" class="form-label">Timezone</label>
                                                    <select id="timeZones" class="select2 form-select">
                                                        <option value="">Select Timezone</option>
                                                        <option value="-12">(GMT-12:00) International Date Line West
                                                        </option>
                                                        <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
                                                        <option value="-10">(GMT-10:00) Hawaii</option>
                                                        <option value="-9">(GMT-09:00) Alaska</option>
                                                        <option value="-8">(GMT-08:00) Pacific Time (US & Canada)
                                                        </option>
                                                        <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
                                                        <option value="-7">(GMT-07:00) Arizona</option>
                                                        <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan
                                                        </option>
                                                        <option value="-7">(GMT-07:00) Mountain Time (US & Canada)
                                                        </option>
                                                        <option value="-6">(GMT-06:00) Central America</option>
                                                        <option value="-6">(GMT-06:00) Central Time (US & Canada)
                                                        </option>
                                                        <option value="-6">(GMT-06:00) Guadalajara, Mexico City,
                                                            Monterrey</option>
                                                        <option value="-6">(GMT-06:00) Saskatchewan</option>
                                                        <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco
                                                        </option>
                                                        <option value="-5">(GMT-05:00) Eastern Time (US & Canada)
                                                        </option>
                                                        <option value="-5">(GMT-05:00) Indiana (East)</option>
                                                        <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                                                        <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="currency" class="form-label">Currency</label>
                                                    <select id="currency" class="select2 form-select">
                                                        <option value="">Select Currency</option>
                                                        <option value="usd">USD</option>
                                                        <option value="euro">Euro</option>
                                                        <option value="pound">Pound</option>
                                                        <option value="bitcoin">Bitcoin</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!-- Notifications -->
                                                <h5 class="card-header">Recent Devices</h5>
                                                <div class="card-body">
                                                    <span>We need permission from your browser to show
                                                        notifications.
                                                        <span class="notificationRequest"><span
                                                                class="fw-medium">Request
                                                                Permission</span></span></span>
                                                    <div class="error"></div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-borderless border-bottom">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-nowrap">services</th>
                                                                <th class="text-nowrap text-center">Silver Plan</th>
                                                                <th class="text-nowrap text-center">Gold Plan</th>
                                                                <th class="text-nowrap text-center">Platinum Plan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-nowrap">New for you</td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck1" checked />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck2" checked />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck3" checked />
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-nowrap">Account activity</td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck4" checked />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck5" checked />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck6" checked />
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-nowrap">A new browser used to sign
                                                                    in</td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck7" checked />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck8" checked />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck9" />
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-nowrap">A new device is linked</td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck10" checked />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck11" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="form-check d-flex justify-content-center">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            id="defaultCheck12" />
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="card-body">
                                                    <h6>When should we send you notifications?</h6>
                                                    <form action="javascript:void(0);">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <select id="sendNotification" class="form-select"
                                                                    name="sendNotification">
                                                                    <option selected>Only when I'm online</option>
                                                                    <option>Anytime</option>
                                                                </select>
                                                            </div>
                                                            <div class="mt-4">
                                                                <button type="submit" class="btn btn-primary me-2">Save
                                                                    changes</button>
                                                                <button type="reset"
                                                                    class="btn btn-outline-secondary">Discard</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- /Notifications -->
                                                <div class="card">
                                                    <h5 class="card-header">Delete rules</h5>
                                                    <div class="card-body">
                                                        <div class="mb-3 col-12 mb-0">
                                                            <div class="alert alert-warning">
                                                                <h6 class="alert-heading mb-1">Are you sure you want to
                                                                    delete your
                                                                    rule?</h6>
                                                                <p class="mb-0">Once you delete your rule, there is no
                                                                    going back.
                                                                    Please be certain.</p>
                                                            </div>
                                                        </div>
                                                        <form id="formAccountDeactivation" onsubmit="return false">
                                                            <div class="form-check mb-3">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="accountActivation" id="accountActivation" />
                                                                <label class="form-check-label"
                                                                    for="accountActivation">I confirm my
                                                                    rule deactivation</label>
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-danger deactivate-account">Deactivate
                                                                rule</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mt-2">
                                                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /Account -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- /Content -->
                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                <!-- , made by -->
                                <!-- <a href="#"  class="footer-link fw-medium">shekhar</a> -->
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>