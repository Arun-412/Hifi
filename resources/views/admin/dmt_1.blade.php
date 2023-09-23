@extends('layouts.admin_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4> -->
    
              <div class="row">
                <div class="col-md-12">
<div class="card mb-4">
                    <h5 class="card-header">Distributer Charges</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                    <div class="col-xl-12 col-md-12">
            
            <div>
              <div class="card-body">
                <div>
                  
                  <table id="example" class="ui celled table">
                    <thead>
                      <tr>
                        <th>From Amount</th>
                        <th>To Amount</th>
                        <th>Fee Type</th>
                        <th>Fee</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($data as $d)
                      <tr>
                        <td><i class='bx bx-rupee bx-xs'></i>{{$d['from_amount']}}</td>
                        <td><i class='bx bx-rupee bx-xs'></i>{{$d['to_amount']}}</td>
                        @if($d['fee_type'] == 1)
                        <td>Amount (<i class='bx bx-rupee bx-xs'></i>)</td>
                        @else
                        <td>Percentage</td>
                        @endif
                        
                        <td><i class='bx bx-rupee bx-xs'></i>{{$d['fee']}}</td>
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