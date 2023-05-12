@extends('layouts.vendor_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4> -->
  <!-- <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Manage Retailer</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-notifications.html"
                        ><i class="bx bx-bell me-1"></i>Manage Distributor</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-connections.html"
                        ><i class="bx bx-link-alt me-1"></i>Pending KYC</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i>Manage Master</a>
                    </li>
                  </ul> -->
  <div class="col-xl-12">

    <div class="nav-align-top mb-4">
      <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
        <li class="nav-item">
          <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
            data-bs-target="#navs-pills-justified-user" aria-controls="navs-pills-justified-user" aria-selected="true">
            <i class="tf-icons bx bx-user"></i>Add User
            <!-- <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">3</span> -->
          </button>
        </li>
        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
            data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="false">
            <i class="tf-icons bx bx-user"></i> Manage Retailer
            <!-- <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">3</span> -->
          </button>
        </li>

        <li class="nav-item">
          <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
            data-bs-target="#navs-pills-justified-messages" aria-controls="navs-pills-justified-messages"
            aria-selected="false">
            <i class="tf-icons bx bx-message-square"></i> Pending KYC
          </button>
        </li>

      </ul>
      <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-pills-justified-user" role="tabpanel">
          <div class="col-xl-12 col-md-12">
            <div>
              <!-- <div class="card-title d-flex justify-content-center align-items-center"> -->

              <!-- <small class="text-muted float-end">Merged input group</small> -->
              <!-- </div> -->
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
                      <label class="form-label" for="basic-icon-default-password">Status</label>
                      <div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1" />
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
                            value="option2" />
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
                  <button type="submit" class="btn btn-primary">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade show" id="navs-pills-justified-home" role="tabpanel">
          <div class="col-xl-12 col-md-12">
            <div>
              <!-- <div class="card-title d-flex justify-content-center align-items-center"> -->

              <!-- <small class="text-muted float-end">Merged input group</small> -->
              <!-- </div> -->
              <div class="card-body">
                <div class="row">
                  <h5 class="col-xl-12 col-md-12">Manage Retailer</h5>
                  <div class="mb-3 col-lg-4 col-md-4">
                    <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                      <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                        placeholder="658 799 8941" aria-label="658 799 8941"
                        aria-describedby="basic-icon-default-phone2" />
                    </div>
                  </div>
                  <div class="mb-3 col-lg-6 col-md-6">
                    <label class="form-label" for="basic-icon-default-email">Email</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                      <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe"
                        aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                      <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                    </div>

                  </div>
                  <div class="col-lg-2 col-md-2" style="margin-top:30px">

                    <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
          <div class="col-xl-12 col-md-12">
            <div>
              <!-- <div class="card-title d-flex justify-content-center align-items-center"> -->

              <!-- <small class="text-muted float-end">Merged input group</small> -->
              <!-- </div> -->
              <div class="card-body">
                <div class="row">
                  <h5 class="col-xl-12 col-md-12">Pending KYC</h5>
                  <div class="navbar-nav align-items-end">
                    <div class="nav-item d-flex align-items-end">
                      <!-- <i class="bx bx-search fs-4 lh-0"></i> -->
                      <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                        aria-label="Search..." />
                    </div>

                  </div>
                  <h5 class="align-items-center justify-content-center text-primary">There is no Pending KYC</h5>
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