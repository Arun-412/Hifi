<div class="col-lg-12 col-md-12">
                      <div class="Add_Provider_Btn">
                        <!-- Button trigger modal -->
                        <button
                          type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#Add_Provider_Model"

                        >
                         Add Provider
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="Add_Provider_Model" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Add Provider</h5>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"
                                  id="provider_model_close_icon"
                                ></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Provider Name</label>
                                    <input
                                      autocomplete="off"
                                      minlength="3"
                                      maxlength="40"
                                      type="text"
                                      id="Provider_Name"
                                      class="form-control"
                                      placeholder="Enter Provider Name"
                                    />
                                    <small id="provider_name_check" class="validate"></small>
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailWithTitle" class="form-label">Provider Email</label>
                                    <input
                                      autocomplete="off"
                                      minlength="3"
                                      maxlength="40"
                                      type="text"
                                      id="Provider_Email"
                                      class="form-control"
                                      placeholder="Enter Provider Email"
                                    />
                                    <small id="provider_email_check" class="validate"></small>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobWithTitle" class="form-label">Provider Mobile Number</label>
                                    <input
                                      autocomplete="off"
                                      minlength="10"
                                      maxlength="10"
                                      type="text"
                                      id="Provider_Mobile_Number"
                                      class="form-control"
                                      placeholder="Enter Provider Mobile Number"
                                    />
                                    <small id="provider_mobile_check" class="validate"></small>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" id="provider_model_cancel_btn" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Cancel
                                </button>
                                <button type="button" id="Add_Provider" class="btn btn-primary">Add Provider</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
            <div>