<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationNumber extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrationNumberFactory> */
    use HasFactory;

    protected $fillable = ['number'];

}
