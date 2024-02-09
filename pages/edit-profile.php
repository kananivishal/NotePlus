<?php
include "../includes/header.php";
include "../includes/sidebar.php";
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="iq-edit-list usr-edit">
                <ul class="iq-edit-profile d-flex nav nav-pills">
                    <li class="col-md-6 p-0">
                        <a class="nav-link active" data-toggle="pill" href="#personal-information">
                            Personal Information
                        </a>
                    </li>
                    <li class="col-md-6 p-0">
                        <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                            Change Password
                        </a>
                    </li>
                    <!-- <li class="col-md-3 p-0">
                        <a class="nav-link" data-toggle="pill" href="#emailandsms">
                            Email and SMS
                        </a>
                    </li>
                    <li class="col-md-3 p-0">
                        <a class="nav-link" data-toggle="pill" href="#manage-contact">
                            Manage Contact
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-12">
    <div class="iq-edit-list-data">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Personal Information</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Edit Profile Page -->
                        <form id="edit-profile">
                            <div class="form-group row align-items-center">
                                <div class="col-md-12">
                                    <div class="profile-img-edit">
                                        <div class="crm-profile-img-edit" id="imageName">
                                            <img class="crm-profile-pic avatar-100" name="ImageName" id="profile-image" src="noteplus/assets/images/user/?" alt="profile-pic">
                                            <div class="crm-p-image bg-primary">
                                                <i class="las la-pen upload-button" data-toggle="modal" data-target="#image"></i>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="form-group col-sm-6">
                                    <label for="uname">User Name:</label>
                                    <input type="text" class="form-control" id="uname">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="dob">Date Of Birth:</label>
                                    <input class="form-control" id="dob">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="mobilenumber">Mobile Number:</label>
                                    <input class="form-control" id="mobilenumber">
                                </div>
                                <div class="form-group col-sm-6" id="gender">
                                    <label class="d-block">Gender:</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input" checked="">
                                        <label class="custom-control-label" for="customRadio6"> Male
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio7"> Female </label>
                                    </div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Marital Status:</label>
                                    <select class="form-control" id="maritalstatus">
                                        <option selected="">Single</option>
                                        <option>Married</option>
                                        <option>Widowed</option>
                                        <option>Divorced</option>
                                        <option>Separated </option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Age:</label>
                                    <select class="form-control" id="age">
                                        <option>12-18</option>
                                        <option>19-32</option>
                                        <option selected="">33-45</option>
                                        <option>46-62</option>
                                        <option>63 > </option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Country:</label>
                                    <select class="form-control" id="country">
                                        <option>Caneda</option>
                                        <option>Noida</option>
                                        <option selected="">USA</option>
                                        <option>India</option>
                                        <option>Africa</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>State:</label>
                                    <select class="form-control" id="state">
                                        <option>California</option>
                                        <option>Florida</option>
                                        <option selected="">Georgia</option>
                                        <option>Connecticut</option>
                                        <option>Louisiana</option>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="cname">City:</label>
                                    <input type="text" class="form-control" id="cname">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label>Address:</label>
                                    <textarea class="form-control" id="address" rows="5" style="line-height: 22px;">
                                       </textarea>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary mr-2" onclick="editProfile()">Submit</button>
                            <button type="reset" class="btn iq-bg-danger">Cancel</button>
                        </form>
                        <div id="message">Error</div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Change Password</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="change-password">
                            <div class="form-group">
                                <label for="cpass">Current Password:</label>
                                <a class="float-right" href="/noteplus/pages/forgot-password.php" >Forgot Password</a>
                                <input type="Password" class="form-control" id="confirmpassword" value="">
                            </div>
                            <div class="form-group">
                                <label for="npass">New Password:</label>
                                <input type="Password" class="form-control" id="newpassword" value="">
                            </div>
                            <div class="form-group">
                                <label for="vpass">Verify Password:</label>
                                <input type="Password" class="form-control" id="verifypassword" value="">
                            </div>
                            <button type="button" class="btn btn-primary mr-2" onclick="changePassword()">Submit</button>
                            <button type="reset" class="btn iq-bg-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="tab-pane fade" id="emailandsms" role="tabpanel">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Email and SMS</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group row align-items-center">
                                <label class="col-md-3" for="emailnotification">Email
                                    Notification:</label>
                                <div class="col-md-9 custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="emailnotification" checked="">
                                    <label class="custom-control-label" for="emailnotification"></label>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-md-3" for="smsnotification">SMS
                                    Notification:</label>
                                <div class="col-md-9 custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="smsnotification" checked="">
                                    <label class="custom-control-label" for="smsnotification"></label>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-md-3" for="npass">When To Email</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="email01">
                                        <label class="custom-control-label" for="email01">You have
                                            new notifications.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="email02">
                                        <label class="custom-control-label" for="email02">You're
                                            sent a direct message</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="email03" checked="">
                                        <label class="custom-control-label" for="email03">Someone
                                            adds you as a connection</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-md-3" for="npass">When To Escalate Emails</label>
                                <div class="col-md-9">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="email04">
                                        <label class="custom-control-label" for="email04"> Upon new
                                            order.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="email05">
                                        <label class="custom-control-label" for="email05"> New
                                            membership approval</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="email06" checked="">
                                        <label class="custom-control-label" for="email06"> Member
                                            registration</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2" onclick="editProfile()">Submit</button>
                            <button type="reset" class="btn iq-bg-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div> -->
            <!-- <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Manage Contact</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="cno">Contact Number:</label>
                                <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email" value="Barryjone@demo.com">
                            </div>
                            <div class="form-group">
                                <label for="url">Url:</label>
                                <input type="text" class="form-control" id="url" value="https://getbootstrap.com">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn iq-bg-danger">Cancel</button>
                        </form>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="image" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Select Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="image-selection" id="image">
                    <img class="crm-profile-pic avatar-130" name="user-1.jpg" src="../assets/images/user/user-1.jpg">
                    <img class="crm-profile-pic avatar-130" name="user-2.jpg" src="../assets/images/user/user-2.jpg">
                    <img class="crm-profile-pic avatar-130" name="user-3.jpg" src="../assets/images/user/user-3.jpg">
                    <img class="crm-profile-pic avatar-130" name="user-4.jpg" src="../assets/images/user/user-4.jpg">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="saveChanges(event)">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script src="/noteplus/js/edit-profile.js"></script>
<?php
include "../includes/footer.php";
?>