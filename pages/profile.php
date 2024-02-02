<?php
include "../includes/header.php";
include "../includes/sidebar.php";
?>

<div class="col-xl-3 col-lg-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">User</h4>
            </div>
        </div>
        <div class="card-body">
            <form>
                <div class="form-group text-center">
                    <div class="d-flex justify-content-center">
                        <div class="crm-profile-img-edit">
                            <img class="crm-profile-pic avatar-130" src="../assets/images/user/1.jpg" alt="profile-pic">
                            <!-- <div class="crm-p-image bg-primary">
                                <i class="las la-pen upload-button"></i>
                                <input class="file-upload" type="file" accept="image/*">
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="img-extension mt-3">
                        <div class="d-inline-block align-items-center">
                            <span>Only</span>
                            <a href="javascript:void();">.jpg</a>
                            <a href="javascript:void();">.png</a>
                            <a href="javascript:void();">.jpeg</a>
                            <span>allowed</span>
                        </div>
                    </div> -->
                </div>
                <!-- <div class="form-group">
                    <label>User Role:</label>
                    <select class="form-control" id="selectuserrole">
                        <option>Select</option>
                        <option>Web Designer</option>
                        <option>Web Developer</option>
                        <option>Tester</option>
                        <option>Php Developer</option>
                        <option>Ios Developer </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="furl">Facebook Url:</label>
                    <input type="text" class="form-control" id="furl" placeholder="Facebook Url">
                </div>
                <div class="form-group">
                    <label for="turl">Twitter Url:</label>
                    <input type="text" class="form-control" id="turl" placeholder="Twitter Url">
                </div>
                <div class="form-group">
                    <label for="instaurl">Instagram Url:</label>
                    <input type="text" class="form-control" id="instaurl" placeholder="Instagram Url">
                </div>
                <div class="form-group">
                    <label for="lurl">Linkedin Url:</label>
                    <input type="text" class="form-control" id="lurl" placeholder="Linkedin Url">
                </div> -->
            </form>
        </div>
    </div>
</div>
<div class="col-xl-9 col-lg-8">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Your Information</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="new-user-info">
                <form>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="fname">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Name" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">Date of Birth:</label>
                            <input type="text" class="form-control" id="dob" placeholder="Date of Birth" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="mobno">Mobile Number:</label>
                            <input type="text" class="form-control" id="mobilenumber" placeholder="Mobile Number" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="altconno">Gender</label>
                            <input type="text" class="form-control" id="gender" placeholder="Gender" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="add2">Marital Status</label>
                            <input type="text" class="form-control" id="merital" placeholder="Marital Status" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="add2">Age</label>
                            <input type="text" class="form-control" id="age" placeholder="Age" disabled>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Country:</label>
                            <input type="text" class="form-control" id="country" placeholder="Country" disabled>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="state">State:</label>
                            <input type="text" class="form-control" id="state" placeholder="State" disabled>
                        </div>

                        <!-- <div class="form-group col-md-6">
                            <label for="pno">Pin Code:</label>
                            <input type="text" class="form-control" id="pno" placeholder="Pin Code">
                        </div> -->
                        <div class="form-group col-md-12">
                            <label for="city">Town/City:</label>
                            <input type="text" class="form-control" id="city" placeholder="Town/City" disabled>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="add1">Address :</label>
                            <input type="text" class="form-control" id="address" placeholder="Address " disabled>
                        </div>
                    </div>
                    <!-- <hr>
                    <h5 class="mb-3">Security</h5>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="uname">User Name:</label>
                            <input type="text" class="form-control" id="uname" placeholder="User Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pass">Password:</label>
                            <input type="password" class="form-control" id="pass" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="rpass">Repeat Password:</label>
                            <input type="password" class="form-control" id="rpass" placeholder="Repeat Password ">
                        </div>
                    </div>
                    <div class="checkbox">
                        <label><input class="mr-2" type="checkbox">Enable Two-Factor-Authentication</label>
                    </div> -->
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../js/profile.js"></script>
<?php
include "../includes/footer.php";
?>