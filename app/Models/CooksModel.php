<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CooksModel extends Model
{
    protected $table = "cooks";

    protected $fillable= [
        'name', 'specialties', 'experience'
    ];

}
