<?php

include_once("../config/config.php");
include_once(DIR_URL . "config/database.php");
include_once(DIR_URL . "models/book.php");

$books = getBooks($conn);


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
                    <h4 class="fw-bold text-uppercase">Manage Books</h4>
                    <?php include_once(DIR_URL . "include/alerts.php"); ?>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">All Books</h5>
                    <div class="card-body">
                        <table class="table tabs-table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Book Name</th>
                                    <th scope="col">Publication Year</th>
                                    <th scope="col">Author Name</th>
                                    <th scope="col">ISBN Number</th>
                                    <th scope="col">categories Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                if ($books->num_rows > 0) {
                                    $i = 1;
                                
                                while ($row = $books->fetch_assoc()) { ?>
                                    <tr>
                                        <th><?= $i++; ?></th>
                                        <td><?= $row["title"]; ?></td>
                                        <td><?= $row["publication_year"]; ?></td>
                                        <td><?= $row["author"]; ?></td>
                                        <td><?= $row["isbn"]; ?></td>
                                        <td><?= $row["cat_name"]; ?></td>
                                        <td><?php 
                                        
                                            if ($row["status"] == 1) {
                                                echo '<span class="badge text-bg-success">Active</span>';
                                            } else {
                                                echo '<span class="badge text-bg-danger">Inactive</span>';
                                            }
                                            
                                        
                                        ?></td>
                                        <td><?= date("d-m-Y h:i A"); strtotime($row["created_at"]); ?></td>
                                        <td class="text-center">
                                            <!-- Button trigger modal -->
                                            <div class="btn border-0" data-bs-toggle="modal"
                                                data-bs-target="#centeredModal">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </div>

                                            <!-- Vertically centered modal -->
                                            <div class="modal fade" id="centeredModal" tabindex="-1"
                                                aria-labelledby="centeredModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <!-- Vertically centered modal -->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h6 class="modal-title" id="centeredModalLabel">Edit / Delete
                                                            </h6>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close" style="font-size: 10px;"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            <a href="#" class="btn btn-danger btn-sm"
                                                                data-bs-dismiss="modal" aria-label="Close">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- main content end -->

        <?php include_once(DIR_URL . "include/footer.php") ?>

    </main>

    <!-- main end -->


    <?php include_once(DIR_URL . "include/footer_end.php") ?>