@extends('layouts.admin_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4> -->
    
              <div class="row">
                <div class="col-md-12">
<div class="card mb-4">
                    <h5 class="card-header">Distributer Report</h5>
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
                        <th>Date - Time</th>
                        <th>Retailer Name</th>
                        <th>Service Name</th>
                        <th>Service Details</th>
                        <th>Amount</th>
                        <th>Opening Balance</th>
                        <th>Commission</th>
                        <th>Closing Balance</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($data['distributer_report'] as $d)
                      <tr>
                        <td>{{$d['created_at']}}</td>
                        <td>Arun</td>
                        <td>Money Transfer</td>
                        <td>Canara Bank - 83882382398238</td>
                        <td><i class='bx bx-rupee bx-xs'></i>{{$d['amount']}}</td>
                        <td><i class='bx bx-rupee bx-xs'></i>{{$d['o_balance']}}</td>
                        <td><i class='bx bx-rupee bx-xs'></i>{{$d['commission']}}</td>
                        <td><i class='bx bx-rupee bx-xs'></i>{{$d['c_balance']}}</td>
                        <td>Success</td>
                        <td><a href="{{url('admin/r_print')}}{{'/'.$d['service_detail_id']}}">Print</a></td>
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