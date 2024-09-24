<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Laravel\Jetstream\HasProfilePhoto;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
<<<<<<< HEAD

=======
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
        'email_verified_at',
        'is_active',
    ];

=======
        'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

<<<<<<< HEAD
=======
    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
    protected $appends = [
        'profile_photo_url',
    ];

<<<<<<< HEAD
=======
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
<<<<<<< HEAD
            'is_active' => 'boolean'
        ];
    }

    protected static function booted()
    {
        static::created(function ($user) {
            $freePlan = Plan::where('is_free', true)->where('is_default', true)->first();
            if ($freePlan) {
                Subscription::create([
                    'user_id' => $user->id,
                    'plan_id' => $freePlan->id,
                    'start_date' => now(),
                    'end_date' => now()->addDays($freePlan->duration_days),
                    'status' => 'active'
                ]);
            }
        });
    }

    public function instances()
    {
        return $this->hasMany(Instance::class);
    }

=======
        ];
    }


    // Relation avec le modèle Subscription (Un utilisateur peut avoir plusieurs abonnements)
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

<<<<<<< HEAD
    public function activeSubscription()
    {
        return $this->subscriptions()->where('status', 'active')->first();
    }

    public function activePlan()
    {
        $activeSubscription = $this->activeSubscription();
        return $activeSubscription ? $activeSubscription->plan : null;
    }

    public function canCreateInstance()
    {
        $activePlan = $this->activePlan();
        if (!$activePlan) {
            return false;
        }
        return $activePlan->instance_limit === null || $this->instances()->count() < $activePlan->instance_limit;
    }

    public function remainingInstances()
    {
        $activePlan = $this->activePlan();
        if (!$activePlan) {
            return 0;
        }
        if ($activePlan->instance_limit === null) {
            return 'Illimité';
        }
        return max(0, $activePlan->instance_limit - $this->instances()->count());
=======
    // Relation avec le modèle Instance (Un utilisateur peut créer plusieurs instances Dolibarr)
    public function instances()
    {
        return $this->hasMany(Instance::class);
>>>>>>> 4888495f40227bc0ff0c15f5a63645a0928b448c
    }

}
