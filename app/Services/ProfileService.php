<?php

namespace App\Services;

use App\Models\Profile;
use Illuminate\Support\Facades\Validator;

class ProfileService
{
    public function allProfiles($searchQuery = null, $birthYear = null, $perPage = 25, $page = null)
    {
        $query = Profile::query(); // Start with a fresh query builder

        if ($searchQuery) {
            $query->where(function ($q) use ($searchQuery) {
                $q->where('first_name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('middle_name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('last_name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('suffix', 'like', '%' . $searchQuery . '%')
                    ->orWhereRaw("CONCAT(first_name, ' ', middle_name, ' ', last_name, ' ', suffix) LIKE ?", ['%' . $searchQuery . '%']);
            });
        }


        if ($birthYear) {
            $query->whereYear('birthdate', '=', $birthYear);
        }
        // dd($query->paginate($perPage, ['*'], 'page', $page));

        // Apply pagination after building the query
        return $query->paginate($perPage, ['*'], 'page', $page);
    }
    public function saveProfile($data, $rules)
    {
        // Validate the data
        $validator = Validator::make($data, $rules);

        // Check if validation fails
        if ($validator->fails()) {
            // If validation fails, return all validation errors
            $errors = $validator->errors()->all();
            return ['error' => $errors];
        }

        // If validation passes, proceed to save the profile
        Profile::create($data);
        $success = "success";
        // Return true or any other success indicator if needed
        return ['success' => $success];
    }
    public function viewProfile($id)
    {
        $profile = Profile::find($id);

        return $profile;
    }
    public function deleteProfile($id)
    {
         Profile::find($id)->delete();
    }
}
