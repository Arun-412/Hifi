@extends('layouts.admin_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4> -->
    
              <div class="row">
                <div class="col-md-12">
<div class="card mb-4">
                    <h5 class="card-header">Money Transfer Report</h5>
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
                        <th>Transaction ID</th>
                        <th>Bank Name</th>
                        <th>Account Number</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    @foreach($data['money_transfer'] as $d)
                      <tr>
                        <td>{{date("d-m-Y - g:i:s A", strtotime($d['created_at']))}}</td>
                        <td>{{$d['transaction_id']}}</td>
                        <td>Axis Bank</td>
                        <td>83882382398238</td>
                        <td><i class='bx bx-rupee bx-xs'></i>{{$d['amount']}}</td>
                        <td>{{$d['status']}}</td>
                        <td><a href="{{url('admin/print')}}{{'/'.$d['transaction_id']}}">Print</a></td>
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