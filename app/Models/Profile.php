<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'birthdate',
        'birthplace',
        'registry_no',
        'page_no',
        'book',
        'mother_name',
        'father_name',
        'is_married',
        'm_date',
        'm_place',
        // Add any other fields here if needed
    ];
}
