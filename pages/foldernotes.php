<?php
include "../includes/header.php";
include "../includes/sidebar.php";
?>
<div class="col-lg-12">
    <div class="card card-block card-stretch position-relative">
        <div class="card-body custom-notes-space">
            <div id="FolderError"></div>
            <button type="button" class="btn btn-warning mt-2 float-right ml-2" onclick="folderDelete(event,folderId)"><i class="ri-delete-bin-2-fill pr-0"></i></button>
            <button type="button" class="btn btn-success mt-2 float-right" data-toggle="modal" data-target="#edit-folder"><i class="ri-pencil-fill pr-0"></i></button>
            <h3>NoteBooks</h3>
            <div class="iq-tab-content">
                <div class="d-flex flex-wrap align-items-top justify-content-between mb-3">
                </div>
                <div class="note-content tab-content">
                    <div id="all" class="tab-pane fade active show">
                        <div class="icon active animate__animated animate__fadeIn i-grid">
                            <div class="row" id="foldernotes">
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
<!-- Edit Folder Model -->
<div class="modal fade" id="edit-folder" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="popup text-left">
                    <h4 class="mb-3">NoteBook</h4>
                    <div class="content create-workform bg-body">
                        <div class="pb-3">
                            <h5 class="mb-2">NoteBook Name</h5>
                            <input type="text" class="form-control" id="editfolderName" placeholder="Enter Folder Name">
                        </div>
                        <div id="EditFolderError"></div>
                        <div class="col-lg-12 mt-4">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                <div class="btn btn-outline-primary" onclick="EditFolderName(event,folderId)">Update</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "../includes/footer.php";
?>