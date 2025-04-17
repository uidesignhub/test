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
        <div class="main-content mt-3">
            <div class="container-fluid">
                <!-- start page header -->
                <!-- <div class="page-header d-md-flex align-items-center">
                    <div class="">
                        <h4 class="mb-0 f-600">Clients</h4>
                        <ol class="breadcrumb m-0 align-items-center">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">
                            <i data-feather="box" class="w-14"></i> 
                        </a></li>
                            <li class="breadcrumb-item active">Client List</li>
                        </ol>
                    </div>
                    <div class="ms-md-auto d-flex align-items-center gap-3 mt-2 mt-sm-0">
                        <a href="add-client.php" class="btn btn-secondary">
                        <i data-feather="plus" class="icon"></i>
                            Add Client

                        </a>
                    </div>

                </div> -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-2">

                                    <div class="col-sm-8 col-lg-8 col-12">
                                        <div class="d-sm-flex gap-3 mb-3">

                                            <div class="dropdown flex-fill">
                                                <button type="button"
                                                    class="btn border w-100 d-flex justify-content-between"
                                                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <span class="f-600">All Workspaces</span>
                                                    <i data-lucide="chevron-down" class="h-20"></i>

                                                </button>
                                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 w-100"
                                                    aria-labelledby="page-header-notifications-dropdown">
                                                    <div data-simplebar style="max-height: 250px;">
                                                        <div class=" p-3">

                                                            <form class="w-100 mb-3">
                                                                <div class="search-box  d-block w-100">
                                                                    <div class="position-relative">
                                                                        <i data-lucide="search"
                                                                            class="position-absolute start-0 h-20 m-2"></i>
                                                                        <input type="text" class="form-control ps-5"
                                                                            placeholder="Search...">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            <ul class="nav  nav-pills  tab-custom-bg" role="tablist">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" data-bs-toggle="tab"
                                                                        href="#all" role="tab">
                                                                        <div class="">All</div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" data-bs-toggle="tab"
                                                                        href="#private" role="tab">
                                                                        <div class="">Private</div>
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item ">
                                                                    <a class="nav-link" data-bs-toggle="tab"
                                                                        href="#shared" role="tab">
                                                                        <div class="">Shared</div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- Tab panes -->
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="all" role="tabpanel">
                                                                <a href="" class="text-reset dropdown-item p-3">
                                                                    <div class="d-flex  align-items-center">
                                                                        <div class="col-7">
                                                                            <div class="text-sm f-500 text-dark">
                                                                                Workspace-01</div>
                                                                            <div
                                                                                class="text-muted text-xs text-truncate">
                                                                                Created on 11 April,2025</div>
                                                                        </div>
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-primary align-self-end ms-auto"><i
                                                                                data-lucide="user-plus"
                                                                                class="me-1 w-16"></i> Invite</button>
                                                                    </div>
                                                                </a>
                                                                <a href=""
                                                                    class="text-reset dropdown-item border-top p-3">
                                                                    <div class="d-flex  align-items-center">
                                                                        <div class="col-7">
                                                                            <div class="text-sm f-500 text-dark">
                                                                                Workspace-01</div>
                                                                            <div
                                                                                class="text-muted text-xs text-truncate">
                                                                                Created on 11 April,2025</div>
                                                                        </div>
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-light align-self-end ms-auto"><i
                                                                                data-lucide="user-plus"
                                                                                class="me-1 w-16"></i> Invite</button>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="tab-pane" id="private" role="tabpanel">private
                                                                tab</div>
                                                            <div class="tab-pane" id="shared" role="tabpanel">shared tab
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="p-2 border-top d-grid">
                                                        <a class="btn btn-sm btn-link btn-block text-center"
                                                            href="javascript:void(0)">
                                                            <span>Manage Workspace/Members</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <button class="btn btn-light dropdown-toggle" type="button"
                                                    id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                    aria-expanded="false" fdprocessedid="7vk3ld">
                                                    <i data-lucide="sliders-vertical" class="h-18"></i>
                                                </button>
                                                <div class="dropdown-menu p-3 mw-320"
                                                    aria-labelledby="dropdownMenuButton1">
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios1" checked>
                                                        <label class="form-check-label" for="formRadios1">
                                                            Sort By Name
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios1">
                                                        <label class="form-check-label" for="formRadios1">
                                                            Last Created
                                                        </label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios1">
                                                        <label class="form-check-label" for="formRadios1">
                                                            First Created
                                                        </label>
                                                    </div>
                                                    <h6 class="my-3">By Date</h6>
                                                    <div class="form-check form-check-inline mb-3">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios1">
                                                        <label class="form-check-label" for="formRadios1">
                                                            Single Date
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline mb-3">
                                                        <input class="form-check-input" type="radio" name="formRadios"
                                                            id="formRadios1">
                                                        <label class="form-check-label" for="formRadios1">
                                                            Date Range
                                                        </label>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <input class="form-control" type="date" value="15-04-2025"
                                                                id="example-date-input">
                                                        </div>
                                                        <div class="col-6">
                                                            <input class="form-control" type="date" value="15-04-2025"
                                                                id="example-date-input">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-3 mt-4">
                                                        <button class="btn btn-light w-100">Cancel</button>
                                                        <button class="btn btn-primary w-100">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <form class="flex-fill">
                                                <div class="search-box  d-block w-100">
                                                    <div class="position-relative">
                                                        <i data-lucide="search"
                                                            class="position-absolute start-0 h-20 m-2"></i>
                                                        <input type="text" class="form-control ps-5"
                                                            placeholder="Search...">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                    <div class="col-lg-auto ms-lg-auto col-sm-auto">
                                        <div class="dropdown icon-dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" id="dropdownMenuButton"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="">Create New</span>
                                                <i data-lucide="chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="dropdownMenuButton">
                                                <a href="" class="dropdown-item p-3 d-flex  align-items-center"
                                                    data-bs-toggle="offcanvas" data-bs-target="#offcanvasSurvey"
                                                    aria-controls="offcanvasRight">
                                                    <i data-lucide="notebook-pen" class="me-1 icon"></i>
                                                    Survey
                                                </a>
                                                <a href="" class="dropdown-item p-3 d-flex  align-items-center">
                                                    <i data-lucide="layout-grid" class="me-1 icon"></i>
                                                    Workspace
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <ul class="nav  nav-pills nav-tabs-custom tab-custom-bg justify-content-between gap-3"
                                        role="tablist">
                                        <li class="nav-item  flex-fill">
                                            <a class="nav-link nav-info d-flex align-items-center" data-bs-toggle="tab"
                                                href="#survey" role="tab">
                                                <span class=""><i data-lucide="circle-check" class="h-24"></i></span>
                                                <div class="ms-2">
                                                    <div class="text-base f-600 lh-1">Total</div>
                                                    <small class="">Surveys</small>
                                                </div>
                                                <span class="text-2xl f-600 ms-auto">22</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  flex-fill">
                                            <a class="nav-link nav-primary d-flex align-items-center"
                                                data-bs-toggle="tab" href="#survey2" role="tab">
                                                <span class=""><i data-lucide="circle-check" class="h-24"></i></span>
                                                <div class="ms-2">
                                                    <div class="text-base f-600 lh-1">Published</div>
                                                    <small class="">Surveys</small>
                                                </div>
                                                <span class="text-2xl f-600 ms-auto">22</span>
                                            </a>
                                        </li>
                                        <li class="nav-item  flex-fill">
                                            <a class="nav-link nav-tertiary d-flex align-items-center"
                                                data-bs-toggle="tab" href="#survey3" role="tab">
                                                <span class=""><i data-lucide="circle-check" class="h-24"></i></span>
                                                <div class="ms-2">
                                                    <div class="text-base f-600 lh-1">UnPublished</div>
                                                    <small class="">Surveys</small>
                                                </div>
                                                <span class="text-2xl f-600 ms-auto">22</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content p-3 px-0 mt-3 text-muted">
                                        <div class="tab-pane active" id="survey" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table align-middle table-nowrap table-check">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th class="align-middle opacity-50 ps-sm-4">Survey name</th>
                                                            <th class="align-middle opacity-50">Workspace</th>
                                                            <th class="align-middle opacity-50">Created</th>
                                                            <th class="align-middle opacity-50">Published</th>
                                                            <th class="align-middle opacity-50">Response</th>
                                                            <th class="align-middle opacity-50">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="ps-sm-4">
                                                                Survey-01
                                                            </td>
                                                            <td>
                                                                4
                                                            </td>
                                                            <td>
                                                                03 jan 2023 - 9:30 AM
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-light f-500 text-xs">Published
                                                                    now</span>
                                                            </td>
                                                            <td>
                                                                12
                                                            </td>
                                                            <td>
                                                                <div class="d-flex gap-3">
                                                                    <a href="javascript:void(0);" class="text-gray"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#Productview"><i
                                                                            data-lucide="eye"></i></a>
                                                                    <a href="edit-product.php" class="text-gray"><i
                                                                            data-lucide="pencil"></i></a>
                                                                    <a href="javascript:void(0);" class="text-gray"><i
                                                                            data-lucide="trash-2"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div
                                                class="d-flex justify-content-sm-between flex-column flex-sm-row px-4 align-items-center gap-3">
                                                <div>Showing 1 to 5 of 100 entries</div>
                                                <ul class="pagination pagination-rounded mb-2">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="javascript: void(0);"
                                                            aria-label="Previous">
                                                            <i data-lucide="arrow-left"></i>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link"
                                                            href="javascript: void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript: void(0);">2</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link"
                                                            href="javascript: void(0);">3</a>
                                                    </li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="javascript: void(0);"
                                                            aria-label="Next">
                                                            <i data-lucide="arrow-right"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- end tab pane -->
                                        <div class="tab-pane" id="survey2" role="tabpanel">
                                            Same table content
                                        </div><!-- end tab pane -->
                                        <div class="tab-pane" id="survey3" role="tabpanel">
                                            Same table content
                                        </div><!-- end tab pane -->
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
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasSurvey" aria-labelledby="offcanvasSurveyLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasSurveyLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <h6 class="f-600 mb-3">Create New Survey</h6>
            <ul class="nav  nav-pills bg-light rounded justify-content-between" role="tablist">
                <li class="nav-item  flex-fill">
                    <a class="nav-link active" data-bs-toggle="tab" href="#Details" role="tab">
                        <div class="f-500">Basic details</div>
                    </a>
                </li>
                <li class="nav-item  flex-fill">
                    <a class="nav-link" data-bs-toggle="tab" href="#Pages" role="tab">
                        <div class="f-500">Pages</div>
                    </a>
                </li>
            </ul>
            <div class="tab-content p-3 px-0 mt-3">
                <div class="tab-pane active" id="Details" role="tabpanel">
                    <div class="row">
                        <div class="col-auto">
                            <div class="inputRadio">
                                <input id="option1" name="option1" type="checkbox" />
                                <label for="option1" class="">Blank Survey</label>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="inputRadio position-relative">
                                <button class="btn btn-sm btn-primary  position-absolute end-0 m-2 z-1" type="button">
                                    Browse
                                    <input class="form-control w-100 h-100 position-absolute end-0 opacity-0"
                                        type="file" id="formFile" style=" width: 0;">
                                </button>
                                <input id="option2" name="option2" type="checkbox" />
                                <label for="option2" class="">Use Template</label>
                            </div>
                        </div>
                    </div>
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
                            <label class="form-label" for="formrow-firstname-input">Survey Description name</label>
                            <textarea class="form-control" rows="4" placeholder="Enter About your description"
                                value="About your description"></textarea>
                        </div>
                    </div>
                </div><!-- end tab pane -->
                <div class="tab-pane " id="Pages" role="tabpanel">
                    Same t
                </div><!-- end tab pane -->
            </div>
</div>
<div class="d-flex align-items-center justify-content-end flex-wrap gap-3 p-4">
            
            <button type="button" class="btn btn-light"> cancel</button>
            <button type="button" class="btn btn-secondary"> Create Now</button>
        </div>
        </div>

        <!-- ============================================================== -->
        <!-- Js And Script  here -->
        <!-- ============================================================== -->
        <?php include 'js.php';?>
</body>

</html>