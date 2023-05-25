<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latepayormodel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date', 'amount', 'remarks''];
}
