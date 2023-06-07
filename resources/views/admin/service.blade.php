@extends('layouts.admin_master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4> -->

              <div class="row">
                <div class="col-md-12">
<div class="card mb-4">
                    <h5 class="card-header">Manage Services</h5>
                    <!-- Account -->
                    <hr class="my-0" />
                    <div class="card-body">
                    <div class="col-xl-12 col-md-12">
            @include('admin.serviceplan')
            <div>
              <div class="card-body">
                <div>
                  <div class="row" style="display:flex;justify-content:flex-end;">
                    <div class="col-xl-2 col-md-2">
                    <button id="addRow" type="button" class="mb-2 btn btn-primary">Add Plan</button>
                    </div>
                  </div>
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
                    <!-- /Account -->
                  </div>
</div></div></div>
@endsection