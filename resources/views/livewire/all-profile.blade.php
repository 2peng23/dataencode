<div>
    <x-create-profile />
    <div class="card mt-5">
        <div class="card-header">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#filterCollapse"
                aria-expanded="false" aria-controls="filterCollapse">
                Filters
            </button>
        </div>
        <div id="filterCollapse" class="collapse">
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-4">
                        <label for="searchQuery">Search</label>
                        <input type="text" wire:model="searchQuery" class="form-control" id="searchQuery"
                            name="searchQuery" placeholder="Search">
                    </div>
                    <!-- Add additional filter options here -->
                    <div class="form-group col-4">
                        <label for="birthYear">Birth Year</label>
                        <select wire:model="birthYear" class="form-control" id="birthYear" name="birthYear">
                            <option value="">Select Year</option>
                            <!-- Dynamic generation of options for years 1950 to 2030 -->
                            @for ($year = 1950; $year <= 2030; $year++)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <label for="perPage">Per Page</label>
                        <select wire:model="perPage" class="form-control" id="perPage" name="perPage">
                            <option value="15" selected>15</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="250">250</option>
                            <option value="500">500</option>
                        </select>
                    </div>
                </div>
                {{-- Livewire search form --}}
                <button wire:click="fetchData" class="btn btn-outline-primary mt-2">Apply Filters</button>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-end my-3">
        <button class="btn btn-outline-success" id="create-profile">Add Profile</button>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table p-5 table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Birthdate</th>
                            <th>Birthplace</th>
                            <th class="text-nowrap">Registry Number</th>
                            <th>Page</th>
                            <th>Book</th>
                            <th class="text-nowrap">Mother's Name</th>
                            <th class="text-nowrap">Father's Name</th>
                            <th class="text-nowrap">Married Parents</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($profiles as $profile)
                            <tr>
                                <td class="text-nowrap">{{ $profile->first_name }} {{ $profile->middlename }}
                                    {{ $profile->suffix }}</td>
                                <td class="text-nowrap">
                                    {{ \Carbon\Carbon::parse($profile->birthdate)->format('F d, Y') }}</td>
                                <td class="text-nowrap">{{ $profile->birthplace }}</td>
                                <td>{{ $profile->registry_no }}</td>
                                <td>{{ $profile->page }}</td>
                                <td>{{ $profile->book }}</td>
                                <td class="text-nowrap">{{ $profile->mother_name }}</td>
                                <td class="text-nowrap">{{ $profile->father_name }}</td>
                                <td class="text-nowrap">{{ $profile->is_married }}</td>
                                <td class="d-flex">
                                    <button value="{{ $profile->id }}" class="btn btn-sm btn-primary"><i
                                            class="fa fa-eye"></i></button>
                                    <button value="{{ $profile->id }}" class="btn btn-sm btn-success"><i
                                            class="fa fa-pencil"></i></button>
                                    <button value="{{ $profile->id }}" class="btn btn-sm btn-danger"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No data available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <!-- Livewire pagination links -->
                {{ $profiles->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
