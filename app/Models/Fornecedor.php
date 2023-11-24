<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    use HasFactory, SoftDeletes;
    protected $fillable = ['nome', 'site','uf','email'];
}
