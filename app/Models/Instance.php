<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reference',
        'name_instance',
        'url',
        'status',
        'type',
        'expiration_date',
        'dolibarr_username',
        'dolibarr_password',
        'auth_token',
    ];

    protected $hidden = ['auth_token', 'dolibarr_password'];
    protected $casts = [
        'expiration_date' => 'datetime',
    ];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }


        public function isActive()
    {
        return $this->status === 'active';
    }

}

