<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileNumber extends Model
{
    /** @use HasFactory<\Database\Factories\FileNumberFactory> */
    use HasFactory;

    protected $fillable = ['number'];

}
