<div id="manage_Retailer">
    <span>
        <i id="user_data_back" class='bx bx-md bx-arrow-back'></i>
        <span class="manage_retailer">Manage <span id="user_data"></span></span>
        <div class="form-check form-switch" style="float:right;">
            <label class="form-check-label" for="flexSwitchCheckChecked">Account Status</label>
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
        </div>
    </span>
    <hr />
    <div class="row">
        <h5 class="col-xl-12 col-md-12 mb-2">Manage Balance</h5>
        <div class="form-check form-switch col-lg-3 col-md-3">
            <label class="form-check-label" for="flexSwitchCheckChecked">Amount</label>
            <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-rupee"></i></span>
                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe"
                    aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
            </div>
            <div id="defaultFormControlHelp" class="form-text">
                Account Balance: ₹1000.00
            </div>
        </div>
        <div class="form-check form-switch col-lg-3 col-md-3">
            <label for="exampleFormControlSelect1" class="form-label mb-0">DMT Plan</label>
            <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                <option selected value="1">Retailer</option>
                <option value="2">Distributor</option>
                <option value="3">Master</option>
            </select>
        </div>
        <div class="form-check form-switch col-lg-3 col-md-3">
            <button type="button" style="margin-top: 1.3rem !important;" class="btn btn-primary">
                Update
            </button>
        </div>
    </div>
    <hr />
    <form id="r_profile_form">
        <div class="row">
            <div class="mb-3 col-xl-12 col-md-12">
                <h5 style="float:left;">Manage DMT</h5>
                <span style="float:right;" id="r_profile_action">
                    <button id="r_profile_edit" type="button" class="btn btn-primary m-1">Edit</button>
                    <button type="button" class=" m-1 btn btn-danger">Delete</button>
                </span>
            </div>
            <div class="mb-3 col-xl-6 col-md-6">
                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                    <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe"
                        aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                </div>
            </div>
            <div class="mb-3 col-xl-6 col-md-6">
                <label class="form-label" for="basic-icon-default-company">Company</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-company2" class="input-group-text"><i
                            class="bx bx-buildings"></i></span>
                    <input type="text" id="basic-icon-default-company" class="form-control" placeholder="ACME Inc."
                        aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-lg-6 col-md-6">
                <label class="form-label" for="basic-icon-default-email">Email</label>
                <div class="input-group input-group-merge">
                    <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                    <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe"
                        aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                    <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                </div>
            </div>
            <div class="mb-3 col-lg-6 col-md-6">
                <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                <div class="input-group input-group-merge">
                    <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                    <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="658 799 8941" aria-label="658 799 8941"
                        aria-describedby="basic-icon-default-phone2" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-xl-6 col-md-6 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Password"
                        aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
            </div>
            <div class="mb-3 col-xl-6 col-md-6 form-password-toggle">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Confirm Password</label>
                </div>
                <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password"
                        placeholder="Confirm Password" aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-xl-6 col-md-6">
                <label class="form-label" for="basic-icon-default-password">Address</label>
                <div class="input-group input-group-merge">
                    <input type="text" class="form-control" id="basic-icon-default-password" placeholder="Address"
                        aria-label="John Doe" aria-describedby="basic-icon-default-password" />
                </div>
            </div>
            <div class="mb-3 col-xl-6 col-md-6">
                <label class="form-label" for="basic-icon-default-cpassword">City</label>
                <div class="input-group input-group-merge">
                    <input type="text" class="form-control" id="basic-icon-default-cpassword" placeholder="City"
                        aria-label="John Doe" aria-describedby="basic-icon-default-cpassword2" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-xl-6 col-md-6">
                <label class="form-label" for="basic-icon-default-password">State</label>
                <div class="input-group input-group-merge">
                    <input type="text" class="form-control" id="basic-icon-default-password" placeholder="State"
                        aria-label="John Doe" aria-describedby="basic-icon-default-password" />
                </div>
            </div>
            <div class="mb-3 col-xl-6 col-md-6">
                <label class="form-label" for="basic-icon-default-cpassword">Pincode</label>
                <div class="input-group input-group-merge">
                    <input type="text" class="form-control" id="basic-icon-default-cpassword" placeholder="Pincode"
                        aria-label="John Doe" aria-describedby="basic-icon-default-cpassword2" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-xl-6 col-md-6">
                <label for="exampleFormControlSelect1" class="form-label">DMT Plan</label>
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected value="1">Retailer</option>
                    <option value="2">Distributor</option>
                    <option value="3">Master</option>
                </select>
            </div>
            <div class="mb-3 col-xl-6 col-md-6">
                <label class="form-label" for="basic-icon-default-cpassword">Services</label>
                <div class="row" style="margin:7px 0px;">
                    <div class="form-check form-switch col-lg-4 ml-5 col-md-4 ">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Money Transfer</label>
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                    </div>
                    <div class="form-check form-switch  col-lg-4 col-md-4">
                        <label class="form-check-label" for="flexSwitchCheckChecked">BBPS</label>
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                    </div>
                    <div class="form-check form-switch  col-lg-4 col-md-4">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Recharge</label>
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-xl-6 col-md-6">
                <label class="form-label" for="basic-icon-default-password">Status</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1" checked />
                        <label class="form-check-label" for="inlineRadio1">Active</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2" />
                        <label class="form-check-label" for="inlineRadio2">In-Active</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 col-xl-6 col-md-6">
                <label class="form-label" for="basic-icon-default-cpassword">Account Type</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1" />
                        <label class="form-check-label" for="inlineRadio1">Retailer</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2" checked />
                        <label class="form-check-label" for="inlineRadio2">Distributor</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2" />
                        <label class="form-check-label" for="inlineRadio2">Master</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-xl-6 col-md-6">
                <label for="exampleFormControlSelect1" class="form-label">Assign Distributor</label>
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected value="1">Retailer</option>
                    <option value="2">Distributor</option>
                    <option value="3">Master</option>
                </select>
            </div>
            <div class="mb-3 col-xl-6 col-md-6">
                <label for="exampleFormControlSelect1" class="form-label">Assign Master</label>
                <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                    <option selected value="1">Retailer</option>
                    <option value="2">Distributor</option>
                    <option value="3">Master</option>
                </select>
            </div>
        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Add User
        </button>
    </form>
    <div class="col-lg-4 col-md-6">
        <div class="mt-3">
            <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        </div>
                        <div class="modal-body">
                            <h2 class="text-center">Thank You!</h2>
                            <h3 class="text-center">User Added Successfully!</h3>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>