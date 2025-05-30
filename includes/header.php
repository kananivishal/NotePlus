<!doctype html>
<html lang="en">

<?php
if (!isset($_COOKIE['TOKEN'])) {
    header("Location: /noteplus/pages/login");
}
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NotePlus</title>

    <!-- Favicon -->
    <link rel="stylesheet" href="/noteplus/assets/css/style.css">
    <link rel="shortcut icon" href="/noteplus/assets/images/favicon.ico" />
    <link rel="stylesheet" href="/noteplus/assets/css/backend-plugin.min.css?v=1.0.0">
    <link rel="stylesheet" href="/noteplus/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="/noteplus/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/@icon/dripicons/dripicons.css">

    <link rel="stylesheet" href="/noteplus/assets/plugins/sweetalert/css/sweetalert.css">

    <script src="/noteplus/js/init.js"></script>
</head>

<body class="noteplus-layout  ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- <div class="right-sidebar-mini right-sidebar">
        <div class="right-sidebar-panel p-0">
            <div class="right-sidebar-toggle bg-primary mt-3" data-extra-toggle="right-sidebar-dissmiss">
                <i class="ri-arrow-left-line side-left-icon"></i>
                <i class="ri-close-fill side-right-icon"></i>
            </div>
            <div class="card shadow-none tag-details mb-0">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title mb-0">Tag List</h4>
                    </div>
                    <div>
                        <a href="#" data-toggle="modal" data-target="#create-note"><i class="ri-add-line font-size-20"></i></a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <ul class="list-inline p-3 m-0 pb-0">
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-success">A</div>
                                    <h5>Afternoon</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton1" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-danger">B</div>
                                    <h5>Book</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton2" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-purple">C</div>
                                    <h5>Cupcake</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton3" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton3" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-info">D</div>
                                    <h5>Dinner</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton4" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton4" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-warning">E</div>
                                    <h5>Evening Snacks</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton5" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton5" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-success">F</div>
                                    <h5>Fast Track</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton6" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton6" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-danger">G</div>
                                    <h5>Good Morning</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton7" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton7" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-info">H</div>
                                    <h5>Health</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton8" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton8" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-warning">I</div>
                                    <h5>Ice Cream</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton9" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton9" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-success">J</div>
                                    <h5>Juice</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton10" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton10" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-danger">K</div>
                                    <h5>Kangaroo</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton11" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton11" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-purple">L</div>
                                    <h5>Leaves</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton12" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton12" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="mb-3 px-2">
                            <div class="item d-flex align-items-center justify-content-between pb-3 border-bottom">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-info">M</div>
                                    <h5>Machine</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton13" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton13" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="px-2">
                            <div class="item d-flex align-items-center justify-content-between">
                                <div class="media align-items-center">
                                    <div class="icon icon-btn icon-btn-warning">N</div>
                                    <h5>Nail Polish</h5>
                                </div>
                                <div class="dropdown">
                                    <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton14" data-toggle="dropdown" aria-expanded="false" role="button">
                                        <i class="ri-more-fill"></i>
                                    </span>
                                    <div class="dropdown-menu dropdown-menu-right border-none" aria-labelledby="tag-dropdownMenuButton14" style="">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#tag-rename" href="#"><i class="las la-pen mr-3"></i>Rename</a>
                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".item" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Modal -->
    <!-- <div class="modal fade" id="create-note" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-4">Create New Tag</h4>
                        <div class="content create-workform">
                            <input type="text" class="form-control" placeholder="Enter Tag Name">
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-outline-primary mr-4" data-dismiss="modal">Create</div>
                                    <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>     -->
    <!-- Modal -->
    <!-- <div class="modal fade" id="tag-rename" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-4">Rename Your Tag</h4>
                        <div class="content create-workform">
                            <input type="text" class="form-control" placeholder="Enter Tag Name">
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                    <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- loader END -->
    <!-- Wrapper Start -->