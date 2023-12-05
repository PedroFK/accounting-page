<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    protected $table = 'suppliers';
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'site','state','email'];
}
