@extends('layouts.admin_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4> -->
    
              <div class="row">
                <div class="col-md-12">
<div class="card mb-4">
                    <h5 class="card-header">Transaction</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                    <div class="col-xl-12 col-md-12">
            
            <div>
              <div class="card-body">
                <div>
                  <h2>Retailer</h2>
                  <form action="{{route('admin.payment')}}" method="post">
                    @csrf
                  <input type="text" name="amount" id="amount">
                  <button type="submit" id="R_transaction">Pay</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
                    </div>
                    <!-- /Account -->
                  </div>
</div></div></div>
@endsection