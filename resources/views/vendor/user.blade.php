@extends('layouts.vendor_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
<div class="col-xl-12">
    <div class="nav-align-top mb-4">
      <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
            data-bs-target="#navs-pills-justified-user" aria-controls="navs-pills-justified-user" aria-selected="true">
            <i class="tf-icons bx bx-user"></i>Add User
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
            data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="false">
            <i class="tf-icons bx bx-user"></i> Manage Retailer
          </button>
        </li>
      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-justified-user" role="tabpanel">
          <div class="col-xl-12 col-md-12">
            <div>
              <div class="card-body">
                <form>
                  <div class="row">
                    <h5 class="col-xl-12 col-md-12">Add User</h5>
                    <div class="mb-3 col-xl-6 col-md-6">
                      <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                            class="bx bx-user"></i></span>
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
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <!-- <option selected>Open this select menu</option> -->
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
                          <input class="form-check-input" type="radio" checked name="inlineRadioOptions" id="inlineRadio1"
                            value="option1" />
                          <label class="form-check-label" for="inlineRadio1">Retailer</label>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="mb-3 col-xl-6 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">Assign Distributor</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <!-- <option selected>Open this select menu</option> -->
                                <option selected value="1">Retailer</option>
                                <option value="2">Distributor</option>
                                <option value="3">Master</option>
                            </select>
                        </div>
                        <div class="mb-3 col-xl-6 col-md-6">
                            <label for="exampleFormControlSelect1" class="form-label">Assign Master</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <!-- <option selected>Open this select menu</option> -->
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
            </div>
          </div>
        </div>
        <div class="tab-pane fade show" id="navs-pills-justified-home" role="tabpanel">
          <div class="col-xl-12 col-md-12">
            @include('admin.manageretailer')
            <div>
              <div class="card-body">
                <div>
                  <table id="example" class="ui celled table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Wallet Balance</th>
                        <th>Distributor</th>
                        <th>Commission</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><strong>Vinoth Kumar M</strong></td>
                        <td>₹1001.00</td>
                        <td>Vinoth Kumar M</td>
                        <td>Retailer</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                      </tr>
                      <tr>
                        <td> <strong>Vinoth Kumar M</strong></td>
                        <td>₹1002.00</td>
                        <td>Vinoth Kumar M</td>
                        <td>Retailer</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                      </tr>
                      <tr>
                        <td> <strong>Vinoth Kumar M</strong></td>
                        <td>₹1003.00</td>
                        <td>Vinoth Kumar M</td>
                        <td>Retailer</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                      </tr>
                      <tr>
                        <td> <strong>Vinoth Kumar M</strong></td>
                        <td>₹1004.00</td>
                        <td>Vinoth Kumar M</td>
                        <td>Retailer</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
@endsection