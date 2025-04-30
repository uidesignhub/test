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
                        <button class="btn btn-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTheme"
                        aria-controls="offcanvasRight">Theme <i data-lucide="chevron-right"></i></button>
                        <button class="btn btn-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogic"
                            aria-controls="offcanvasRight">Logic <i data-lucide="chevron-right"></i></button>
                        <a class="btn btn-link" href="translation-overview.php">Translate <i data-lucide="chevron-right"></i></a>
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
                <div class="bg-white rounded-lg d-flex align-items-center p-4 mt-3">
                    <div>
                        <h5>Welcome!</h5>
                        <p class="mb-0 text-muted">Eratsed diam sadipscing elitr tempor invidunt utlabore et dolore
                            magnasadipscing elitr temptempor invidunt utlabore et dolore magnasadipscing (Edit message)
                        </p>
                    </div>
                    <div class="d-flex align-items-center ms-auto">
                        <a href="javascript:void(0);" class="btn btn-link p-1">
                            <i data-lucide="pencil-line"></i></a>
                        <a href="javascript:void(0);" class="btn  p-1">
                            <i data-lucide="trash-2" class="text-danger fill-white"></i>
                        </a>
                    </div>
                </div>
                <div class="tab-content mt-3 position-relative">
                    <div class="tab-pane active" id="builder" role="tabpanel">
                        <div class="card p-4">
                         <div class="d-flex align-items-center pb-4">
                            <div class="d-flex align-items-center gap-1">
                                <i data-lucide="layout-grid" class="text-muted w-20 h-20"></i>
                                <sapn class="f-600">Q1</sapn>
                                <div class="ms-1 text-muted">Rank Order</div>
                            </div>
                            <div class="d-flex align-items-center ms-auto">
                                <a href="javascript:void(0);" class="btn btn-link p-1">
                                    <i data-lucide="notepad-text"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-link p-1">
                                    <i data-lucide="pencil-line"></i>
                                </a>
                                <a href="javascript:void(0);" class="btn btn-link p-1">
                                    <i data-lucide="trash-2" class="text-danger fill-white"></i>
                                </a>

                            </div>
                            </div>
                          <div class="card-body d-flex flex-column gap-3 border border-primary rounded-lg">
                            <input type="text" class="form-control rounded-pill" plaseholder="" value="Eratsed diam sadipscing elitr tempor invidunt utlabore et dolore magnasadipscing elitr tempor?">
                            <div class="d-flex align-items-center gap-2 p-1">
                                <i data-lucide="layout-grid" class="text-muted"></i>
                                <sapn class="f-600">1</sapn>
                                <div class="ms-1">Rank Order</div>
                            </div>
                            <div class="d-flex align-items-center gap-2 p-1">
                                <i data-lucide="layout-grid" class="text-muted"></i>
                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                <label class="form-check-label ms-2" for="formCheck1">
                                                Rank Order
                                                </label>
                                            </div>
                            </div>
                            <div class="d-flex align-items-center gap-2 border rounded-lg p-1">
                                <i data-lucide="layout-grid" class="text-muted"></i>
                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="formCheck1">
                                                <label class="form-check-label" for="formCheck1">
                                                </label>
                                            </div>
                                <input type="text" class="form-control border-0 px-0" value="question name">
                                <div class="ms-auto d-flex">
                                <i data-lucide="circle-check" class=""></i>
                                <i data-lucide="circle-x" class=""></i>
                                </div>
                            </div>
                            <div class="">
                                <button class="btn btn-outline-primary d-flex align-items-center">
                                    <i data-lucide="circle-plus" class=""></i>
                                <div class="w-100">Add Page</div>
                                </button>
                            </div>
</div>
                        </div>
                        <!-- page breaker button -->
