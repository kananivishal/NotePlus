<?php
include "../NotePlus/includes/header.php";
include "../NotePlus/includes/sidebar.php";
?>
<div class="col-lg-12">
    <div class="card card-block card-stretch">
        <div class="card-body custom-notes-space">
            <h3 class="">Your Notes</h3>
            <div class="iq-tab-content">
                <div class="d-flex flex-wrap align-items-top justify-content-between">
                    <ul class="d-flex nav nav-pills text-center note-tab mb-3" id="note-pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link home active show" data-toggle="pill" data-init="note" href="#all" role="tab" aria-selected="false">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link home" data-toggle="pill" data-init="shared-note" href="#shared" role="tab" aria-selected="true">Shared Notes</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link home" data-toggle="pill" data-init="pin-note" href="#pin" role="tab" aria-selected="false">Pin Notes</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link home" data-toggle="pill" data-init="fav-note" href="#favourite" role="tab" aria-selected="false">Favourite Notes</a>
                        </li>
                    </ul>
                    <div class="media align-items-top iq-grid">
                        <!-- <div class="view-btn rounded body-bg btn-dropdown filter-btn mr-3">
                            <div class="dropdown">
                                <span class="dropdown-toggle cursor-pointer" id="dropdownMenuButton003" data-toggle="dropdown">
                                    <i class="las la-filter font-size-20"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="dropdownMenuButton003">
                                    <div class="dropdown-item mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="mr-4"><i class="las la-book mr-3"></i>Located
                                                In</h6>
                                            <div class="form-group mb-0">
                                                <select name="type" class="basic-select form-control dropdown-toggle" data-style="py-0">
                                                    <option value="1">Project Plans</option>
                                                    <option value="2">Routine Notes</option>
                                                    <option value="3">Planning</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item mb-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="mr-4"><i class="las la-paste mr-3"></i>Contains</h6>
                                            <div class="form-group mb-0">
                                                <select name="type" class="basic-select form-control dropdown-toggle" data-style="py-0">
                                                    <option value="1">Address</option>
                                                    <option value="2">Archive Files</option>
                                                    <option value="3">Code Blocks</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-item mb-2">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h6 class="mr-4"><i class="las la-calendar mr-3"></i>Created</h6>
                                            <div class="form-group mb-0">
                                                <select id="date-select" name="type" class="basic-select form-control dropdown-toggle" data-style="py-0">
                                                    <option value="today">Today</option>
                                                    <option value="yest">Yesterday</option>
                                                    <option value="last-week">Last Week</option>
                                                    <option value="last-month">Last Month</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="list-grid-toggle cursor-pointer">
                            <span class="icon active i-grid rounded"><i class="ri-layout-grid-line font-size-20"></i></span>
                            <span class="icon active i-list rounded"><i class="ri-list-check font-size-20"></i></span>
                            <span class="label label-list">List</span>
                        </div>
                    </div>
                </div>
                <div class="note-content tab-content">
                    <div id="all" class="tab-pane fade active show">
                        <div class="icon active animate__animated animate__fadeIn i-grid">
                            <h3 class="mb-3">Pin Notes</h3>
                            <div class="row" id="ispinned">
                            </div>
                            <h3 class="mb-3">All Notes</h3>
                            <div class="row" id="notes">
                            </div>
                        </div>
                    </div>
                    <div id="shared" class="tab-pane fade">
                        <div class="icon active animate__animated animate__fadeIn i-grid">
                            <div class="row" id="sharednotes">

                            </div>
                        </div>
                    </div>
                    <div id="favourite" class="tab-pane fade">
                        <div class="icon active animate__animated animate__fadeIn i-grid">
                            <div class="row" id="isfavourite">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- View Model -->
<div class="modal fade" id="view-note" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <div class="media align-items-top justify-content-between">
                        <h3 class="mb-3" id="modal-title"></h3>
                        <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                    </div>
                    <div class="content create-workform">
                        <p class="mb-4" id="modal-body" contenteditable="false"></p>
                        <h4 class="mb-3">Shared</h4>
                        <ul class="list-inline p-0 m-0">
                            <li>
                                <div class="media align-items-center cust-card mb-3">
                                    <div class="media-body ml-3" id="modal-collabrator">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" id="edit-note" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Note</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="form-group col-sm-6">
                        <label for="altconno">Title</label>
                        <input type="text" class="form-control" id="edit-title" placeholder="Enter Your Title">
                        <input type="text" class="form-control" id="NoteId" placeholder="" hidden>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Select Folder</label>
                        <select class="form-control" id="editselectfolder">

                        </select>
                    </div>
                    <!-- <div class="form-group m-lg-1">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" id="isPinnedCheckbox" name="isPinnedCheckbox" class="custom-control-input" onchange="updateNoteStatus(noteId,$('#FavoriteCheckbox').prop('checked'))">
                            <label class="custom-control-label" for="isPinnedCheckbox"> IsPinned </label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" id="isFavoriteCheckbox" name="isFavoriteCheckbox" class="custom-control-input" onchange="updateNoteStatus(noteId, $('#PinnedCheckbox').prop('checked'))">
                            <label class="custom-control-label" for="isFavoriteCheckbox"> IsFavourite </label>
                        </div>
                    </div> -->
                </div>
                <div class="content edit-notes">
                    <div class="card card-transparent card-block card-stretch event-note mb-0">
                        <div class="card-body px-0 bukmark">
                            <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">
                                <div class="quill-tool">
                                </div>
                            </div>
                            <div id="quill-toolbar1" contenteditable="true">
                                <!-- <p>Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p> -->
                            </div>
                        </div>
                    </div>
                </div>
                <form id="add-email">
                    <div class="pb-3">
                        <h5 class="mb-2">Invite Someone</h5>
                        <div class="input-group">
                            <input type="text" class="form-control" id="emailEditInput" placeholder="Enter Name or Email">
                            <div class="input-group-append">
                                <button type="button" class="btn btn-info" onclick="addEditEmail(event)"><i class="ri-add-fill"></i></button>
                            </div>
                        </div>
                    </div>
                    <div id="displayEditEmails" class="mb-3" style="word-wrap: break-word;"></div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="noteEdit(event)">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php
include "../NotePlus/includes/footer.php";
?>