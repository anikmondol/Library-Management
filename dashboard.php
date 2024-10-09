<?php

include("config/config.php");

include(DIR_URL . "include/header.php");

?>

<header>

    <?php

    include(DIR_URL . "include/topbar.php");
    include(DIR_URL . "include/sidebar.php");

    ?>

</header>

<!-- main content start -->
<main class="mt-1 pt-1">
    <div class="container-fluid">
        <!-- card section start-->

        <section class="row dashboards-counts">
            <div class="col-md-12">
                <h5 class="fw-medium dashboards-title text-uppercase">Dashboards</h5>
                <p>Statistics of The System!</p>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="card-subtitle mb-2 text-body-secondary text-uppercase text-muted fw-medium">Total Book's</h6>
                        <h1>130</h1>
                        <a href="#" class="card-link link-underline-light">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="card-subtitle mb-2 text-body-secondary text-uppercase text-muted fw-medium">Total Student's
                        </h6>
                        <h1>1,130</h1>
                        <a href="#" class="card-link link-underline-light">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="card-subtitle mb-2 text-body-secondary text-uppercase text-muted fw-medium">Total revenue</h6>
                        <h1><i class="fa-solid fa-bangladeshi-taka-sign fs-2 p-0 m-0"></i> 15,000</h1>
                        <a href="#" class="card-link link-underline-light">View More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h6 class="card-subtitle mb-2 text-body-secondary text-uppercase text-muted fw-medium">Total Booksloan
                        </h6>
                        <h1>140</h1>
                        <a href="#" class="card-link link-underline-light">View More</a>
                    </div>
                </div>
            </div>

        </section>

        <!-- card section start-->

        <!-- tabs section start-->

        <div class="row mt-5 dashboards-tabs">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#new-students" type="button" role="tab" aria-controls="new-students"
                            aria-selected="true">New Student's</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase" id="recent-loan" data-bs-toggle="tab"
                            data-bs-target="#recent-loan-pane" type="button" role="tab" aria-controls="recent-loan-pane"
                            aria-selected="false">Recent Loan's</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link text-uppercase" id="recent-subscription" data-bs-toggle="tab"
                            data-bs-target="#recent-subscription-pane" type="button" role="tab"
                            aria-controls="recent-subscription-pane" aria-selected="false">Subscription's</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="new-students" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th class="table-head" scope="col">#</th>
                                    <th class="table-head" scope="col">Name</th>
                                    <th class="table-head" scope="col">Preparing</th>
                                    <th class="table-head" scope="col">Registered</th>
                                    <th class="table-head" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="table-head" scope="row">1</th>
                                    <td class="table-head">Mark</td>
                                    <td class="table-head">IAS</td>
                                    <td class="table-head">02-11-2020</td>
                                    <td class="table-head"><span class="badge text-bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <th class="table-head" scope="row">2</th>
                                    <td class="table-head">Anik</td>
                                    <td class="table-head">UPSC</td>
                                    <td class="table-head">05-08-2024</td>
                                    <td class="table-head"><span class="badge text-bg-warning text-white">Warning</span></td>
                                </tr>
                                <tr>
                                    <th class="table-head" scope="row">3</th>
                                    <td class="table-head">Joy</td>
                                    <td class="table-head">IAS</td>
                                    <td class="table-head">02-11-2020</td>
                                    <td class="table-head"><span class="badge text-bg-danger">Deactive</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="recent-loan-pane" role="tabpanel" aria-labelledby="recent-loan" tabindex="0">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th class="table-head" scope="col">#</th>
                                    <th class="table-head" scope="col">Name</th>
                                    <th class="table-head" scope="col">Preparing</th>
                                    <th class="table-head" scope="col">Registered</th>
                                    <th class="table-head" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="table-head" scope="row">1</th>
                                    <td class="table-head">Mark</td>
                                    <td class="table-head">IAS</td>
                                    <td class="table-head">02-11-2020</td>
                                    <td class="table-head"><span class="badge text-bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <th class="table-head" scope="row">2</th>
                                    <td class="table-head">Anik</td>
                                    <td class="table-head">UPSC</td>
                                    <td class="table-head">05-08-2024</td>
                                    <td class="table-head"><span class="badge text-bg-warning text-white">Warning</span></td>
                                </tr>
                                <tr>
                                    <th class="table-head" scope="row">3</th>
                                    <td class="table-head">Joy</td>
                                    <td class="table-head">IAS</td>
                                    <td class="table-head">02-11-2020</td>
                                    <td class="table-head"><span class="badge text-bg-danger">Deactive</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="recent-subscription-pane" role="tabpanel"
                        aria-labelledby="recent-subscription" tabindex="0">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th class="table-head" scope="col">#</th>
                                    <th class="table-head" scope="col">Name</th>
                                    <th class="table-head" scope="col">Preparing</th>
                                    <th class="table-head" scope="col">Registered</th>
                                    <th class="table-head" scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="table-head" scope="row">1</th>
                                    <td class="table-head">Mark</td>
                                    <td class="table-head">IAS</td>
                                    <td class="table-head">02-11-2020</td>
                                    <td class="table-head"><span class="badge text-bg-success">Active</span></td>
                                </tr>
                                <tr>
                                    <th class="table-head" scope="row">2</th>
                                    <td class="table-head">Anik</td>
                                    <td class="table-head">UPSC</td>
                                    <td class="table-head">05-08-2024</td>
                                    <td class="table-head"><span class="badge text-bg-warning text-white">Warning</span></td>
                                </tr>
                                <tr>
                                    <th class="table-head" scope="row">3</th>
                                    <td class="table-head">Joy</td>
                                    <td class="table-head">IAS</td>
                                    <td class="table-head">02-11-2020</td>
                                    <td class="table-head"><span class="badge text-bg-danger">Deactive</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <!-- tabs section end-->

    </div>

</main>
<!-- main content end -->



<?php include(DIR_URL . "include/footer.php"); ?>