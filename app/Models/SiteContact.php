<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteContact extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'phone_1',
        'email',
        'contact_reason_id',
        'message'
    ];

    public function contactReasons() {
        return $this->belongsToMany(ContactReason::class);
    }
}
