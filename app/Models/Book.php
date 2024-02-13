<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'author',
        'description',
        'genre',
        'publication_year',
        'language',
        'ISBN',
        'cover_image',
        'availability_status',
        'added_date',
    ];

    // Define relationships if necessary
}

