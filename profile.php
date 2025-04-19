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
                                <div class="mb-5">
                                <h5 class="f-600">Your Account</h5>
                                <div class="text-muted">You can update password,Name an mand mange information</div>
</div>
                                <div class="row">
                                    <div class="col-sm-auto">
                                    <div class="me-3  h-120 w-120 rounded-circle overflow-hidden position-relative">
                                            <div
                                                class="position-absolute w-100 h-100 overlay-dark d-flex justify-content-center align-items-center gap-1">
                                                <button class="btn text-light fill-light p-1 shadow-none d-flex align-items-center"
                                                    type="button">
                                                    <i data-lucide="camera" class="h-22 fill-primary text-light"></i>
                                                    <input class="form-control w-0 h-0 position-absolute opacity-0"
                                                        type="file" id="formFile" style=" width: 0;">
                                                </button>
                                            </div>
                                            <img src="https://mir-s3-cdn-cf.behance.net/user/230/303770115080959.6042143d09bfc.jpg"
                                                class="h-100 w-100 object-cover rounded-circle" alt="">
                                        </div>
                                    </div>
                                    <div class="col mt-sm-5">
                                        <div class="d-flex align-items-end justify-content-between">
                                            <div>
                                             <h6 class="fw-bold">Ajeeshmon</h6>  
                                             <div class="text-muted">Joined Grandcheff at 2025</div>
                                            </div>
                                            <button class="btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEdit"
                                            aria-controls="offcanvasRight"><i data-lucide="pencil-line" class=""></i></button>
                                       </div>
                                       <hr>
                                        <div class="">
                                        <div class="d-flex align-items-end justify-content-between">  
                                            <div>
                                             <h6 class="f-600 mb-3">Login Details</h6>  
                                             <label class="mb-1 form-label">Your Email ID</label>
                                             <div class="">mail@grainchef.com</div>
                                            </div>
                                            <button class="btn"><i data-lucide="pencil-line" class=""></i></button>
</div>
<div class="mt-4"> 
                                             <div class="text-muted">Your Email & Password are currently linked to your social account</div>
                                             <button class="btn btn-link px-0">Change Passoword</button>
                                            </div>
                                       </div>
                                       <hr>
                                       <div class="d-flex align-items-end justify-content-between">
                                            <div>
                                             <h6 class="f-600 mb-3">Language</h6>  
                                             <div>
                                             <label class="form-label" for="formrow-firstname-input">Your Account Language</label>
                                             <select class="form-select" fdprocessedid="g3llr4">
                                                            <option>English</option>
                                                            <option>Large select</option>
                                                            <option>Small select</option>
                                                        </select>
                                             </div>
                                            </div>
                                            <button class="btn"><i data-lucide="pencil-line" class=""></i></button>
                                       </div>
                                       <hr>
                                       <div class="d-flex align-items-end justify-content-between">
                                            <div>
                                             <h6 class="f-600 ">Title name</h6>  
                                             <div class="text-muted">Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</div>
                                            </div>
                                            <button class="btn"><i data-lucide="pencil-line" class=""></i></button>
                                       </div>
                                </div>
                               </div>
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
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEdit" aria-labelledby="offcanvasSurveyLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasSurveyLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
            <h6 class="f-600 mb-3">Create New Survey</h6>
            <div>
                        <div class="mb-3">
                            <label class="form-label" for="formrow-firstname-input">Survey name</label>
                            <input type="text" class="form-control" id="survey namet" placeholder="Enter survey Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="formrow-firstname-input">Survey Title</label>
                            <input type="text" class="form-control" id="survey title" placeholder="Enter Title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="formrow-firstname-input">Survey Category</label>
                            <select class="form-select" fdprocessedid="bd5yxi">
                                <option>Category</option>
                                <option>Large select</option>
                                <option>Small select</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="formrow-firstname-input">Billing Address</label>
                            <textarea class="form-control" rows="4" placeholder="Enter About your description"
                                value="About your description"></textarea>
                        </div>
                    </div>
</div>
<div class="d-flex align-items-center justify-content-end flex-wrap gap-3 p-4">
            <button type="button" class="btn btn-light"> cancel</button>
            <button type="button" class="btn btn-secondary">Save</button>
        </div>
        </div>

    <!-- ============================================================== -->
    <!-- Js And Script  here -->
    <!-- ============================================================== -->
    <?php include 'js.php';?>
</body>

</html>