<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Services\ProfileService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    protected $rules = [
        'first_name' => 'required|min:2',
        'middle_name' => 'nullable|min:2',
        'last_name' => 'required|min:2',
        'suffix' => 'nullable|max:10',
        'birthdate' => 'required|date',
        'birthplace' => 'required|min:2',
        'registry_no' => 'required|numeric',
        'page_no' => 'nullable',
        'book' => 'nullable',
        'mother_name' => 'required|min:2',
        'father_name' => 'required|min:2',
        'is_married' => 'required',
        'm_date' => 'nullable',
        'm_place' => 'nullable',
    ];
    public $errors = [];

    public $first_name,
        $middle_name,
        $last_name,
        $suffix,
        $birthdate,
        $birthplace,
        $registry_no,
        $page_no,
        $book,
        $mother_name,
        $father_name,
        $is_married;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->all();
        // $validatedData = $this->validate();
        $res =  (new ProfileService())->saveProfile($formData, $this->rules);
        if (isset($res['error'])) {
            $this->errors = $res['error'];
            return response()->json([
                'errors' => $this->errors
            ]);
        } else {
            return response()->json([
                'success' => 'Profile created!'
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Profile::find($id);
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $formData = $request->all();
        $res =  (new ProfileService())->updateData($formData, $id);
        if (isset($res['success'])) {
            return response()->json([
                'success' => $res['success']
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
