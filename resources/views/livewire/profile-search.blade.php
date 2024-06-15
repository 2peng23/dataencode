<div class="card mt-5">
    <div class="card-header">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#filterCollapse"
            aria-expanded="false" aria-controls="filterCollapse">
            Filters
        </button>
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
                            <option value="">All Year</option>
                            <!-- Dynamic generation of options for years 1950 to 2030 -->
                            @for ($year = 1950; $year <= 2030; $year++)
                                <option value="{{ $year }}">{{ $year }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="form-group col-4">
                        <label for="perPage">Per Page</label>
                        <select wire:model="perPage" class="form-control" id="perPage" name="perPage">
                            <option value="25" selected>25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="250">250</option>
                            <option value="500">500</option>
                        </select>
                    </div>
                </div>
                {{-- Livewire search form --}}
                <button wire:click="search" class="btn btn-outline-primary mt-2">Apply Filters</button>
            </div>
        </div>
    </div>
</div>
