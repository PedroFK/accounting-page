<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactReason extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_reason'
    ];

    public function sitecontacts() {
        return $this->hasMany(SiteContact::class);
    }
}
