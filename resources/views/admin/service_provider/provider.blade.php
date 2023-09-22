@extends('layouts.admin_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
            

              <div class="row">
                <div class="col-md-12">
<div class="card mb-4">
                    <h5 class="card-header">Manage Service Provider</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                    <div class="col-xl-12 col-md-12">
           
              <div class="card-body">
              @include('admin.service_provider.provider_model')
                <div>                  
                  <table id="Provider_Table_List" class="ui celled table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Services</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($data as $provider)
                        <tr>
                          <td><input type="hidden" id="action_token" value="{{$provider['provider_id']}}"><strong>{{$provider['provider_name']}}</strong></td>
                          <td>{{$provider['status']}}</td>
                          @if($provider['status'] == 1)
                          <td>
                          <div class="form-check form-switch mt-1">
                            <strong><label class="form-check-label" id="provider_handle_label_on" for="provider_handle">ON</label></strong>
                            <input class="form-check-input" type="checkbox" id="provider_handle_on" checked />

                        </div>
                          </td>
                          @else
                          <td>
                          <div class="form-check form-switch mt-1">
                            <strong><label class="form-check-label" id="provider_handle_label_off" for="provider_handle">OFF</label></strong>
                            <input class="form-check-input" type="checkbox" id="provider_handle_off" />

                        </div>
                          </td>
                          @endif
                          <td><a href="provider/{{$provider['provider_id']}}" class="menu-link">Edit</td>
                        </tr>
                      @endforeach                   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
                    </div>
                    <!-- /Account -->
                  </div>
</div></div></div>
<div class="col-lg-12 col-md-12">
                      <div>
                        <!-- Button trigger modal -->
                  

                        <!-- Modal -->
                        <div class="modal fade" id="Confirmation_model" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            <div>
@endsection