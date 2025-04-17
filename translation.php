<!doctype html>
<html lang="en">
<!-- ============================================================== -->
<!-- Header here -->
<!-- ============================================================== -->
<?php include 'header.php';?>

<body>
    <div id="app-wrapper">
        <!-- ============================================================== -->
        <!-- Top Header and Side navigation  here -->
        <!-- ============================================================== -->
        <?php include 'top-nav.php';?>
        <?php include 'side-nav.php';?>

        <!-- ============================================================== -->
        <!-- Main Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="container-fluid">
                <!-- start page header -->
                <div class="page-header d-md-flex align-items-center">
                    <div class="col-sm-auto">
                        <h4 class="mb-0 f-600">Translation</h4>
                    </div>
                    <div class="ms-md-auto d-sm-flex align-items-center gap-2 mt-2 mt-sm-0 col-sm-6">
                    <select class="form-select mb-3 mb-sm-0" id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected>Question</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                        </select>
                                        <div class="d-flex gap-2 align-items-center">
                        <a href="#" class="btn btn-light">
                         Cancel
                        </a>
                        <a href="#" class="btn btn-secondary">
                         Save
                        </a>
                        <a href="#" class="btn btn-primary">
                         Publish
                        </a>
</div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-6 col-lg-4 col-12">
                                        <div class="card">
                                        <div class="row align-items-center mb-3">
                                        <div class="col-auto">
                                            <label for="inputPassword6" class="col-form-label">Base Language</label>
                                         </div>
                                        <div class="col-6">
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                        </select>
                                          </div>
                                          <div class="col-12">
                                                <span id="passwordHelpInline" class="form-text">
                                                We recomented selecting the language wrote your survey in
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>

                            

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Footer  here -->
            <!-- ============================================================== -->
            <?php include 'footer.php';?>
        </div>
    </div>
    <!-- END layout -->


    <!-- ============================================================== -->
    <!-- Js And Script  here -->
    <!-- ============================================================== -->
    <?php include 'js.php';?>
</body>

</html>