<div class="d-flex align-items-center"><button class="btn btn-primary p-1 d-flex rounded-circle"><i data-lucide="circle-plus" class="w-12 h-12"></i></button><hr class="w-100"></div>
                    </div>
                    <div class="tab-pane" id="integration" role="tabpanel">Integration</div>
                    <div class="tab-pane" id="distribution" role="tabpanel">Distribution</div>
                    <div class="tab-pane" id="analysis" role="tabpanel">Analysis</div>
                    <div class="tab-pane" id="result" role="tabpanel">Result</div>
                    <div class="tab-pane" id="report" role="tabpanel">Report</div>
                    <div class="position-fixed bottom-0 mb-4 ms-1 z-1"><button class="btn btn-secondary rounded-circle p-2"><i data-lucide="plus" class="w-24 h-24"></i></button></div>
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
    <!-- Offcanvas Settings -->
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
                            <div class="mt-3">
                                <label class="form-label" for="formrow-firstname-input">Survey Availablity</label>
                                <div class=" opacity-50 border border-primary rounded p-3 mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="f-600">Leave survey open to collect responses</div>
                                        <i class="text-white fill-primary w-32 h-32" data-lucide="circle-check"></i>
                                    </div>
                                </div>
                                <div class=" opacity-100 border border-primary rounded p-3">
                                    <div class="d-flex  justify-content-between  align-items-start">
                                        <div class="f-600">Leave survey open to collect responses</div>
                                        <i class="text-white fill-primary w-32 h-32" data-lucide="circle-check"></i>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 mb-2">
                                            <label class="form-label f-500" for="formrow-firstname-input">Start
                                                Date</label>
                                            <input class="form-control" type="date" value="2019-08-19" id="date">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <label class="form-label f-500" for="formrow-firstname-input">Start
                                                Time</label>
                                            <input class="form-control" type="time" value="13:45:00" id="time">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label f-500" for="formrow-firstname-input">End
                                                Date</label>
                                            <input class="form-control" type="date" value="2019-08-19" id="date">
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label f-500" for="formrow-firstname-input">End
                                                Time</label>
                                            <input class="form-control" type="time" value="13:45:00" id="time">
                                        </div>
                                    </div>
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
                        <div class="accordion-body">
                            <label for="validationCustom01" class="form-label">Add More Button</label>
                            <div class="dropdown mb-2">
                                <button type="button" class="btn border w-100 d-flex justify-content-between"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="">Choose</span>
                                    <i data-lucide="chevron-down" class="h-20"></i>
                                </button>
                                <div class="dropdown-menu drobdown-menu-lg dropdown-menu-end px-2">
                                    <div data-simplebar style="max-height: 250px;" class="w-100">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="formRadios"
                                                    id="icon-1" checked>
                                                <label class="form-check-label" for="icon-1">
                                                    Title name
                                                </label>
                                            </div>
                                            <button class="btn btn-sm btn-light"><i data-lucide="trash"></i></button>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="formRadios"
                                                    id="icon-1" checked>
                                                <label class="form-check-label" for="icon-1">
                                                    Title name
                                                </label>
                                            </div>
                                            <button class="btn btn-sm btn-outline-light"><i
                                                    data-lucide="flag"></i></button>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end flex-wrap gap-3 mt-3">
                                        <button class="btn btn-light">Cancel</button>
                                        <button class="btn btn-primary">Done</button>
                                    </div>
                                </div>

                            </div>

                            <form class="row g-3 needs-validation" novalidate>
                                <div class="col-6">
                                    <label for="validationCustom01" class="form-label">Previous Button</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" id="validationCustom01" value="|"
                                            required placeholder="Enter name">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="formRadios"
                                                id="formRadios1" checked="">
                                            <label class="form-check-label" for="formRadios1">
                                                Button With Text
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="validationCustom02" class="form-label">Nex Button</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control position-relative"
                                            id="validationCustom02" value="Next" required>
                                        <div class="position-absolute end-0 top-0 m-1">
                                            <i data-lucide="circle-check" class="text-white fill-primary w-30 h-30"></i>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="formRadios"
                                                id="formRadios1" checked="">
                                            <label class="form-check-label" for="formRadios1">
                                                Button With Text
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="validationCustom01" class="form-label">Submit Button</label>
                                    <button class="btn btn-outline-primary">Submit</button>
                                </div>
                            </form>
                        </div>
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
                        <div class="accordion-body">
                            <label class="form-label" for="formrow-firstname-input">Survey Access</label>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                                    checked>
                                <label class="btn btn-outline-primary" for="btnradio1">Available to Anyone</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-primary" for="btnradio2">Available to Anyone</label>

                            </div>
                            <div class="mt-3">
                                <label class="form-label" for="formrow-firstname-input">Password Protection</label>
                                <div class=" opacity-50 border border-primary rounded p-3 mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="f-500">Activate Password</div>
                                        <i class="text-white fill-primary w-32 h-32" data-lucide="circle-check"></i>
                                    </div>
                                </div>
                                <div class=" opacity-100 border border-primary rounded p-3">
                                    <div class="d-flex  justify-content-between  align-items-start">
                                        <div class="f-500">Activate Password</div>
                                        <i class="text-white fill-primary w-32 h-32" data-lucide="circle-check"></i>
                                    </div>
                                    <div class="position-relative my-2">
                                        <input type="password" class="form-control" id="password-input"
                                            placeholder="Enter Password" fdprocessedid="19vgf">
                                        <button type="button" class="btn btn-link position-absolute end-0 top-0"
                                            id="password-addon" fdprocessedid="fjbwz">
                                            <i data-lucide="eye" class="h-20"></i>
                                            <!-- <i data-lucide="eye-off"></i> -->
                                        </button>
                                        <small class="text-muted">*Please remember this password for access this
                                            survey</small>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                        <label class="form-check-label" for="formCheck1">
                                            Prevent Multiple Submissions
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-end flex-wrap gap-3 p-4">
            <button type="button" class="btn btn-light"> cancel</button>
            <button type="button" class="btn btn-secondary">Apply</button>
        </div>
    </div>
    <!-- offcanvas Logic Start-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasLogic" aria-labelledby="offcanvasSurveyLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasSurveyLabel">Logics</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
            <div class="accordion" id="accordionLogic">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#Choice" aria-expanded="true" aria-controls="Choice">
                            Choice Option
                        </button>
                    </h2>
                    <div id="Choice" class="accordion-collapse collapse show" aria-labelledby="Choice-headingOne"
                        data-bs-parent="#accordionLogic">
                        <div class="accordion-body">
                            <div class="mb-3">
                                <label class="form-label" for="formrow-firstname-input">Choice</label>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <button class="btn  btn-outline-primary d-flex align-items-center"><i
                                                data-lucide="circle-plus" class="circle-plus"></i>
                                            <div class="w-100">Add New</div>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <select class="form-select">
                                            <option>Predefined Choice</option>
                                            <option>Large select</option>
                                            <option>Small select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-primary rounded p-2 mb-3">
                                <div class="d-flex align-items-center text-sm  gap-2 border-bottom">
                                    <div class="d-flex align-items-center">
                                        <i class="text-muted" data-lucide="layout-grid"></i>
                                        <label class="mb-0">01</label>
                                    </div>
                                    <div class="w-100">
                                        <input class="form-control" type="text" plaseholder=""
                                            value="Extremely Satisfied">
                                    </div>
                                    <div class="d-flex align-items-center ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-link p-1"><i
                                                data-lucide="pencil-line"></i></a>
                                        <a href="javascript:void(0);" class="btn  p-1">
                                            <i data-lucide="trash-2" class="text-danger fill-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="p-2 px-1">
                                    <div class="input-group mb-2">
                                        <div class="input-group-text bg-transparent">Choice Label</div>
                                        <input type="text" class="form-control" id="" value="Extremely Satisfied"
                                            placeholder="Extremely Satisfied">
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-text bg-transparent">Choice Value</div>
                                        <input type="text" class="form-control" id="" value="1" placeholder="1">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex align-items-center ">
                                        <div class="form-label f-500" for="formrow-firstname-input">Make the Option
                                            Visible if
                                        </div>
                                        <button class="btn btn-link p-1 ms-auto" data-bs-toggle="modal"
                                            data-bs-target="#editModal"><i data-lucide="pencil-line"></i></button>
                                    </div>
                                    <textarea class="form-control" rows="4" placeholder="Enter About your description"
                                        value="About your description"></textarea>
                                </div>
                            </div>
                            <div class="border rounded p-2 mb-3">
                                <div class="d-flex align-items-center text-sm  gap-2">
                                    <div class="d-flex align-items-center">
                                        <i class="text-muted" data-lucide="layout-grid"></i>
                                        <label class="mb-0">02</label>
                                    </div>
                                    <div class="w-100">
                                        <input class="form-control" type="text" plaseholder=""
                                            value="Extremely Satisfied">
                                    </div>
                                    <div class="d-flex align-items-center ms-auto">
                                        <a href="javascript:void(0);" class="btn btn-link p-1"><i
                                                data-lucide="pencil-line"></i></a>
                                        <a href="javascript:void(0);" class="btn  p-1">
                                            <i data-lucide="trash-2" class="text-danger fill-white"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label f-500" for="formrow-firstname-input">Copy choice from the
                                    following question
                                </label>
                                <div class="col">
                                    <select class="form-select">
                                        <option>Select a question</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label f-500" for="formrow-firstname-input">Choice Order
                                </label>
                                <div class="col">
                                    <select class="form-select">
                                        <option>None</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="radio" name="formRadios" id="formRadios1"
                                    checked="">
                                <label class="form-check-label" for="formRadios1">
                                    Wrap choice <i data-lucide="info" class="w-12 h-12"></i>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#Conditions" aria-expanded="false" aria-controls="Conditions">
                        Conditions
                    </button>
                </h2>
                <div id="Conditions" class="accordion-collapse collapse" aria-labelledby="Conditions-headingOne"
                    data-bs-parent="#accordionLogic">
                    <div class="accordion-body">
                        <div class="mb-3">
                            <div class="d-flex align-items-center ">
                                <div class="form-label f-500 d-flex align-items-center gap-1"
                                    for="formrow-firstname-input">Make the Option
                                    Visible if <i data-lucide="info" class="w-12 h-12"></i>
                                </div>
                                <button class="btn btn-link p-1 ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#editModal"><i data-lucide="pencil-line"></i></button>
                            </div>
                            <textarea class="form-control" rows="3" placeholder="Enter About your description"
                                value="About your description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#Data" aria-expanded="false" aria-controls="Data">
                        Data
                    </button>
                </h2>
                <div id="Data" class="accordion-collapse collapse" aria-labelledby="Data-headingOne"
                    data-bs-parent="#accordionLogic">
                    <div class="accordion-body">
                        <div class="mb-3">
                            <div class="d-flex align-items-center ">
                                <div class="form-label f-500 d-flex align-items-center gap-1"
                                    for="formrow-firstname-input">Join Identifire <i data-lucide="info"
                                        class="w-12 h-12"></i>
                                </div>
                            </div>
                            <input class="form-control" type="text" placeholder="Enter About your description"
                                value="About your description">
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Change Default Answer"
                                aria-label="Change Default Answer" aria-describedby="button-addon2">
                            <button class="btn btn-primary" type="button" id="button-addon2">Clear</button>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="radio" name="formRadios" id="formRadios1" checked="">
                            <label class="form-check-label d-flex align-items-center gap-1" for="formRadios1">
                                Use display values in dynamic texts <i data-lucide="info" class="w-12 h-12"></i>
                            </label>
                        </div>
                        <div class="">
                            <div class="d-flex align-items-center ">
                                <div class="form-label f-500 d-flex align-items-center gap-1"
                                    for="formrow-firstname-input">Clear hidden question values <i data-lucide="info"
                                        class="w-12 h-12"></i>
                                </div>
                            </div>
                            <select class="form-select">
                                <option>Inherit</option>
                                <option>Large select</option>
                                <option>Small select</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#VAlidation" aria-expanded="false" aria-controls="VAlidation">
                        Validation
                    </button>
                </h2>
                <div id="VAlidation" class="accordion-collapse collapse" aria-labelledby="VAlidation-headingOne"
                    data-bs-parent="#accordionLogic">
                    <div class="accordion-body">
                        <div class="mb-3">
                            <div class="d-flex align-items-center ">
                                <div class="form-label f-600 d-flex align-items-center gap-1"
                                    for="formrow-firstname-input">Validation rules <i data-lucide="info"
                                        class="w-12 h-12"></i>
                                </div>
                                <button class="btn btn-link p-1 ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#LogicModal"><i data-lucide="circle-plus"
                                        class="w-20 h-20"></i></button>
                            </div>
                            <div class="border rounded mb-3">
                                <div class="input-group">
                                    <select class="form-select border-0">
                                        <option>Inherit</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                    <div class="d-flex align-items-center ">
                                        <a href="javascript:void(0);" class="btn btn-link p-1">
                                            <i data-lucide="pencil-line" class=""> </i>
                                        </a>
                                        <a href="javascript:void(0);" class="btn  p-1">
                                            <i data-lucide="trash-2" class="text-danger fill-white"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- the element collapse time when open \/ -->
                                <div class="p-2 border-top">
                                    <input type="text" class="form-control" placeholder="Maximum Value">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-label f-500" for="formrow-firstname-input">Error message for required
                                    question
                                </div>
                                <input type="text" class="form-control" placeholder="Error">
                            </div>
                            <div class="mb-3">
                                <div class="form-label f-500 " for="formrow-firstname-input">Validation expression
                                </div>
                                <input type="text" class="form-control" placeholder="validation">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-end flex-wrap gap-3 p-4">
            <button type="button" class="btn btn-light"> cancel</button>
            <button type="button" class="btn btn-secondary">Apply</button>
        </div>
    </div>
        <!-- offcanvas Theme Start-->
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasTheme" aria-labelledby="offcanvasSurveyLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasSurveyLabel">Theme Customizer </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body px-4">
        <h6 class="f-600 mb-3">Theme Layout</h6>
        <div class="row">
            <div class="col-sm-6">
        <label>
                            <input type="radio" name="themeOne" class="card-radio d-none">
                                <div class="card">
                                <div class="card-body p-2">
                                    <img class="img-fluid rounded mb-2" src="https://images.unsplash.com/photo-1709238810760-bae86f4c2204?q=80&amp;w=2071&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                    <div class="text-sm f-400 d-flex align-items-center gap-1"><i data-lucide="circle-check" class="icon w-20 h-20"></i><span>Theme one </span></div>
                                </div>
                                </div>
                            </label>
