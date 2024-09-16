<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instance extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
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

