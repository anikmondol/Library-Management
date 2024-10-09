<?php

include("../config/config.php");

include(DIR_URL."include/header.php");

?>

<header>

    <?php

    include(DIR_URL."include/topbar.php");
    include(DIR_URL."include/sidebar.php");

    ?>

</header>

 <!-- main content start -->
 <main class="mt-3 pt-1">
    <div class="container-fluid">
      <section class="row dashboards-counts">
        <div class="col-md-12">
          <h5 class="fw-medium dashboards-title text-uppercase">Add Book's</h5>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              File The Form
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Book Name</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ISBN NUMBER</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Author Name</label>
                      <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Publisher Name</label>
                      <input type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Category / Course</label>
                      <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">UPSC</option>
                        <option value="2">GATE</option>
                        <option value="3">MCA ENTRANCE</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">Publish</button>
                  <button type="submit" class="btn btn-secondary">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </section>
    </div>

  </main>
  <!-- main content end -->




<?php include(DIR_URL."include/footer.php") ?>