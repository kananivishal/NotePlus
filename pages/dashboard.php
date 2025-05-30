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
                                <!-- <div class="col-lg-4 col-md-6" >
                                    <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-info rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton4" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton4" style="">
                                                        <a href="#" class="dropdown-item new-note1" data-toggle="modal" data-target="#new-note1"><i class="las la-eye mr-3"></i>View</a>
                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Weekly Planner</h4>
                                            <p class="mb-3 card-description short">Virtual Digital
                                                Marketing Course every week on Monday, Wednesday and
                                                Saturday.Virtual Digital Marketing Course every week
                                                on Monday</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-info">
                                                <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>03
                                                    share</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>12
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-purple note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-purple rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-02" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" class="show-tab" data-show-tab="[href='#note3']" title="" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton5" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton5" style="">
                                                            <a href="#" class="dropdown-item new-note2" data-toggle="modal" data-target="#new-note2"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Birthday Celebration</h4>
                                            <p class="mb-3 card-description short">You can easily
                                                share via message, WhatsApp, emails etc. You can
                                                also save your notes and edit it later or can easily
                                                delete the note.</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-purple">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only
                                                    You</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>10
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-warning rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-03" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note4']" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton6" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton6" style="">
                                                            <a href="#" class="dropdown-item new-note3" data-toggle="modal" data-target="#new-note3"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Essay Outline</h4>
                                            <ul class="pl-3 mb-0">
                                                <li class="note-list mb-2">Content should be of
                                                    topic.</li>
                                                <li class="note-list mb-2">300 Words only.</li>
                                                <li class="note-list">Make presentation.</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-warning">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only
                                                    You</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>09
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-danger note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-danger rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-04" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note4']" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton7" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton7" style="">
                                                            <a href="#" class="dropdown-item new-note4" data-toggle="modal" data-target="#new-note4"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Lecture Notes</h4>
                                            <div class="checkbox mb-2">
                                                <input type="checkbox" class="checkbox-input mr-3" id="checkbox18">
                                                <label for="checkbox18" class="note-checkbox mb-0">Chapter 1
                                                    notes.</label>
                                            </div>
                                            <div class="checkbox mb-2">
                                                <input type="checkbox" class="checkbox-input mr-3" id="checkbox19">
                                                <label for="checkbox19" class="note-checkbox mb-0">Chapter 2
                                                    Assignment.</label>
                                            </div>
                                            <div class="checkbox mb-2">
                                                <input type="checkbox" class="checkbox-input mr-3" id="checkbox20">
                                                <label for="checkbox20" class="note-checkbox mb-0">Chapter 3 practical
                                                    File.</label>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-danger">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only
                                                    You</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>09
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-primary note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-primary rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-05" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note3']" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton8" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton8" style="">
                                                            <a href="#" class="dropdown-item new-note5" data-toggle="modal" data-target="#new-note5"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Image Notes</h4>
                                            <ul class="row mb-0 p-0 list-inline flex-wrap align-items-center">
                                                <li class="col-4">
                                                    <a href="#">
                                                        <img src="/noteplus/assets/images/gallery/grid/08.jpg" class="img-fluid note-image rounded" alt="" />
                                                    </a>
                                                </li>
                                                <li class="col-4">
                                                    <a href="#">
                                                        <img src="/noteplus/assets/images/gallery/grid/05.jpg" class="img-fluid note-image rounded" alt="" />
                                                    </a>
                                                </li>
                                                <li class="col-4">
                                                    <a href="#">
                                                        <img src="/noteplus/assets/images/gallery/grid/03.jpg" class="img-fluid note-image rounded" alt="" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-primary">
                                                <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>01
                                                    Share</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>05
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-success note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-success rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-06" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton9" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton9" style="">
                                                        <a href="#" class="dropdown-item new-note6" data-toggle="modal" data-target="#new-note6"><i class="las la-eye mr-3"></i>View</a>
                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Benefits of NotePlus</h4>
                                            <p class="mb-3 card-description short">Take organized
                                                notes and share later as meeting minutes or
                                                check-list with this simple accessible Noteplus.
                                                Each note you create will be stored on a virtual
                                                page of the NotePlus. You can store groups of
                                                seperate notes. You can store an unlimited number of
                                                separate notes within the NotePlus.</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-success">
                                                <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>02
                                                    share</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>10
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-success note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-success rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-07" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note3']" data-original-title="pin content"><i class="las la-thumbtack mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton10" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton10" style="">
                                                            <a href="#" class="dropdown-item new-note7" data-toggle="modal" data-target="#new-note7"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Quick Summary</h4>
                                            <p class="mb-3 card-description short">Need to write a
                                                summary note of the subject you just finished?
                                                NotePlus lets you do in on-the-go!</p>
                                            <p class="text-underline ellipsis-text short">
                                                Https://Dribble.com/Shots/6387620</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-success">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only
                                                    You</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>11
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-warning rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-08" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <div class="dropdown">
                                                    <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton11" data-toggle="dropdown" aria-expanded="false" role="button">
                                                        <i class="ri-more-fill"></i>
                                                    </span>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton11" style="">
                                                        <a href="#" class="dropdown-item new-note8" data-toggle="modal" data-target="#new-note8"><i class="las la-eye mr-3"></i>View</a>
                                                        <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                        <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Address & Email</h4>
                                            <p class="mb-3 card-description short">Quickly note down
                                                the address and email address on NotePlus so that
                                                you can access it from anywhere.</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-warning">
                                                <a href="#" class=""><i class="las la-user-friends mr-2 font-size-20"></i>04
                                                    share</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>13
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-info rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-09" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" class="show-tab" data-show-tab="[href='#note4']" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="dropdownMenuButton12" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton12" style="">
                                                            <a href="#" class="dropdown-item new-note9" data-toggle="modal" data-target="#new-note9"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">NotePlus for Entrepreneurs</h4>
                                            <p class="mb-3 card-description short">With NotePlus,
                                                you can easily share via message, WhatsApp, emails
                                                etc. You can also save your notes and edit it later
                                                or can easily delete the note.</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-info">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only
                                                    You</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>14
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
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
                    <div id="shared" class="tab-pane fade">
                        <div class="icon active animate__animated animate__fadeIn i-grid">
                            <div class="row" id="sharednotes">
                                
                            </div>
                        </div>
                    </div>
                    <div id="favourite" class="tab-pane fade">
                        <div class="icon active animate__animated animate__fadeIn i-grid">
                            <div class="row" id="isfavourite">
                                <!-- <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-warning note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-warning rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-22" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton25" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton25" style="">
                                                            <a href="#" class="dropdown-item new-note3" data-toggle="modal" data-target="#new-note3"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Essay Outline</h4>
                                            <ul class="pl-3 mb-0">
                                                <li class="note-list mb-2">Content should be of
                                                    topic.</li>
                                                <li class="note-list mb-2">300 Words only.</li>
                                                <li class="note-list">Make presentation.</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-warning">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only
                                                    You</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>09
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-danger note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-danger rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-23" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton26" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton26" style="">
                                                            <a href="#" class="dropdown-item new-note4" data-toggle="modal" data-target="#new-note4"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Lecture Notes</h4>
                                            <div class="checkbox mb-2">
                                                <input type="checkbox" class="checkbox-input mr-3" id="checkbox10">
                                                <label for="checkbox10" class="note-checkbox mb-0">Chapter 1
                                                    notes.</label>
                                            </div>
                                            <div class="checkbox mb-2">
                                                <input type="checkbox" class="checkbox-input mr-3" id="checkbox11">
                                                <label for="checkbox11" class="note-checkbox mb-0">Chapter 2
                                                    Assignment.</label>
                                            </div>
                                            <div class="checkbox mb-2">
                                                <input type="checkbox" class="checkbox-input mr-3" id="checkbox12">
                                                <label for="checkbox12" class="note-checkbox mb-0">Chapter 3 practical
                                                    File.</label>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-danger">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only
                                                    You</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>15
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-info note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-info rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7h-2l-1 2H8l-1-2H5V5z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton27" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton27" style="">
                                                            <a href="#" class="dropdown-item new-note9" data-toggle="modal" data-target="#new-note9"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">NotePlus for Entrepreneurs</h4>
                                            <p class="mb-3 card-description short">With NotePlus,
                                                you can easily share via message, WhatsApp, emails
                                                etc. You can also save your notes and edit it later
                                                or can easily delete the note.</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-info">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only
                                                    You</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>18
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-purple note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-purple rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton28" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton28" style="">
                                                            <a href="#" class="dropdown-item new-note2" data-toggle="modal" data-target="#new-note2"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Birthday Celebration</h4>
                                            <p class="mb-3 card-description short">You can easily
                                                share via message, WhatsApp, emails etc. You can
                                                also save your notes and edit it later or can easily
                                                delete the note.</p>
                                            <ul class="pl-3 mb-0">
                                                <li class="note-list">Cakes and Balloons.</li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-purple">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only
                                                    You</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>10
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-primary note-detail">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-primary rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-26" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton29" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton29" style="">
                                                            <a href="#" class="dropdown-item new-note5" data-toggle="modal" data-target="#new-note5"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Image Notes</h4>
                                            <ul class="row mb-0 p-0 list-inline flex-wrap align-items-center">
                                                <li class="col-4">
                                                    <a href="#">
                                                        <img src="/noteplus/assets/images/gallery/grid/01.jpg" class="img-fluid rounded" alt="" />
                                                    </a>
                                                </li>
                                                <li class="col-4">
                                                    <a href="#">
                                                        <img src="/noteplus/assets/images/gallery/grid/02.jpg" class="img-fluid rounded" alt="" />
                                                    </a>
                                                </li>
                                                <li class="col-4">
                                                    <a href="#">
                                                        <img src="/noteplus/assets/images/gallery/grid/03.jpg" class="img-fluid rounded" alt="" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-primary">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only
                                                    You</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>5
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="card card-block card-stretch card-height card-bottom-border-success note-detail mb-0">
                                        <div class="card-header d-flex justify-content-between pb-1">
                                            <div class="icon iq-icon-box-2 icon-border-success rounded">
                                                <svg width="23" height="23" class="svg-icon" id="iq-main-27" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                                </svg>
                                            </div>
                                            <div class="card-header-toolbar d-flex align-items-center">
                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="favorite"><i class="lar la-heart mr-2"></i></a>
                                                <div class="card-header-toolbar d-flex align-items-center">
                                                    <div class="dropdown">
                                                        <span class="dropdown-toggle dropdown-bg" id="note-dropdownMenuButton30" data-toggle="dropdown" aria-expanded="false" role="button">
                                                            <i class="ri-more-fill"></i>
                                                        </span>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="note-dropdownMenuButton30" style="">
                                                            <a href="#" class="dropdown-item new-note7" data-toggle="modal" data-target="#new-note7"><i class="las la-eye mr-3"></i>View</a>
                                                            <a href="#" class="dropdown-item edit-note1" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-3"></i>Edit</a>
                                                            <a class="dropdown-item" data-extra-toggle="delete" data-closest-elem=".card" href="#"><i class="las la-trash-alt mr-3"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body rounded">
                                            <h4 class="card-title">Quick Summary</h4>
                                            <p class="mb-3 card-description short">Need to write a
                                                summary note of the subject you just finished?
                                                NotePlus lets you do in on-the-go!</p>
                                            <p class="text-underline ellipsis-text short">
                                                Https://Dribble.com/Shots/6387620</p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="d-flex align-items-center justify-content-between note-text note-text-success">
                                                <a href="#" class=""><i class="las la-user mr-2 font-size-20"></i>Only
                                                    You</a>
                                                <a href="#" class=""><i class="las la-calendar mr-2 font-size-20"></i>12
                                                    Jan 2021</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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
                                                        <h4 class="mb-2">Essay Outline <i class="lar la-heart ml-2"></i></h4>
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
                                                        <h4 class="mb-2">Lecture Notes <i class="lar la-heart ml-2"></i></h4>
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
                                                        <h4 class="mb-2">NotePlus for Entrepreneurs
                                                            <i class="lar la-heart ml-2"></i>
                                                        </h4>
                                                        <span>With NotePlus, you can easily share
                                                            via message, WhatsApp, emails
                                                            etc.</span>
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
                                                        <h4 class="mb-2">Birthday Celebration <i class="lar la-heart ml-2"></i></h4>
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
                                                        <h4 class="mb-2">Image Notes<i class="lar la-heart ml-2"></i></h4>
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
                                                        <h4 class="mb-2">Quick Summary <i class="lar la-heart ml-2"></i></h4>
                                                        <span>Need to write a summary note of the
                                                            subject you just finished</span>
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
include "../NotePlus/includes/footer.php";
?>