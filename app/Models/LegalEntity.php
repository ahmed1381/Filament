<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalEntity extends Model
{
    /** @use HasFactory<\Database\Factories\LegalEntityFactory> */
    use HasFactory;

    protected $fillable = ['name'];
}
