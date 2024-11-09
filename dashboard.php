<?php 

include_once("config/config.php");
include_once("config/database.php");
include_once(DIR_URL . "include/header.php");

?>

<body>

    <!-- header start -->

    <header>

        <?php
        include_once(DIR_URL . "include/topbar.php");
        include_once(DIR_URL . "include/sidebar.php");
        ?>


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


        <?php include_once(DIR_URL . "include/footer.php") ?>

    </main>

    <!-- main end -->


    <?php include_once(DIR_URL . "include/footer_end.php") ?>