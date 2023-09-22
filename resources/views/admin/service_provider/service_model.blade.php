<div class="col-lg-12 col-md-12">
                      <div class="Add_Provider_Btn">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#Add_Service_Model"
                          id="fetch_service_type"
                        >
                         Add Service
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="Add_Service_Model" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Add Service</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                  id="service_model_close_icon"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col-lg-7 col-md-7 mb-3">
                                    <label for="nameWithTitle" class="form-label">Service Name</label>
                                    <input
                                      autocomplete="off"
                                      minlength="3"
                                      maxlength="40"
                                      type="text"
                                      id="Service_Name"
                                      class="form-control"
                                      placeholder="Enter Service Name"
                                    />
                                    <small id="service_name_check" class="validate"></small>
                                  </div>
                                  <div class="col-lg-5 col-md-5 mb-0">
                                  
                                        <label for="exampleFormControlSelect1" class="form-label">Service Type</label>
                                        <select class="form-select" id="service_type" aria-label="Default select example">
                                        
                                        </select>
                                        <small id="service_type_check" class="validate"></small>
                                </div>
                              </div>
                              <div class="modal-footer" style="margin-bottom:-22px;">
                                <button type="button" id="provider_model_cancel_btn" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Cancel
                                </button>
                                <button type="button" id="Add_Service" class="btn btn-primary">Add Service</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            <div>