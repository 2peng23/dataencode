<?php

namespace App\Services;

use App\Models\Profile;
use Illuminate\Pagination\LengthAwarePaginator;

class ProfileService
{

    public function allProfiles($searchQuery = null, $birthYear = null, $perPage = 25, $page = 1)
    {
        $query = Profile::query(); // Start with a fresh query builder

        if ($searchQuery) {
            $query->where(function ($q) use ($searchQuery) {
                $q->where('first_name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('middle_name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('last_name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('suffix', 'like', '%' . $searchQuery . '%');
            });
        }

        if ($birthYear) {
            $query->whereYear('birthdate', '=', $birthYear);
        }

        // Apply pagination after building the query
        return $query->paginate($perPage, ['*'], 'page', $page);
    }
}
