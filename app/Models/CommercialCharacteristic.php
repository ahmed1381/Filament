<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommercialCharacteristic extends Model
{
    /** @use HasFactory<\Database\Factories\CommercialCharacteristicFactory> */
    use HasFactory;

    protected $fillable = ['number'];

}