</div>
            <div class="col-sm-6">
        <label>
                            <input type="radio" name="themeTwo" class="card-radio d-none">
                                <div class="card">
                                <div class="card-body p-2">
                                    <img class="img-fluid rounded mb-2" src="https://images.unsplash.com/photo-1709238810760-bae86f4c2204?q=80&amp;w=2071&amp;auto=format&amp;fit=crop&amp;ixlib=rb-4.0.3&amp;ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                                    <div class="text-sm f-400 d-flex align-items-center gap-1"><i data-lucide="circle-check" class="icon w-20 h-20"></i><span>Theme two </span></div>
                                </div>
                                </div>
                            </label>
</div>
        </div>    
        <h6 class="f-600 mb-3">Color Scheme</h6>
        <div class="row">
                            <div class="col-auto">
                            <div class="inputRadio">
                                <input id="option1" name="CustomLogo" type="checkbox">
                                <label for="option1" class="">Color From Logo</label>
                            </div>
                            </div>
                            <div class="col-auto">
                            <div class="inputRadio">
                                <input id="option2" name="customcolor" type="checkbox" checked>
                                <label for="option2" class="">Custom Color</label>
                            </div>
                            </div>
                            </div>
        </div>
        <div class="d-flex align-items-center justify-content-end flex-wrap gap-3 p-4">
            <button type="button" class="btn btn-light"> cancel</button>
            <button type="button" class="btn btn-secondary">Apply</button>
        </div>

    </div>
    <!--choice option modal - logic settings -->
    <div class="modal fade " id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="staticBackdropLabel">Make the Option Visible If</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">If</label>
                            <select class="form-select" id="validationCustom01" required>
                                <option selected disabled value="">Question 1 .Raw 1</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6 align-self-end">
                            <select class="form-select" id="validationCustom02" required>
                                <option selected disabled value="">Equal</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom03" class="form-label">Row 1</label>
                            <select class="form-select" id="validationCustom03" required>
                                <option selected disabled value="">Column</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>


                        <div class="col-md-2">
                            <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">and</option>
                                <option>or</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" id="validationCustom05" required>
                                <option selected disabled value="">Select</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" id="validationCustom06" required>
                                <option selected disabled value="">Equal</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-2 align-self-end">
                            <button class="btn btn-outline-danger">
                                <i data-lucide="trash-2"></i>
                            </button>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom07" class="form-label">Row 2</label>
                            <select class="form-select" id="validationCustom07" required>
                                <option selected disabled value="">Select</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn  btn-outline-primary d-flex align-items-center">
                                <i data-lucide="circle-plus" class=""></i>
                                <div class="w-100">Add New</div>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Apply</button>
                </div>
            </div>
        </div>
    </div>
    <!--Logic display modal - Display logic settings -->
    <div class="modal fade " id="LogicModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <div>
                        <h5 class="modal-title" id="staticBackdropLabel">Display Logic</h5>
                        <div>(How satisfied are you with the following experience with our company? Product…)</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">If</label>
                            <select class="form-select" id="validationCustom01" required>
                                <option selected disabled value="">Question 1 .Raw 1</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-6 align-self-end">
                            <select class="form-select" id="validationCustom02" required>
                                <option selected disabled value="">Equal</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom03" class="form-label">Row 1</label>
                            <select class="form-select" id="validationCustom03" required>
                                <option selected disabled value="">Column</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>


                        <div class="col-md-2">
                            <select class="form-select" id="validationCustom04" required>
                                <option selected disabled value="">and</option>
                                <option>or</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" id="validationCustom05" required>
                                <option selected disabled value="">Select</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-select" id="validationCustom06" required>
                                <option selected disabled value="">Equal</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-md-2 align-self-end">
                            <button class="btn btn-outline-danger">
                                <i data-lucide="trash-2"></i>
                            </button>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom07" class="form-label">Row 2</label>
                            <select class="form-select" id="validationCustom07" required>
                                <option selected disabled value="">Select</option>
                                <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn  btn-outline-primary d-flex align-items-center">
                                <i data-lucide="circle-plus" class=""></i>
                                <div class="w-100">Add New</div>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Apply</button>
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