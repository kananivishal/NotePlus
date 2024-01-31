<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>NotePlus | Responsive Bootstrap 4 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/noteplus/assets/images/favicon.ico" />
    <link rel="stylesheet" href="/noteplus/assets/css/backend-plugin.min.css?v=1.0.0">
    <link rel="stylesheet" href="/noteplus/assets/css/backend.css?v=1.0.0">
    <link rel="stylesheet" href="/noteplus/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="/noteplus/assets/vendor/@icon/dripicons/dripicons.css">
</head>

<body class="color-light ">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton1"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton1">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton2"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton2" style="">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton3"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton3" style="">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton4"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton4">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton5"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton5">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton6"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton6" style="">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton7"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton7" style="">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton8"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton8" style="">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton9"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton9" style="">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton10"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton10" style="">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton11"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton11">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton12"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton12">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton13"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton13">
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
                            <span class="dropdown-toggle dropdown-bg" id="tag-dropdownMenuButton14"
                                data-toggle="dropdown" aria-expanded="false" role="button">
                                <i class="ri-more-fill"></i>
                            </span>
                            <div class="dropdown-menu dropdown-menu-right border-none"
                                aria-labelledby="tag-dropdownMenuButton14">
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
    <div class="wrapper">
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="/noteplus/" class="header-logo">
                            <img src="/noteplus/assets/images/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">

                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                            <i class="ri-menu-3-line"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                <li class="nav-item nav-icon search-content">
                                    <a href="#" class="search-toggle rounded" id="h1-dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ri-search-line"></i>
                                    </a>
                                    <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownSearch">
                                        <form action="#" class="searchbox p-2">
                                            <div class="form-group mb-0 position-relative">
                                                <input type="text" class="text search-input font-size-12" placeholder="type here to search/noteplus.">
                                                <a href="#" class="search-link"><i class="las la-search"></i></a>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown mail-content">
                                    <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="">
                                            <svg width="20" class="svg-icon" id="main-n-010" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                            </svg>
                                        </i>
                                        <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                                        <span class="bg-primary"></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownMenuButton2">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="px-3 pt-0 pb-0">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small" src="/noteplus/assets/images/user/01.jpg" alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Emma Watson</h5>
                                                                    <small class="text-dark"><b>12 : 47 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small" src="/noteplus/assets/images/user/02.jpg" alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Ashlynn Franci</h5>
                                                                    <small class="text-dark"><b>11 : 30 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small" src="/noteplus/assets/images/user/03.jpg" alt="03">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Kianna Carder</h5>
                                                                    <small class="text-dark"><b>11 : 21 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item nav-icon dropdown mail-content">
                                    <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="h1-dropdownMenuButton004" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="">
                                            <svg width="20" class="svg-icon" id="main-n-020" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                            </svg>
                                        </i>
                                        <span class="badge badge-primary count-mail rounded-circle">2</span>
                                        <span class="bg-primary "></span>
                                    </a>
                                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="h1-dropdownMenuButton004">
                                        <div class="card shadow-none m-0">
                                            <div class="card-body p-0 ">
                                                <div class="px-3 pt-0 pb-0">
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small" src="/noteplus/assets/images/user/01.jpg" alt="01">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Emma Watson</h5>
                                                                    <small class="text-dark"><b>12 : 47 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3 border-bottom">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small" src="/noteplus/assets/images/user/02.jpg" alt="02">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Ashlynn Franci</h5>
                                                                    <small class="text-dark"><b>11 : 30 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="iq-sub-card">
                                                        <div class="media align-items-center cust-card py-3">
                                                            <div class="">
                                                                <img class="avatar-50 rounded-small" src="/noteplus/assets/images/user/03.jpg" alt="03">
                                                            </div>
                                                            <div class="media-body ml-3">
                                                                <div class="d-flex align-items-center justify-content-between">
                                                                    <h5 class="mb-0">Kianna Carder</h5>
                                                                    <small class="text-dark"><b>11 : 21 pm</b></small>
                                                                </div>
                                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                                    View All
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="caption-content">
                                    <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between" id="h-dropdownMenuButton001" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="/noteplus/assets/images/user/1.jpg" class="img-fluid rounded avatar-50" alt="user">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right w-100 border-0 py-2" aria-labelledby="h-dropdownMenuButton001">
                                        <a class="dropdown-item mb-2" href="/noteplus/app/user-profile.html">
                                            <i class="lar la-user-circle font-size-20 mr-1"></i>
                                            <span class="mt-2">My Profile</span>
                                        </a>
                                        <a class="dropdown-item mb-2" href="/noteplus/app/user-profile-edit.html">
                                            <i class="las la-user-edit font-size-20 mr-1"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                        <a class="dropdown-item mb-2" href="/noteplus/app/user-account-setting.html">
                                            <i class="las la-user-cog font-size-20 mr-1"></i>
                                            <span>Account Settings</span>
                                        </a>
                                        <a class="dropdown-item" href="/noteplus/app/user-privacy-setting.html">
                                            <i class="las la-user-shield font-size-20 mr-1"></i>
                                            <span>Privacy Settings</span>
                                        </a>
                                        <hr class="my-1">
                                        <a class="dropdown-item" href="/noteplus/">
                                            <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                                            <span>Logout</span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        