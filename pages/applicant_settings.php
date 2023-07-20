<?php
$page_title = "Profile | Applicant | BPA";
require '../php_func/session_check.php';
privilege_keeping("applicant","engineering_home.php");
// print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require('../php_func/header_temp.php')?>
</head>

<body>

<?php require '../components/navbar.php'; ?>

    <div class="container my-3">
        <div class="row gutters-sm">
            <div class="col-md-4 d-none d-md-block">
                <div class="card">
                    <div class="card-body">
                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home-content" aria-selected="true">Profile Information</button>
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile-content" aria-selected="false">Account Settings</button>
                            <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled-content" aria-selected="false">Security</button>
                            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages-content" aria-selected="false">Notification</button>
             
                        </div>
                    </div>
                </div>
            </div>
          <div class="col-md-8">
            <div class="card">
                <div class="card-header border-bottom mb-3 d-flex d-md-none">

                </div>
                <div class="card-body">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                            <h6>PROFILE INFORMATION</h6>
                            <hr>
                            <form>
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control text-muted" id="fullName" placeholder="Enter your fullname" value="Reignoel D. Rodriguez">
                                <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                            </div>
                     
                            <div class="mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" placeholder="Enter your location" value="Bay Area, San Francisco, CA">
                            </div>
                            <div class="form-group small text-muted">
                                All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
                            </div>
                            <button type="button" class="btn btn-primary">Update Profile</button>
                            <button type="reset" class="btn btn-light">Reset Changes</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <h6>ACCOUNT SETTINGS</h6>
                            <hr>
                            <form>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter your username" value="kennethvaldez">
                                <small id="usernameHelp" class="form-text text-muted">After changing your username, your old username becomes available for anyone else to claim.</small>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label class="d-block text-danger">Delete Account</label>
                                <p class="text-muted font-size-sm">Once you delete your account, there is no going back. Please be certain.</p>
                            </div>
                            <button class="btn btn-danger" type="button">Delete Account</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">
                            <h6>SECURITY SETTINGS</h6>
                            <hr>
                            <form>
                            <div class="mb-3">
                                <label class="d-block">Change Password</label>
                                <input type="text" class="form-control" placeholder="Enter your old password">
                                <input type="text" class="form-control mt-1" placeholder="New password">
                                <input type="text" class="form-control mt-1" placeholder="Confirm new password">
                            </div>
                            </form>
                            <hr>
                            <form>
                            <div class="mb-3">
                                <label class="d-block">Two Factor Authentication</label>
                                <button class="btn btn-info" type="button">Enable two-factor authentication</button>
                                <p class="small text-muted mt-2">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.</p>
                            </div>
                            </form>
                            <hr>
                            <form>
                            <div class="mb-3">
                                <label class="d-block">Sessions</label>
                                <p class="font-size-sm text-secondary">This is a list of devices that have logged into your account. Revoke any sessions that you do not recognize.</p>
                                <ul class="list-group list-group-sm">
                                <li class="list-group-item d-flex align-items-center">
                                    <div>
                                    <h6 class="mb-0">San Francisco City 190.24.335.55</h6>
                                    <small class="text-muted">Your current session seen in United States</small>
                                    </div>
                                    <button class="btn btn-light btn-sm ms-auto" type="button">More info</button>
                                </li>
                                </ul>
                            </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">
                            <h6>NOTIFICATION SETTINGS</h6>
                            <hr>
                            <form>
                            <div class="mb-3">
                                <label class="d-block mb-0">Security Alerts</label>
                                <div class="small text-muted mb-3">Receive security alert notifications via email</div>
                                <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheck1" checked="">
                                <label class="form-check-label" for="customCheck1">Email each time a vulnerability is found</label>
                                </div>
                                <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="customCheck2" checked="">
                                <label class="form-check-label" for="customCheck2">Email a digest summary of vulnerability</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="d-block">SMS Notifications</label>
                                <ul class="list-group list-group-sm">
                                <li class="list-group-item d-flex align-items-center">
                                    <div>Comments</div>
                                    <div class="form-check form-switch ms-auto">
                                    <input class="form-check-input" type="checkbox" id="customSwitch1" checked="">
                                    <label class="form-check-label" for="customSwitch1"></label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div>Updates From People</div>
                                    <div class="form-check form-switch ms-auto">
                                    <input class="form-check-input" type="checkbox" id="customSwitch2">
                                    <label class="form-check-label" for="customSwitch2"></label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div>Reminders</div>
                                    <div class="form-check form-switch ms-auto">
                                    <input class="form-check-input" type="checkbox" id="customSwitch3" checked="">
                                    <label class="form-check-label" for="customSwitch3"></label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div>Events</div>
                                    <div class="form-check form-switch ms-auto">
                                    <input class="form-check-input" type="checkbox" id="customSwitch4" checked="">
                                    <label class="form-check-label" for="customSwitch4"></label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <div>Pages You Follow</div>
                                    <div class="form-check form-switch ms-auto">
                                    <input class="form-check-input" type="checkbox" id="customSwitch5">
                                    <label class="form-check-label" for="customSwitch5"></label>
                                    </div>
                                </li>
                                </ul>
                            </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../bootstrap-5.3.0/js/bootstrap.bundle.js"></script>
    <script src="../js/jquery-3.6.4.js"></script>

</body>
</html>