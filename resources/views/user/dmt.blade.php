@extends('layouts.user_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4> -->

              <div class="row">
                <div class="col-md-12">
<div class="card mb-4">
                    <h5 class="card-header">DMT</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="col-xl-12 col-md-12">
                  <div>
                    <!-- <div class="card-title d-flex justify-content-center align-items-center"> -->
                      
                      <!-- <small class="text-muted float-end">Merged input group</small> -->
                    <!-- </div> -->
                    <div class="card-body">
                      <div class="row">
                     
                      <div class="mb-3 col-lg-4 col-md-4">
                          <label class="form-label" for="basic-icon-default-phone">Phone No</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-phone2" class="input-group-text"
                              ><i class="bx bx-phone"></i
                            ></span>
                            <input
                              type="text"
                              id="basic-icon-default-phone"
                              class="form-control phone-mask"
                              placeholder="658 799 8941"
                              aria-label="658 799 8941"
                              aria-describedby="basic-icon-default-phone2"
                            />
                          </div>
                        </div>
                       
                        <div class="col-lg-2 col-md-2" style="margin-top:30px">
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
</div>
                      </div></div></div></div>
                    <!-- /Account -->
                  </div>
</div></div></div>
@endsection