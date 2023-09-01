<div id="Manage_Provider">

    <span id="user_data_back"><i class='bx bx-md bx-arrow-back'></i><span class="manage_retailer">Manage <span
                id="user_data"></span></span></span>

 
    <form id="r_commission" action="{{route('admin.service_details')}}" method="POST">
        @csrf
                    <div class="row">


                        <div class="mb-3 col-xl-3 col-md-3">

                            <label class="form-label" for="basic-icon-default-fullname">Service Name</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    placeholder="Service Name" aria-label="Service Name" name="service_name"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-3 col-xl-3 col-md-3">

                        <label for="exampleFormControlSelect1" class="form-label">Provider Name</label>
                        <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control provider_name" id="basic-icon-default-fullname"
                                    placeholder="Provider Name" aria-label="Provider Name" name="provider_name"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>

                        <div class="mb-3 col-xl-3 col-md-3">

                        <label class="form-label" for="basic-icon-default-password">Status</label>
                     
                      <div class="form-check form-switch  col-lg-4 col-md-4 mt-2">
                            <label class="form-check-label" for="flexSwitchCheckChecked">Active</label>
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked />

                        </div>
                    </div>
                    <div class="mb-3 col-xl-3 col-md-3" style="margin-top:28px;">
                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
</div>
                    </div>
</form>
<form id="r_commission" action="{{route('auth.verifyUser')}}" method="POST">
                    <div class="row">
                        
                        <div class="mb-3 col-xl-2 col-md-2">

                            <label class="form-label" for="basic-icon-default-fullname">From Amount</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    placeholder="Plan name" aria-label="Plan name"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-3 col-xl-2 col-md-2">

                            <label class="form-label" for="basic-icon-default-fullname">To Amount</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    placeholder="Plan name" aria-label="Plan name"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="mb-3 col-xl-2 col-md-2">
                            <label for="exampleFormControlSelect1" class="form-label">Fees Type</label>
                            <select class="form-select" id="exampleFormControlSelect1"
                                aria-label="Default select example">
                                <!-- <option selected>Open this select menu</option> -->
                                <option selected value="1">₹</option>
                                <option value="2">%</option>
                            </select>
                        </div>
                        <div class="mb-3 col-xl-2 col-md-2">

                            <label class="form-label" for="basic-icon-default-fullname">Fees Amount</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control" id="basic-icon-default-fullname"
                                    placeholder="Plan name" aria-label="Plan name"
                                    aria-describedby="basic-icon-default-fullname2" />
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-2" style="margin-top:28px;">
                        <button type="submit" class="btn btn-primary">
                        Add Fees
                    </button>
                        </div>
                    </div>
                   
                    
                </form>
             
</div>