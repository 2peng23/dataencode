<!-- Modal -->
<div class="modal fade" id="create-profile-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Information</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="error-div" style="display: none">

                </ul>
                <form id="create-form" method="POST" action="{{ route('profile.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" id="formTabs1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="page1-tab" data-toggle="tab" href="#page1"
                                        role="tab" aria-controls="page1" aria-selected="true">Page 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="page2-tab" data-toggle="tab" href="#page2" role="tab"
                                        aria-controls="page2" aria-selected="false">Page 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="page3-tab" data-toggle="tab" href="#page3" role="tab"
                                        aria-controls="page3" aria-selected="false">Page 3</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="formTabContent">
                                <div class="tab-pane 1 fade show active" id="page1" role="tabpanel"
                                    aria-labelledby="page1-tab">
                                    <!-- Page 1 content -->
                                    <div class="form-group my-2">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" name="first_name">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="middle_name">Middle Name</label>
                                        <input type="text" class="form-control" name="middle_name">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" name="last_name">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="suffix">Suffix</label>
                                        <select name="suffix" class="form-select">
                                            <option value="">Select Suffix</option>
                                            <option value="Jr">Jr</option>
                                            <option value="Sr">Sr</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                            <option value="IX">IX</option>
                                            <option value="X">X</option>
                                        </select>
                                    </div>
                                    <button class="btn btn-primary next-btn1">Next</button>
                                </div>

                                <div class="tab-pane 1 fade" id="page2" role="tabpanel" aria-labelledby="page2-tab">
                                    <!-- Page 2 content -->
                                    <div class="form-group my-2">
                                        <label for="birthdate">BirthDate</label>
                                        <input type="date" class="form-control" name="birthdate">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="birthplace">BirthPlace</label>
                                        <input type="text" class="form-control" name="birthplace">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="registry_no">Registry Number</label>
                                        <input type="text" class="form-control" name="registry_no">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="page_no">Page</label>
                                        <input type="text" class="form-control" name="page_no">
                                    </div>
                                    <button class="btn btn-secondary prev-btn1">Previous</button>
                                    <button class="btn btn-primary next-btn1">Next</button>
                                </div>

                                <div class="tab-pane 1 fade" id="page3" role="tabpanel"
                                    aria-labelledby="page3-tab">
                                    <!-- Page 3 content -->
                                    <div class="form-group my-2">
                                        <label for="book">Book</label>
                                        <input type="text" class="form-control" name="book">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="mother_name">Mother's Name</label>
                                        <input type="text" class="form-control" name="mother_name">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="father_name">Father's Name</label>
                                        <input type="text" class="form-control" name="father_name">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="is_married">Are the parents married?</label>
                                        <select name="is_married" class="form-select" id="is_married1">
                                            <option value="0" selected>No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                    <div id="m-div1" style="display: none">
                                        <div class="form-group my-2">
                                            <label for="m_date">Date of Marriage</label>
                                            <input type="date" class="form-control" name="m_date">
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="m_place">Place of Marriage</label>
                                            <input type="text" class="form-control" name="m_place">
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-secondary prev-btn1">Previous</button>
                                        <button type="submit" class="btn btn-outline-primary">
                                            Create Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
