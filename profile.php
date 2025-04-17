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
                        <h4 class="mb-0 f-600">Your Settings</h4>
                    </div>
                    <div class="ms-md-auto d-flex align-items-center gap-2 mt-2 mt-sm-0">
                        <ul class="nav  nav-pills gap-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#setting1" role="tab">
                                    <div class="f-500">Basic details</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#setting2" role="tab">
                                    <div class="f-500">Pages</div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="tab-content p-4 bg-white rounded-lg  mt-3">
                    <div class="tab-pane active" id="setting1" role="tabpanel">
                        <ul class="nav  nav-pills gap-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#setting11" role="tab">
                                    <div class="f-500">Account</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#setting22" role="tab">
                                    <div class="f-500">Pages</div>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content p-4 bg-white rounded-lg px-0 mt-3">
                            <div class="tab-pane active" id="setting11" role="tabpanel">
                                <h5>Your Account</h5>
                            </div>
                            <div class="tab-pane" id="setting22" role="tabpanel">
                                ccc
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="setting2" role="tabpanel">22</div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">

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