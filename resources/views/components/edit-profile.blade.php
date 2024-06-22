<!-- Modal -->
<div class="modal fade" id="edit-profile-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Information</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul id="error-div" style="display: none">

                </ul>
                <input type="hidden" id="profile_id">
                {{-- <form id="update-form" method="PUT" >
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="nav nav-tabs" id="formTabs" role="tablist">
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
                                <div class="tab-pane fade show active" id="page1" role="tabpanel"
                                    aria-labelledby="page1-tab">
                                    <!-- Page 1 content -->
                                    <div class="form-group my-2">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name"
                                            name="first_name">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="middle_name">Middle Name</label>
                                        <input type="text" class="form-control" id="middle_name"
                                            name="middle_name">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name"
                                            name="last_name">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="suffix">Suffix</label>
                                        <select name="suffix" id="suffix" class="form-select">
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
                                    <button class="btn btn-primary next-btn">Next</button>
                                </div>


                                <div class="tab-pane fade" id="page2" role="tabpanel" aria-labelledby="page2-tab">
                                    <!-- Page 2 content -->
                                    <div class="form-group my-2">
                                        <label for="birthdate">BirthDate</label>
                                        <input type="date" class="form-control" id="birthdate"
                                            name="birthdate">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="birthplace">BirthPlace</label>
                                        <input type="text" class="form-control" id="birthplace"
                                            name="birthplace">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="registry_no">Registry Number</label>
                                        <input type="text" class="form-control" id="registry_no"
                                            name="registry_no">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="page_no">Page</label>
                                        <input type="text" class="form-control" id="page_no"
                                            name="page_no">
                                    </div>
                                    <button class="btn btn-secondary prev-btn">Previous</button>
                                    <button class="btn btn-primary next-btn">Next</button>
                                </div>


                                <div class="tab-pane fade" id="page3" role="tabpanel"
                                    aria-labelledby="page3-tab">
                                    <!-- Page 3 content -->
                                    <div class="form-group my-2">
                                        <label for="book">Book</label>
                                        <input type="text" class="form-control" id="book"
                                            name="book">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="mother_name">Mother's Name</label>
                                        <input type="text" class="form-control" id="mother_name"
                                            name="mother_name">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="father_name">Father's Name</label>
                                        <input type="text" class="form-control" id="father_name"
                                            name="father_name">
                                    </div>
                                    <div class="form-group my-2">
                                        <label for="is_married">Are the parents married?</label>
                                        <select name="is_married" id="is_married" class="form-select">
                                            <option value="0" selected>No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">

                                        <button class="btn btn-secondary prev-btn">Previous</button>
                                        <button type="submit" class="btn btn-outline-primary">
                                            Update Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> --}}
                <div class="container mt-5">
                    <form id="update-form" method="PUT">
                        @csrf
                        <!-- Step 1 -->
                        <div class="step step-active">
                            <div class="form-group my-2">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                            <div class="form-group my-2">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name">
                            </div>
                            <div class="form-group my-2">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                            <div class="form-group my-2">
                                <label for="suffix">Suffix</label>
                                <select name="suffix" id="suffix" class="form-select">
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
                            <button type="button" class="btn btn-primary" onclick="nextStep(1)">Next</button>
                        </div>
                        <!-- Step 2 -->
                        <div class="step">
                            <div class="form-group my-2">
                                <label for="birthdate">BirthDate</label>
                                <input type="date" class="form-control" id="birthdate"
                                    name="birthdate">
                            </div>
                            <div class="form-group my-2">
                                <label for="birthplace">BirthPlace</label>
                                <input type="text" class="form-control" id="birthplace"
                                    name="birthplace">
                            </div>
                            <div class="form-group my-2">
                                <label for="registry_no">Registry Number</label>
                                <input type="text" class="form-control" id="registry_no"
                                    name="registry_no">
                            </div>
                            <div class="form-group my-2">
                                <label for="page_no">Page</label>
                                <input type="text" class="form-control" id="page_no"
                                    name="page_no">
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="previousStep(0)">Previous</button>
                            <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next</button>
                        </div>
                        <!-- Step 3 -->
                        <div class="step">
                            <div class="form-group my-2">
                                <label for="book">Book</label>
                                <input type="text" class="form-control" id="book"
                                    name="book">
                            </div>
                            <div class="form-group my-2">
                                <label for="mother_name">Mother's Name</label>
                                <input type="text" class="form-control" id="mother_name"
                                    name="mother_name">
                            </div>
                            <div class="form-group my-2">
                                <label for="father_name">Father's Name</label>
                                <input type="text" class="form-control" id="father_name"
                                    name="father_name">
                            </div>
                            <div class="form-group my-2">
                                <label for="is_married">Are the parents married?</label>
                                <select name="is_married" id="is_married" class="form-select">
                                    <option value="0" selected>No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div id="m-div" style="display: none">
                                <div class="form-group my-2">
                                    <label for="m_date">Date of Marriage</label>
                                    <input type="date" class="form-control" name="m_date" id="m_date">
                                </div>
                                <div class="form-group my-2">
                                    <label for="m_place">Place of Marriage</label>
                                    <input type="text" class="form-control" name="m_place" id="m_place">
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" onclick="previousStep(1)">Previous</button>
                            <button type="submit" class="btn btn-success">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function nextStep(step) {
        console.log('click');
        let steps = document.getElementsByClassName("step");
        steps[step - 1].classList.remove("step-active");
        steps[step].classList.add("step-active");
    }

    function previousStep(step) {
        let steps = document.getElementsByClassName("step");
        steps[step + 1].classList.remove("step-active");
        steps[step].classList.add("step-active");
    }
</script>
