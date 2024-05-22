<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckModel extends Model
{
   protected $table = "check";

   protected $fillable = [
     'first name', 'last name', 'email', 'type of service'
   ];
}
