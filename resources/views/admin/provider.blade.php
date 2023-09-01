@extends('layouts.admin_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
            

              <div class="row">
                <div class="col-md-12">
<div class="card mb-4">
                    <h5 class="card-header">Manage Provider</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                    <div class="col-xl-12 col-md-12">
           
              <div class="card-body">
              @include('admin.provider_model')
                <div>                  
                  <table id="Provider_Table_List" class="ui celled table">
                    <thead>
                      <tr>
                        <th>Provider Name</th>
                        <th>Services</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      @foreach($data as $provider)
                        <tr>
                          <td><strong>{{$provider['provider_name']}}</strong></td>
                          <td>{{$provider['status']}}</td>
                          @if($provider['status'] == 1)
                          <td><span class="badge bg-label-primary me-1">Active</span></td>
                          @else
                          <td><span class="badge bg-label-primary me-1">In-Active</span></td>
                          @endif
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
@endsection