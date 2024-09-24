<?php

namespace App\Models;

<<<<<<< HEAD
use App\Models\Subscription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class Instance extends Model
{
    use HasFactory, SoftDeletes;

    const STATUS_ACTIVE = 'active';
    const STATUS_EXPIRED = 'expired';

    protected $fillable = [
        'user_id',
        'reference',
        'name',
        'url',
        'status',
        'subscription_id',
        'expiration_date',
        'token_expires_at',
=======
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
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
        'dolibarr_username',
        'dolibarr_password',
        'auth_token',
    ];

    protected $hidden = ['auth_token', 'dolibarr_password'];
<<<<<<< HEAD

    protected $casts = [
        'expiration_date' => 'datetime',
        'token_expires_at' => 'datetime',
    ];

=======
    protected $casts = [
        'expiration_date' => 'datetime',
    ];

    // Relation avec l'utilisateur
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
    public function user()
    {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD
    
    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }

    public function isFree()
    {
        return $this->subscription->plan->is_free;
    }
    
    public function isActive()
    {
        return $this->status === self::STATUS_ACTIVE;
    }

    public static function generateNextReference()
    {
        $latestInstance = self::latest('id')->first();
        $number = $latestInstance ? ((int) substr($latestInstance->reference, 4)) + 1 : 1;
        return 'REF-' . str_pad($number, 3, '0', STR_PAD_LEFT);
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($instance) {
            $instance->auth_token = self::generateUniqueAuthToken();
            $instance->token_expires_at = Carbon::now()->addDays(30);
            $instance->reference = self::generateNextReference();
        });
    }

    public static function generateUniqueAuthToken()
    {
        do {
            $token = Str::random(64);
        } while (static::where('auth_token', $token)->exists());
        return $token;
    }

    public function regenerateAuthToken()
    {
        $this->update([
            'auth_token' => self::generateUniqueAuthToken(),
            'token_expires_at' => Carbon::now()->addDays(30),
        ]);
    }

    public function isTokenExpired()
    {
        return $this->token_expires_at->isPast();
    }

    public function setAuthTokenAttribute($value)
    {
        $this->attributes['auth_token'] = $value;
        $this->attributes['token_expires_at'] = Carbon::now()->addDays(30);
    }

    public function scopeActive($query)
    {
        return $query->where('status', self::STATUS_ACTIVE);
    }
}
=======


        public function isActive()
    {
        return $this->status === 'active';
    }

}

>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
