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
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="mb-0 f-600">Edit Survey 01</h4>
                        <button class="btn btn-link">
                            <i data-lucide="pencil-line"></i>
                        </button>
                    </div>
                    <div class="ms-md-auto d-flex align-items-center gap-2 mt-2 mt-sm-0">
                        <ul class="nav  nav-pills gap-2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#builder" role="tab">
                                    <div class="f-500">Builder</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#integration" role="tab">
                                    <div class="f-500">Integration</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#distribution" role="tab">
                                    <div class="f-500">Distribution</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#analysis" role="tab">
                                    <div class="f-500">Data&Analycis</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#result" role="tab">
                                    <div class="f-500">Result</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#report" role="tab">
                                    <div class="f-500">Report</div>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="bg-white d-flex p-4 rounded-lg d-flex">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSettings"
                            aria-controls="offcanvasRight">Settings <i data-lucide="chevron-right"></i></button>
                        <button class="btn btn-link">Theme <i data-lucide="chevron-right"></i></button>
                        <button class="btn btn-link">Logic <i data-lucide="chevron-right"></i></button>
                        <button class="btn btn-link">Translate <i data-lucide="chevron-right"></i></button>
                    </div>
                    <div class="ms-sm-auto">
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn btn-link" id="country-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i data-lucide="notepad-text" class=""></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div data-simplebar style="max-height: 250px;">
                                    <a href="" class="dropdown-item">
                                        Page1
                                    </a>
                                    <a href="" class="dropdown-item">
                                        Page2
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-link"> <i data-lucide="eye"></i></button>
                    </div>
                </div>
                <div class="tab-content p-4 bg-white rounded-lg  mt-3">
                    <div class="tab-pane active" id="builder" role="tabpanel">
                        ccc

                    </div>
                    <div class="tab-pane" id="integration" role="tabpanel">Integration</div>
                    <div class="tab-pane" id="distribution" role="tabpanel">Distribution</div>
                    <div class="tab-pane" id="analysis" role="tabpanel">Analysis</div>
                    <div class="tab-pane" id="result" role="tabpanel">Result</div>
                    <div class="tab-pane" id="report" role="tabpanel">Report</div>
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
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasSettings" aria-labelledby="offcanvasSurveyLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasSurveyLabel">Survey Setting</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
            <div class="accordion" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#General" aria-expanded="false" aria-controls="General">
                            General
                        </button>
                    </h2>
                    <div id="General" class="accordion-collapse collapse" aria-labelledby="General-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div>
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Survey name</label>
                                    <input type="text" class="form-control" id="survey namet"
                                        placeholder="Enter survey Name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Survey Title</label>
                                    <input type="text" class="form-control" id="survey title" placeholder="Enter Title">
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                        <label class="form-check-label" for="formCheck1">
                                            Show title
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Survey Category</label>
                                    <select class="form-select">
                                        <option>Category</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Survey Description</label>
                                    <textarea class="form-control" rows="4" placeholder="Enter About your description"
                                        value="About your description"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Base Language</label>
                                    <select class="form-select">
                                        <option>English</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="formrow-firstname-input">Add Logo</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="inputGroupFile04"
                                            aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label" for="formCheck1">
                                        Show Logo
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#Pages" aria-expanded="false" aria-controls="Pages">
                            Pages
                        </button>
                    </h2>
                    <div id="Pages" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="mb-0">Page Details</h6>
                                    <small class="text-muted ">You can edit this content in-place.</small>
                                </div>
                                <button class="btn btn-sm btn-outline-primary d-flex align-items-center"><i
                                        data-lucide="circle-plus"></i>
                                    <div class="w-100">Add Page</div>
                                </button>
                                <!-- button done -->
                                <button class="btn btn-sm btn-primary d-flex align-items-center d-none"><i
                                        data-lucide="circle-check"></i>
                                    <div class="w-100">Done</div>
                                </button>
                            </div>
                            <div class="accordion accordion-flush my-4" id="accordionInner">
                                <div class="accordion-item">
                                    <h6 class="accordion-header d-flex align-items-center text-sm py-2"
                                        id="flush-headingThree">
                                        <div>
                                            <i class="text-muted" data-lucide="layout-grid"></i>
                                            <sapn class="f-600">Page-01</span>
                                        </div>
                                        <div class="d-flex align-items-center ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-link p-1"><i
                                                    data-lucide="pencil-line"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-link p-1"><i
                                                    data-lucide="trash-2"></i></a>
                                            <button class="accordion-button collapsed  bg-transparent btn p-1"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#detailsOne"
                                                aria-expanded="false" aria-controls="detailsOne">

                                            </button>

                                        </div>

                                    </h6>
                                    <div id="detailsOne" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionInner">
                                        <div class="accordion-body">
                                            <div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-firstname-input">Survey
                                                        name</label>
                                                    <input type="text" class="form-control" id="survey namet"
                                                        placeholder="Enter survey Name">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-firstname-input">Page
                                                        Title</label>
                                                    <input type="text" class="form-control" id="survey title"
                                                        placeholder="Enter Title">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="formrow-firstname-input">Page
                                                        Description</label>
                                                    <textarea class="form-control" rows="4"
                                                        placeholder="Enter About your description"
                                                        value="About your description"></textarea>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header d-flex align-items-center text-sm py-2"
                                        id="flush-headingTwo">
                                        <div>
                                            <i class="text-muted" data-lucide="layout-grid"></i>
                                            <sapn class="f-600">Page-02</span>
                                        </div>
                                        <div class="d-flex align-items-center ms-auto">
                                            <a href="javascript:void(0);" class="btn btn-link p-1"><i
                                                    data-lucide="pencil-line"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-link p-1"><i
                                                    data-lucide="trash-2"></i></a>
                                            <button class="accordion-button collapsed  bg-transparent btn p-1"
                                                type="button" data-bs-toggle="collapse" data-bs-target="#detailsTwo"
                                                aria-expanded="false" aria-controls="detailsTwo">

                                            </button>

                                        </div>

                                    </h6>
                                    <div id="detailsTwo" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionInner">
                                        <div class="accordion-body">SurveySettings</div>
                                    </div>
                                </div>

                            </div>

                            <div class="d-flex justify-content-around">
                                <div class="form-check form-check-inline me-0">
                                    <input class="form-check-input" type="checkbox" id="formCheck1">
                                    <label class="form-check-label text-nowrap" for="formCheck1">
                                        Show page title
                                    </label>
                                </div>
                                <div class="form-check form-check-inline me-0">
                                    <input class="form-check-input" type="checkbox" id="formCheck2">
                                    <label class="form-check-label text-nowrap" for="formCheck2">
                                        Show page description
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h6>Page Transition</h6>
                                <small class="text-muted"></small>
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradio" id="slide" autocomplete="off"
                                        checked>
                                    <label class="btn btn-outline-primary" for="slide">Slide</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="fade" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="fade">fade</label>

                                    <input type="radio" class="btn-check" name="btnradio" id="flip" autocomplete="off">
                                    <label class="btn btn-outline-primary" for="flip">Flip</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#SurveySetting" aria-expanded="false" aria-controls="SurveySetting">
                        SurveySetting
                    </button>
                </h2>
                <div id="SurveySetting" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <div class="mb-3">
                            <label class="form-label" for="formrow-firstname-input">Survey Category</label>
                            <select class="form-select">
                                <option>Category</option>
                                <option>Large select</option>
                                <option>Small select</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column gap-2">
                            <div class="form-check form-check-inline me-0">
                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                <label class="form-check-label" for="formCheck1">
                                    Show progress bar
                                </label>
                            </div>
                            <div class="form-check form-check-inline me-0">
                                <input class="form-check-input" type="checkbox" id="formCheck2">
                                <label class="form-check-label" for="formCheck2">
                                    Show review before complete
                                </label>
                            </div>
                            <div class="form-check form-check-inline me-0">
                                <input class="form-check-input" type="checkbox" id="formCheck3">
                                <label class="form-check-label" for="formCheck3">
                                    Show back button
                                </label>
                            </div>
                            <div class="form-check form-check-inline me-0">
                                <input class="form-check-input" type="checkbox" id="formCheck4">
                                <label class="form-check-label" for="formCheck4">
                                    Proceed to next page automatically
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#NavSetting" aria-expanded="false" aria-controls="NavSetting">
                        NavSetting
                    </button>
                </h2>
                <div id="NavSetting" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">NavSetting</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#Security" aria-expanded="false" aria-controls="Security">
                        Security
                    </button>
                </h2>
                <div id="Security" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Security</div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex align-items-center justify-content-end flex-wrap gap-3 p-4">
        <button type="button" class="btn btn-light"> cancel</button>
        <button type="button" class="btn btn-secondary">Apply</button>
    </div>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
            <div class="d-flex align-items-center">
                <div class="me-3  h-44 w-44 rounded-circle overflow-hidden ">
                    <img src="assets/images/users/avatar.jpg" class="h-100 w-100 object-cover" alt="">
                </div>
                <div class="flex-grow-1">
                    <a href="#" class="f-600 text-dark text-base">Ajeeshmon</a>
                    <div class="text-muted text-xs">UI Developer</div>
                </div>
            </div>
            <hr>
            <div class="my-4">
                <h6 class="f-600">Organization</h6>
                <div class="my-4">
                    <a class="dropdown-item p-2" href="#">
                        <i data-lucide="user-cog"></i>
                        Admin Setting
                    </a>
                    <a class="dropdown-item p-2" href="#">
                        <i data-lucide="square-user-round"></i>
                        Organization Members
                    </a>
                    <a class="dropdown-item p-2" href="#p">
                        <i data-lucide="newspaper"></i>
                        Plan & Billing
                    </a>
                    <a class="dropdown-item p-2" href="#">
                        <i data-lucide="trello"></i>
                        Developer Apps
                    </a>
                </div>
                <h6 class="f-600">Your Organization</h6>
                <div class="my-4">
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center flex-grow-1">
                            <div
                                class="me-3 h-38 w-38 rounded-circle overflow-hidden d-flex flex-center flex-shrink-0 bg-dark text-xs text-white f-400 justify-content-center align-items-center">
                                UE
                            </div>
                            <div class="">
                                <a href="#" class="f-500 text-dark">Utlabore Etdolore</a>
                                <div class="text-muted text-xs">Android Developer</div>
                            </div>
                        </div>
                        <span class="ms-auto badge bg-light f-600 align-self-start">Owner</span>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center flex-grow-1">
                            <div
                                class="me-3 h-38 w-38 rounded-circle overflow-hidden d-flex flex-center flex-shrink-0 bg-danger text-xs text-white f-400 justify-content-center align-items-center">
                                ti
                            </div>
                            <div class="">
                                <a href="#" class="f-500 text-dark">Tempor Incididunt</a>
                                <div class="text-muted text-xs">Android Developer</div>
                            </div>
                        </div>
                        <span class="ms-auto badge bg-light f-600 align-self-start">Owner</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Js And Script  here -->
    <!-- ============================================================== -->
    <?php include 'js.php';?>
</body>

</html>