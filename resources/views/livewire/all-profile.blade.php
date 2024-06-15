<div>
    <div class="d-flex justify-content-end my-3">
        <button class="btn btn-outline-success" wire:click="openModal">Add Profile</button>
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
                        @php($profiles = isset($profiles) ? $profiles : [])
                        @forelse ($profiles as $profile)
                            <tr>
                                <td class="text-nowrap">{{ $profile->first_name }} {{ $profile->middle_name }} {{ $profile->last_name }}
                                    {{ $profile->suffix }}</td>
                                <td class="text-nowrap">
                                    {{ \Carbon\Carbon::parse($profile->birthdate)->format('F d, Y') }}</td>
                                <td class="text-nowrap">{{ $profile->birthplace }}</td>
                                <td>{{ $profile->registry_no }}</td>
                                <td>{{ $profile->page }}</td>
                                <td>{{ $profile->book }}</td>
                                <td class="text-nowrap">{{ $profile->mother_name }}</td>
                                <td class="text-nowrap">{{ $profile->father_name }}</td>
                                <td class="text-nowrap">

                                    {{ $profile->is_married == 0 ? 'No' : 'Yes'}}
                                </td>
                                <td class="d-flex">
                                    <button class="btn btn-sm btn-primary"><i
                                            class="fa fa-eye" wire:click="infoProfileModal({{$profile->id}})"></i></button>

                                    <button class="btn btn-sm btn-success"><i
                                            class="fa fa-pencil" wire:click="openProfileModal({{$profile->id}})"></i></button>

                                    <button class="btn btn-sm btn-danger"><i
                                            class="fa fa-trash" wire:click="deleteProfile({{$profile->id}})"></i></button>
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
                @if ($profiles instanceof Illuminate\Pagination\LengthAwarePaginator)
                    {{-- Display pagination links --}}
                    {{ $profiles->links('vendor.livewire.bootstrap') }}
                @endif

            </div>
        </div>
    </div>
</div>
