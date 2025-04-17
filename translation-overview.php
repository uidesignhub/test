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
                    <div class="">
                        <h4 class="mb-0 f-600">Translation Overview</h4>
                    </div>
                    <div class="ms-md-auto d-flex align-items-center gap-2 mt-2 mt-sm-0">
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-6 col-lg-4 col-12">
                                        <div class="row align-items-center mb-3">
                                        <div class="col-auto">
                                            <label for="inputPassword6" class="col-form-label">Base Language</label>
                                         </div>
                                        <div class="col-6">
                                            <div class="dropdown flex-fill">
                                                <button type="button"
                                                    class="btn border w-100 d-flex justify-content-between"
                                                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="f-600">English</span>
                                                    <i data-lucide="chevron-down" class="h-20"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 w-100"
                                                    aria-labelledby="page-header-notifications-dropdown">
                                                    <div data-simplebar style="max-height: 250px;">
                                                        <a href="" class="dropdown-item">Arabic</a>
                                                        <a href="" class="dropdown-item">English</a>
                                                        <a href="" class="dropdown-item">Spanish</a>
                                                        <a href="" class="dropdown-item">French</a>
                                                        <a href="" class="dropdown-item">Japanese</a>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="col-12">
                                                <span id="passwordHelpInline" class="form-text">
                                                We recomented selecting the language wrote your survey in
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-auto ms-lg-auto col-sm-auto d-flex align-items-center gap-2">
                                        <button class="btn btn-light">
                                                    <i data-lucide="download"></i>
                                        </button>
                                        <button class="btn btn-light">
                                                    <i data-lucide="upload"></i>
                                        </button>
                                        <button class="btn btn-light">
                                                   Preview
                                        </button>
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