<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotivoContato extends Model
{
    use HasFactory;

    protected $fillable = [
        'motivo_contato'
    ];

    public function siteContatos() {
        return $this->hasMany(SiteContato::class);
    }
}
