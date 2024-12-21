<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Makul extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama', 'sks'];
}
