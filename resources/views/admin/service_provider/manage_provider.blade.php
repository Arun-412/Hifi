@extends('layouts.admin_provider_submenu')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
            

              <div class="row">
                <div class="col-md-12">
<div class="card mb-4">
<h5 class="card-header">Manage Provider</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                    <div class="Add_Provider_Btn">
                    @if($data->status == 1)
                          
                          <div class="form-check form-switch mt-1">
                            <strong><label class="form-check-label" id="provider_handle_label_on" for="provider_handle">ON</label></strong>
                            <input class="form-check-input" type="checkbox" id="provider_handle_on" checked />

                        </div>
                          
                          @else
                          
                          <div class="form-check form-switch mt-1">
                            <strong><label class="form-check-label" id="provider_handle_label_off" for="provider_handle">OFF</label></strong>
                            <input class="form-check-input" type="checkbox" id="provider_handle_off" />

                        </div>
                        
                          @endif
</div>
                    <div class="row">

                  
                                  <div class="col col-md-12 col-lg-4 mb-3">
                                    <input type="hidden" id="provider_id"  value="{{$data->provider_id}}">
                                    <label for="nameWithTitle" class="form-label">Provider Name</label>
                                    <input
                                      autocomplete="off"
                                      minlength="3" disabled
                                      maxlength="40"
                                      type="text"
                                      id="Provider_Name"
                                      class="form-control"
                                      placeholder="Enter Provider Name"
                                      value="{{$data->provider_name}}"
                                    />
                                    <small id="provider_name_check" class="validate"></small>
                                  </div>
                               
                                
                                  <div class="col col-md-12 col-lg-3 mb-0">
                                    <label for="emailWithTitle" class="form-label">Provider Email</label>
                                    <input
                                      autocomplete="off"
                                      minlength="3" disabled
                                      maxlength="40"
                                      type="text"
                                      id="Provider_Email"
                                      class="form-control"
                                      placeholder="Enter Provider Email"
                                      value="{{$data->provider_email}}"
                                    />
                                    <small id="provider_email_check" class="validate"></small>
                                  </div>
                                  <div class="col col-md-12 col-lg-3 mb-0">
                                    <label for="dobWithTitle" class="form-label">Provider Mobile Number</label>
                                    <input disabled
                                      autocomplete="off"
                                      minlength="10"
                                      maxlength="10"
                                      type="text"
                                      id="Provider_Mobile_Number"
                                      class="form-control"
                                      placeholder="Enter Provider Mobile Number"
                                      value="{{$data->provider_mobile}}"
                                    />
                                    <small id="provider_mobile_check" class="validate"></small>
                                  </div>
                                  <div class="col col-md-12 col-lg-2 ">
                                  <button
                          type="button" id="provider_edit_cancel"
                          class="btn btn-outline-danger" style="margin-top:28px !important;display:none;"
                        >
                         X
                        </button> 
                                  <button
                          type="button" id="provider_edit"
                          class="btn btn-primary" style="margin-top:28px !important;"
                        >
                         Edit
                        </button> 
                        <button
                          type="button" id="Edit_Provider"
                          class="btn btn-success" style="margin-top:28px !important;display:none;"
                        >
                         Save
                        </button> 
                        
                        
                                  </div>
                                  </div>
                </div>              
</div></div>
</div></div>
@endsection
