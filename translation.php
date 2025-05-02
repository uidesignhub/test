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
                    <div class="ms-md-auto d-sm-flex align-items-center gap-2 mt-2 mt-sm-0 col-lg-6 col-sm-8">
                        <select class="form-select mb-3 mb-sm-0" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option selected>Question</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" class="btn btn-light" >
                                Cancel
                            </a>
                            <a href="#" class="btn btn-primary">
                                Save
                            </a>
                            <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#LTranslateModal">
                                Publish
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header d-sm-flex align-items-center gap-3">
                                <div class="col mb-sm-0 mb-3">
                                    <h5 class="card-title">Base Language</h5>
                                </div>
                                <div class="col ms-auto">
                                    <div class="dropdown flex-fill w-100 mb-3 mb-sm-0">
                                        <button type="button" class="btn border w-100 d-flex justify-content-between"
                                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false" fdprocessedid="czraq">
                                            <span class="f-500">English</span>
                                            <i data-lucide="chevron-down" class="h-20"></i>

                                        </button>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 w-100"
                                            aria-labelledby="page-header-notifications-dropdown">
                                            <div data-simplebar style="max-height: 250px;">
                                                <a href="" class="dropdown-item">
                                                    Malayalam
                                                </a>
                                                <a href="" class="dropdown-item">
                                                    Arabic
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6>Survey Title</h6>
                                <p>Aliquyam eratsed diam sadipscing elitr dolore magna ased tempor invidunt</p>
                            </div>
                        </div>
                        <div class="card p-4  border border-primary">
                            <div class="text-uppercase text-base f-600">Q1</div>
                            <div class="">

                                Aliquyam eratsed diam sadipscing elitr dolore magna ased tempor invidunt utlabore et
                                diam sadipscing elitr dolore magna ased?
                            </div>
                            <div class="card-body d-flex flex-column gap-3 px-0">
                                <div class="d-flex align-items-center gap-2 p-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                        <label class="form-check-label ms-2" for="formCheck1">
                                            Lorem ipsum dolor sit amet
                                        </label>
                                    </div>
                                    <div class="">Rank Order</div>
                                </div>
                                <div class="d-flex align-items-center gap-2 p-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="formRadios" id="formRadios2">
                                        <label class="form-check-label ms-2" for="formRadios2">
                                            Magna aliquyam eratsed diam invidunt utlabore
                                        </label>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                            autocomplete="off">
                                        <label class="btn btn-outline-light" for="btnradio1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                            autocomplete="off" checked>
                                        <label class="btn btn-primary" for="btnradio2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3"
                                            autocomplete="off">
                                        <label class="btn btn-outline-light" for="btnradio3">3</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header d-sm-flex align-items-center gap-3">
                                <div class="col-auto mb-sm-0 mb-3">
                                    <h5 class="card-title">Translate To</h5>
                                </div>
                                <div class="col">
                                    <div class="dropdown flex-fill w-100 mb-3 mb-sm-0">
                                        <button type="button" class="btn border w-100 d-flex justify-content-between"
                                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <span class="f-500">Malayalam</span>
                                            <i data-lucide="chevron-down" class="h-20"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 w-100"
                                            aria-labelledby="page-header-notifications-dropdown">
                                            <form class="d-flex align-items-center p-3 gap-3">
                                                <div class="search-box  d-block w-100">
                                                    <div class="position-relative">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" data-lucide="search"
                                                            class="lucide lucide-search position-absolute start-0 h-20 m-2">
                                                            <circle cx="11" cy="11" r="8"></circle>
                                                            <path d="m21 21-4.3-4.3"></path>
                                                        </svg>
                                                        <input type="text" class="form-control ps-5"
                                                            placeholder="Search..." fdprocessedid="3vmkgm">
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary lh-1" title="Add Language"
                                                    data-bs-toggle="modal" data-bs-target="#LanguageModal"><i
                                                        data-lucide="circle-plus" class="w-20 h-20"></i></button>
                                            </form>

                                            <div data-simplebar style="max-height: 250px;">
                                                <a href="" class="dropdown-item">
                                                    Malayalam
                                                </a>
                                                <a href="" class="dropdown-item">
                                                    Arabic
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Tools</option>
                                        <option value="1">Google Translations</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6>സർവേയുടെ പേര്</h6>
                                <p>അലിക്വം എററ്റ്‌സെഡ് ഡയം സാഡിപ്‌സിംഗ് എലിറ്റർ ഡോളോർ...</p>
                            </div>
