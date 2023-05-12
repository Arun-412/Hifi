@extends('layouts.vendor_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4> -->

              <div class="row">
                <div class="col-md-12">
<div class="card mb-4">
                    <h5 class="card-header">Manage Report</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body row">
                    <div class="mb-3 col-lg-3 col-md-3">
                        <label for="html5-date-input" class=" col-form-label">From Date</label>
                        <div>
                            <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                        </div>
                    </div>
                    <div class="mb-3 col-lg-3 col-md-3">
                        <label for="html5-date-input" class=" col-form-label">To Date</label>
                        <div>
                            <input class="form-control" type="date" value="2021-06-18" id="html5-date-input" />
                        </div>
                    </div>
                    <div class="mb-3 col-xl-3 col-md-3">
                        <label class="col-form-label" for="basic-icon-default-cpassword">Transaction ID</label>
                        <div class="input-group input-group-merge">

                            <input type="text" class="form-control" id="basic-icon-default-cpassword"
                                placeholder="Pincode" aria-label="John Doe"
                                aria-describedby="basic-icon-default-cpassword2" />
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3" style="margin-top:33px">

                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
                    <!-- /Account -->
                  </div>
</div></div></div>
@endsection