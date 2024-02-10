<?php
include "../includes/header.php";
include "../includes/sidebar.php";
?>
<div class="col-lg-12">
    <div class="card card-block card-stretch position-relative">
        <div class="card-body custom-notes-space">
            <div id="FolderError"></div>
            <button type="button" class="btn btn-warning mt-2 float-right ml-2" onclick="folderDelete(event,folderId)"><i class="ri-delete-bin-2-fill pr-0"></i></button>
            <button type="button" class="btn btn-success mt-2 float-right"><i class="ri-pencil-fill pr-0"></i></button>
            <h3 class="">Your Notes</h3>
            <div class="iq-tab-content">
                <div class="d-flex flex-wrap align-items-top justify-content-between mb-3">

                    <!-- <div class="media align-items-top iq-grid">
                        <div class="view-btn rounded body-bg btn-dropdown filter-btn mr-3">
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
                        </div>
                        <div class="list-grid-toggle cursor-pointer">
                            <span class="icon active i-grid rounded"><i class="ri-layout-grid-line font-size-20"></i></span>
                            <span class="icon active i-list rounded"><i class="ri-list-check font-size-20"></i></span>
                            <span class="label label-list">List</span>
                        </div>
                    </div> -->
                </div>
                <div class="note-content tab-content">
                    <div id="all" class="tab-pane fade active show">
                        <div class="icon active animate__animated animate__fadeIn i-grid">
                            <div class="row" id="foldernotes">
                            </div>
                        </div>
                        <!-- <div class="icon active animate__animated animate__fadeIn i-list">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table  tbl-server-info">
                                            <thead>
                                                <tr class="ligth">
                                                    <th class="w-50" scope="col">Title</th>
                                                    <th scope="col">Permission</th>
                                                    <th scope="col">Created At</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">Weekly Planner</h4>
                                                        <span>Virtual Digital Marketing Course every
                                                            week on Monday, Wednesday and
                                                            Saturday</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-user-friends mr-2 font-size-20"></i>
                                                        03 share
                                                    </td>
                                                    <td>Dec 20</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">Birthday Celebration <i class="las la-thumbtack ml-2 show-tab" data-show-tab="[href='#note3']"></i>
                                                        </h4>
                                                        <span>You can easily share via message,
                                                            WhatsApp, emails etc.</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-lock mr-2 font-size-20"></i>
                                                        Only You
                                                    </td>
                                                    <td>Dec 20</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">Essay Outline <i class="lar la-heart ml-2 show-tab" data-show-tab="[href='#note4']"></i>
                                                        </h4>
                                                        <span>Donec rutrum congue leo eget
                                                            malesuada.</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-lock mr-2 font-size-20"></i>
                                                        Only You
                                                    </td>
                                                    <td>Dec 20</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">Lecture Notes <i class="lar la-heart ml-2 show-tab" data-show-tab="[href='#note4']"></i>
                                                        </h4>
                                                        <span>Chapter 1 notes, Chapter 2 Assignment,
                                                            Chapter 3 practical File.</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-lock mr-2 font-size-20"></i>
                                                        Only You
                                                    </td>
                                                    <td>Dec 20</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">Image Notes<i class="las la-thumbtack ml-2"></i>
                                                        </h4>
                                                        <span>NotePlus lets you do in
                                                            on-the-go!</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-lock mr-2 font-size-20"></i>
                                                        Only You
                                                    </td>
                                                    <td>Dec 20</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">Benefits of NotePlus</h4>
                                                        <span>Take organized notes and share later
                                                            as meeting minutes or check-list</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-user-friends mr-2 font-size-20"></i>
                                                        2 share
                                                    </td>
                                                    <td>Dec 20</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">Quick Summary <i class="las la-thumbtack ml-2 show-tab" data-show-tab="[href='#note3']"></i>
                                                        </h4>
                                                        <span>Need to write a summary note of the
                                                            subject you just finished</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-lock mr-2 font-size-20"></i>
                                                        Only You
                                                    </td>
                                                    <td>Dec 19</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">Address & Email</h4>
                                                        <span>Quickly note down the address and
                                                            email address on NotePlus</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-user-friends mr-2 font-size-20"></i>
                                                        04 share
                                                    </td>
                                                    <td>Dec 19</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 class="mb-2">NotePlus for Entrepreneurs
                                                            <i class="lar la-heart ml-2 show-tab" data-show-tab="[href='#note4']"></i>
                                                        </h4>
                                                        <span>With NotePlus, you can easily share
                                                            via message, WhatsApp, emails
                                                            etc.</span>
                                                    </td>
                                                    <td>
                                                        <i class="las la-lock mr-2 font-size-20"></i>
                                                        Only You
                                                    </td>
                                                    <td>Dec 19</td>
                                                    <td>
                                                        <div>
                                                            <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                                            <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div> -->
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
include "../includes/footer.php";
?>