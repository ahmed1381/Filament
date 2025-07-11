<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactNumbers extends Model
{
    /** @use HasFactory<\Database\Factories\ContactNumbersFactory> */
    use HasFactory;

    protected $fillable = ['phone'];
}
