@extends('layouts.vendor_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4> -->

              <div class="row">
                <div class="col-md-12">
<div class="card mb-4">
                    <h5 class="card-header">Manage DMT</h5>
                  
                    <hr class="my-0" />
                    <div class="card-body">
                    <div class="col-xl-12 col-md-12">
            @include('vendor.dmtplan')
            <div>
              <div class="card-body">
                <div>
                  <table id="example" class="ui celled table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Wallet Balance</th>
                        <th>Distributor</th>
                        <th>Commission</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><strong>Vinoth Kumar M</strong></td>
                        <td>₹1001.00</td>
                        <td>Vinoth Kumar M</td>
                        <td>Retailer</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                      </tr>
                      <tr>
                        <td> <strong>Vinoth Kumar M</strong></td>
                        <td>₹1002.00</td>
                        <td>Vinoth Kumar M</td>
                        <td>Retailer</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                      </tr>
                      <tr>
                        <td> <strong>Vinoth Kumar M</strong></td>
                        <td>₹1003.00</td>
                        <td>Vinoth Kumar M</td>
                        <td>Retailer</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                      </tr>
                      <tr>
                        <td> <strong>Vinoth Kumar M</strong></td>
                        <td>₹1004.00</td>
                        <td>Vinoth Kumar M</td>
                        <td>Retailer</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
                    </div>
                  
                  </div>
</div></div></div>
@endsection