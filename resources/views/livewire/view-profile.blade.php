<!-- Modal -->
<div class="modal fade" id="view-profile-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Profile Information</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    wire:click="closeModal"></button>
            </div>
            <div class="modal-body">
                {{-- @php(isset($errors) ? $errors : ($errors = []))
                @if ($errors !== [])
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                @if ($data !== [])
                    <form id="multi-step-form" wire:submit.prevent="updateProfile">
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs" id="formTabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="page1-tab" data-toggle="tab" href="#page1"
                                            role="tab" aria-controls="page1" aria-selected="true">Page 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="page2-tab" data-toggle="tab" href="#page2"
                                            role="tab" aria-controls="page2" aria-selected="false">Page 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="page3-tab" data-toggle="tab" href="#page3"
                                            role="tab" aria-controls="page3" aria-selected="false">Page 3</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="formTabContent">
                                    <div class="tab-pane fade show active" id="page1" role="tabpanel"
                                        aria-labelledby="page1-tab">
                                        <!-- Page 1 content -->
                                        <div class="form-group my-2">
                                            <label for="first_name">First Name</label>
                                            <input type="text" class="form-control" id="first_name"
                                                wire:model.defer="first_name" value="{{ $first_name }}">
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="middle_name">Middle Name</label>
                                            <input type="text" class="form-control" id="middle_name"
                                                wire:model.defer="middle_name" value="{{ $middle_name }}">
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" class="form-control" id="last_name"
                                                wire:model.defer="last_name" value="{{ $last_name }}">
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="suffix">Suffix</label>
                                            <select wire:model.defer="suffix" id="suffix" class="form-select"
                                                value="{{ $suffix }}">
                                                <option value="">Select Suffix</option>
                                                <option value="Jr"
                                                    @if ($suffix == 'Jr') selected @endif>Jr</option>
                                                <option value="Sr"
                                                    @if ($suffix == 'Sr') selected @endif>Sr</option>
                                                <option value="II"
                                                    @if ($suffix == 'II') selected @endif>II</option>
                                                <option value="III"
                                                    @if ($suffix == 'III') selected @endif>III</option>
                                                <option value="IV"
                                                    @if ($suffix == 'IV') selected @endif>IV</option>
                                                <option value="V"
                                                    @if ($suffix == 'V') selected @endif>V</option>
                                                <option value="VI"
                                                    @if ($suffix == 'VI') selected @endif>VI</option>
                                                <option value="VII"
                                                    @if ($suffix == 'VII') selected @endif>VII</option>
                                                <option value="VIII"
                                                    @if ($suffix == 'VIII') selected @endif>VIII</option>
                                                <option value="IX"
                                                    @if ($suffix == 'IX') selected @endif>IX</option>
                                                <option value="X"
                                                    @if ($suffix == 'X') selected @endif>X</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-primary next-btn">Next</button>
                                    </div>


                                    <div class="tab-pane fade" id="page2" role="tabpanel"
                                        aria-labelledby="page2-tab">
                                        <!-- Page 2 content -->
                                        <div class="form-group my-2">
                                            <label for="birthdate">BirthDate</label>
                                            <input type="date" class="form-control" id="birthdate"
                                                wire:model.defer="birthdate" value="{{ $birthdate }}">
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="birthplace">BirthPlace</label>
                                            <input type="text" class="form-control" id="birthplace"
                                                wire:model.defer="birthplace" value="{{ $birthplace }}">
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="registry_no">Registry Number</label>
                                            <input type="text" class="form-control" id="registry_no"
                                                wire:model.defer="registry_no" value="{{ $registry_no }}">
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="page">Page</label>
                                            <input type="text" class="form-control" id="page"
                                                wire:model.defer="page">
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
                                                wire:model.defer="book" value="{{ $book }}">
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="mother_name">Mother's Name</label>
                                            <input type="text" class="form-control" id="mother_name"
                                                wire:model.defer="mother_name" value="{{ $mother_name }}">
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="father_name">Father's Name</label>
                                            <input type="text" class="form-control" id="father_name"
                                                wire:model.defer="father_name" value="{{ $father_name }}">
                                        </div>
                                        <div class="form-group my-2">
                                            <label for="is_married">Are the parents married?</label>
                                            <select wire:model.defer="is_married" id="is_married" class="form-select"
                                                value="{{ $is_married }}">
                                                <option value="0"
                                                    @if ($is_married == 0) selected @endif>No</option>
                                                <option value="1"
                                                    @if ($is_married == 1) selected @endif>Yes</option>
                                            </select>
                                        </div>
                                        <div class="mt-3">

                                            <button class="btn btn-secondary prev-btn">Previous</button>
                                            <button type="submit" class="btn btn-outline-primary">
                                                Create Profile
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
