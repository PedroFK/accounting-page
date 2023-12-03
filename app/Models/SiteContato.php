<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'motivo_contato_id',
        'mensagem'
    ];

    public function motivoContatos() {
        return $this->belongsToMany(MotivoContato::class);
    }
}
