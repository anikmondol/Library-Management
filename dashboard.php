<!DOCTYPE html>

<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
    <meta charset="utf-8" />
    <title> Dashboard | Start Library Management System </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Anik Mondal" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/images/neptune.png">

    <link href="assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/config.js"></script>

    <!-- bootstrap css  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Custom style -->
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>

    <!-- header start -->

    <header>

        <!-- top navbar start -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <!-- offcanvas trigger start -->
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample" style="font-size: 12px;">
                    <i class="fa-solid fa-angle-right"></i>
                </button>
                <!-- offcanvas trigger end -->
                <a class="navbar-brand text-uppercase fw-bold me-auto" href="#">Start Library</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" style="font-size: 12px;">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="d-flex ms-auto" role="search">
                        <div class="input-group mt-3 mb-2 mt-lg-0 mb-lg-0">
                            <input type="text" class="form-control" placeholder="Search..."
                                aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary btn-primary text-white" type="button"
                                id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                    <ul class="navbar-nav  mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="assets/images/images/avatar-4.jpg" alt="Start Library Image Adding Son"
                                    class="user_icon">
                                Admin
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">My Profile</a></li>
                                <li><a class="dropdown-item" href="#">Change Password</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- top navbar end -->

        <!-- offcanvas start -->
        <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="text-secondary small text-uppercase fw-bold">
                            Core
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php"><i
                                class="fa-solid fa-gauge me-2"></i>
                            Dashboard</a>
                    </li>
                    <li class="nav-item my-0">
                        <hr>
                    </li>
                    <li class="nav-item">
                        <div class="text-secondary small text-uppercase fw-bold">
                            Inventory
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center sidebar-link"
                            data-bs-toggle="collapse" href="#bookmanagement" role="button" aria-expanded="false"
                            aria-controls="bookmanagement">
                            <span><i class="fa-solid fa-book-open me-2"></i>Book's Management</span>
                            <span class="right-icon"><i class="fa-solid fa-chevron-down float-end"></i></span>
                        </a>
                        <div class="collapse" id="bookmanagement">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li class="font-size-sm"><a class="nav-link" href="./add-book.php">
                                            <i class="fa-solid fa-plus me-2"></i> Add New</a></li>
                                    <li class="font-size-sm"><a class="nav-link" href="./manage-books.php"><i
                                                class="fa-solid fa-list-check me-2"></i> Manage
                                            All</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center sidebar-link"
                            data-bs-toggle="collapse" href="#studentmanagement" role="button" aria-expanded="false"
                            aria-controls="studentmanagement">
                            <span><i class="fa-solid fa-user-group me-2"></i>Student's Management</span>
                            <span class="right-icon"><i class="fa-solid fa-chevron-down float-end"></i></span>
                        </a>
                        <div class="collapse" id="studentmanagement">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li class="font-size-sm"><a class="nav-link" href="#">
                                            <i class="fa-solid fa-plus me-2"></i> Add New</a></li>
                                    <li class="font-size-sm"><a class="nav-link" href="#"><i
                                                class="fa-solid fa-list-check me-2"></i> Manage
                                            All</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item my-0">
                        <hr>
                    </li>
                    <li class="nav-item">
                        <div class="text-secondary small text-uppercase fw-bold">
                            BUSINESS
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center sidebar-link"
                            data-bs-toggle="collapse" href="#bookloan" role="button" aria-expanded="false"
                            aria-controls="bookloan">
                            <span><i class="fa-solid fa-book me-2"></i></i>Book's Loan</span>
                            <span class="right-icon"><i class="fa-solid fa-chevron-down float-end"></i></span>
                        </a>
                        <div class="collapse" id="bookloan">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li class="font-size-sm"><a class="nav-link" href="#">
                                            <i class="fa-solid fa-plus me-2"></i> Add New</a></li>
                                    <li class="font-size-sm"><a class="nav-link" href="#"><i
                                                class="fa-solid fa-list-check me-2"></i> Manage
                                            All</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center sidebar-link"
                            data-bs-toggle="collapse" href="#subscription" role="button" aria-expanded="false"
                            aria-controls="subscription">
                            <span><i class="fa-solid fa-indian-rupee-sign me-2"></i></i> Subscription's</span>
                            <span class="right-icon"><i class="fa-solid fa-chevron-down float-end"></i></span>
                        </a>
                        <div class="collapse" id="subscription">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li class="font-size-sm"><a class="nav-link" href="#">
                                            <i class="fa-solid fa-plus me-2"></i>Plans</a></li>
                                    <li class="font-size-sm"><a class="nav-link" href="#"><i
                                                class="fa-solid fa-list-check me-2"></i>Purchase History</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item my-0">
                        <hr>
                    </li>
                    <li class="nav-item">
                        <div class="text-secondary small text-uppercase fw-bold">
                            Inventory
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i
                                class="fa-solid fa-arrow-right-from-bracket me-2"></i>
                            Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- offcanvas end -->

    </header>

    <!-- header end -->

    <!-- main start -->

    <main class="mt-1 pt-3">

        <!-- main content start -->
        <section class="container-fluid">

            <!-- cards -->
            <div class="row">
                <div class="col-md-12">
                    <h4 class="fw-bold text-uppercase">Dashboard</h4>
                    <p>Statistics of the system</p>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6 class="card-title text-muted text-uppercase fw-bold">Total Books</h6>
                            <h1>130</h1>
                            <a href="#" class="card-link text-decoration-none">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6 class="card-title text-muted text-uppercase fw-bold">Total Students</h6>
                            <h1>130</h1>
                            <a href="#" class="card-link text-decoration-none">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6 class="card-title text-muted text-uppercase fw-bold">Total Revenue</h6>
                            <h1>30,500</h1>
                            <a href="#" class="card-link text-decoration-none">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6 class="card-title text-muted text-uppercase fw-bold">Total Books Loan</h6>
                            <h1>170</h1>
                            <a href="#" class="card-link text-decoration-none">View More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- tabs -->
            <div class="row mt-5 dashboard-tabs">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active text-uppercase" id="recent-students" data-bs-toggle="tab"
                                data-bs-target="#recent-students-pane" type="button" role="tab"
                                aria-controls="recent-students-pane" aria-selected="true">New Students</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-uppercase" id="recant-loans" data-bs-toggle="tab"
                                data-bs-target="#recant-loans-pane" type="button" role="tab"
                                aria-controls="recant-loans-pane" aria-selected="false">Recant Loans</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-uppercase" id="recant-subscriptions" data-bs-toggle="tab"
                                data-bs-target="#recant-subscriptions-pane" type="button" role="tab"
                                aria-controls="recant-subscriptions-pane" aria-selected="false">Recant
                                Subscriptions</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="recent-students-pane" role="tabpanel"
                            aria-labelledby="recent-students" tabindex="0">
                            <table class="table tabs-table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Preparing For</th>
                                        <th scope="col">Registered On</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>UPSC</td>
                                        <td>10-05-2024, <span class="d-none d-md-inline-block">12:30 PM</span></td>
                                        <td><span class="badge text-bg-success">Active</span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jay Kumar</td>
                                        <td>UPSC</td>
                                        <td>10-05-2024, <span class="d-none d-md-inline-block">12:30 PM</span></td>
                                        <td><span class="badge text-bg-danger">Inactive</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="recant-loans-pane" role="tabpanel" aria-labelledby="recant-loans"
                            tabindex="0">
                            <table class="table tabs-table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Book Name</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Loan Date</th>
                                        <th scope="col">Due Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Indian Art and Culture</td>
                                        <td>Jai Sharma</td>
                                        <td>26-05-2023</td>
                                        <td>20-06-2023</td>
                                        <td>
                                            <span class="badge text-bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Tata McGraw Hill CSAT Manual</td>
                                        <td>Joy</td>
                                        <td>20-05-2023</td>
                                        <td>25-05-2023</td>
                                        <td>
                                            <span class="badge text-bg-warning">Returned</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="recant-subscriptions-pane" role="tabpanel"
                            aria-labelledby="recant-subscriptions" tabindex="0">
                            <table class="table tabs-table">
                                <thead class="table-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Jai Kaushik</td>
                                        <td>
                                            <i class="fa-solid fa-indian-rupee-sign"></i> 500
                                        </td>
                                        <td>25-05-2023</td>
                                        <td>24-06-2023</td>
                                        <td>
                                            <span class="badge text-bg-success">Active</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>2</th>
                                        <td>Narayan Soni</td>
                                        <td>
                                            <i class="fa-solid fa-indian-rupee-sign"></i> 750
                                        </td>
                                        <td>20-05-2023</td>
                                        <td>19-08-2023</td>
                                        <td>
                                            <span class="badge text-bg-success">Active</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>3</th>
                                        <td>Hemlata Khatri</td>
                                        <td>
                                            <i class="fa-solid fa-indian-rupee-sign"></i> 1000
                                        </td>
                                        <td>10-05-2023</td>
                                        <td>09-11-2023</td>
                                        <td>
                                            <span class="badge text-bg-success">Active</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>4</th>
                                        <td>Rakesh</td>
                                        <td>
                                            <i class="fa-solid fa-indian-rupee-sign"></i> 500
                                        </td>
                                        <td>20-04-2023</td>
                                        <td>19-05-2023</td>
                                        <td>
                                            <span class="badge text-bg-danger">Expired</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- main content end -->

        <!-- footer start -->

        <footer class="position-absolute bottom-0 text-center bg-info-subtle pb-0 pt-2 d-none d-md-none d-lg-block"
            style="width: calc(100% - 270px);">
            <p class=""><small>© 2024. Develop by Anik Mondal.</small></p>
        </footer>


        <!-- footer end -->

    </main>

    <!-- main end -->


    <!-- App js -->
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.js"></script>

    <!-- Knob charts js -->
    <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline Js-->
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="assets/libs/morris.js/morris.min.js"></script>

    <script src="assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init-->
    <script src="assets/js/pages/dashboard.js"></script>

</body>



</html>