</div>
                            <div class="card p-4  border border-primary">
                            <div class="text-uppercase text-base f-600">Q1</div>
                            <div class="">

                                Aliquyam eratsed diam sadipscing elitr dolore magna ased tempor invidunt utlabore et
                                diam sadipscing elitr dolore magna ased?
                            </div>
                            <div class="card-body d-flex flex-column gap-3 px-0">
                                <div class="d-flex align-items-center gap-2 p-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="formCheck1">
                                        <label class="form-check-label ms-2" for="formCheck1">
                                            Lorem ipsum dolor sit amet
                                        </label>
                                    </div>
                                    <div class="">Rank Order</div>
                                </div>
                                <div class="d-flex align-items-center gap-2 p-1">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="formRadios" id="formRadios2">
                                        <label class="form-check-label ms-2" for="formRadios2">
                                            Magna aliquyam eratsed diam invidunt utlabore
                                        </label>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                            autocomplete="off">
                                        <label class="btn btn-outline-light" for="btnradio1">1</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                            autocomplete="off" checked>
                                        <label class="btn btn-primary" for="btnradio2">2</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio3"
                                            autocomplete="off">
                                        <label class="btn btn-outline-light" for="btnradio3">3</label>
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

    <!--Add Langugae modal -  -->
    <div class="modal fade " id="LanguageModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 align-items-start pb-0">
                    <div>
                        <h5 class="modal-title" id="staticBackdropLabel">Add Language</h5>
                        <div>Select one or more languages from the list below or create a new language</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="d-flex align-items-center  mt-1 mb-4 gap-3">
                        <div class="search-box  d-block flex-fill">
                            <div class="position-relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" data-lucide="search"
                                    class="lucide lucide-search position-absolute start-0 h-20 m-2">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <path d="m21 21-4.3-4.3"></path>
                                </svg>
                                <input type="text" class="form-control ps-5" placeholder="Search...">
                            </div>
                        </div>
                        <button class="btn btn-outline-primary" title="Add Language" data-bs-toggle="modal" data-bs-target="#CreateLanguageModal">
                            Create Language
                        </button>
                    </form>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="formCheck1">
                        <label class="form-check-label mb-0 ms-1" for="formCheck1">
                            Portugees
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="formCheck2" checked>
                        <label class="form-check-label mb-0 ms-1" for="formCheck2">
                            Tamil
                        </label>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-primary">Add Language</button>
                </div>
            </div>
        </div>
    </div>
        <!--Create Langugae modal -  -->
        <div class="modal fade " id="CreateLanguageModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 align-items-start">
                    <div>
                        <h5 class="modal-title" id="staticBackdropLabel">Create Language</h5>
                        <div>Add the language’s display name, language code, and select a base language</div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mb-3">
                                    <label class="form-label f-500" for="formrow-firstname-input">Display name</label>
                                    <input type="text" class="form-control" id="Display name" placeholder="Enter Display name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label f-500" for="formrow-firstname-input">Language Code</label>
                                    <input type="text" class="form-control" id="language code" placeholder="Enter code">
                                </div>
              
                <div class="mb-3">
                <label class="form-label f-500" for="formrow-firstname-input">Alternate language</label>
                    <select class="form-select" aria-label="Select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
</div>
<small>
This language will be used for any questions missing custom language translations, and for general messages that can’t be translated into new languages.
</small>
</div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Back</button>
                    <button type="button" class="btn btn-primary">Create Language</button>
                </div>
            </div>
        </div>
    </div>
    <!--Translate modal -  -->
    <div class="modal fade " id="LTranslateModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header border-0 align-items-start pb-0">
                    <div>
                        <h5 class="modal-title" id="staticBackdropLabel">Google Translation</h5>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Aliquyam eratsed diam sadipscing elitr dolore magna tempor invidunt utlabore et diam sadipscing elitr dolore magna ased diam sadipscing elitrolore magna ased tempor invidunt utlabore et diam sadipscing elitr dolore magna ased utlabore et diam sadipscing elitr dolore magna ased diam sadipscing elitrolore.
                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary">Yes</button>
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