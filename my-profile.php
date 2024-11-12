<?php

include_once("config/config.php");
include_once("config/database.php");
include_once(DIR_URL . "include/middleware.php");
include_once(DIR_URL . "models/dashboard.php");

// get counts date
$counts = getCounts($conn);

// get tabs date
$tabs = getTabsDate($conn);


?>

<?php include_once(DIR_URL . "include/header.php"); ?>


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
                    <h4 class="fw-bold text-uppercase">My Profile</h4>
                </div>
                <!--Account info form-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Account Information
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo BASE_URL ?>my-profile.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" class="form-control" name="name" value="" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email" value="" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" name="phone_no" value="" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3 position-relative extra">
                                            <label class="form-label">Profile Picture</label>
                                            <input type="file" class="form-control" name="profile_pic" />
                                            <img src="assets/images/images/avatar-4.jpg" style=" position: absolute; right: 0px; width: 38px; bottom: 0px;
    border-radius: 0px 6px 6px 0;" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" name="profile_submit" class="btn btn-success">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!--Change password form-->
                <div class="col-md-6">
                    <div class="card" style="min-height:457px;">
                        <div class="card-header">
                            Change Password
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo BASE_URL ?>my-profile.php">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Current Password</label>
                                            <input type="password" class="form-control" required name="current_pass" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">New Password</label>
                                            <input type="password" class="form-control" required name="new_pass" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" required name="conf_pass" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" name="password_submit" class="btn btn-success">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </form>
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