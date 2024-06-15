<!-- Modal -->
<div class="modal fade" id="info-profile-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <div class="card">
                    <div class="card-body">
                        @if ($data !== [])
                            <div class="m-1">
                                <p>First Name : {{ $data->first_name }}</p>
                                <p>Middle Name : {{ $data->middle_name }}</p>
                                <p>Last Name : {{ $data->last_name }}</p>
                                <p>Suffix : {{ $data->suffix }}</p>
                                <p>Birthday : {{ $data->birthdate }}</p>
                                <p>Birthplace : {{ $data->birthplace }}</p>
                                <p>Registry Number : {{ $data->registry_no }}</p>
                                <p>Mother's Name : {{ $data->mother_name }}</p>
                                <p>Father's Name : {{ $data->father_name }}</p>
                                <p>Are parents married? : {{ $data->is_married == 0 ? 'No' : 'Yes' }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
