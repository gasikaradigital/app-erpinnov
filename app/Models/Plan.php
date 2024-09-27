<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'description',
        'price',
        'duration_days',
        'is_free',
        'is_default',
        'instance_limit',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'duration_days' => 'integer',
        'is_free' => 'boolean',
        'is_default' => 'boolean',
        'instance_limit' => 'integer',
    ];

    public static function boot()
    {
        parent::boot();
        static::saving(function ($plan) {
            if ($plan->is_default) {
                self::where('is_default', true)->where('id', '!=', $plan->id)->update(['is_default' => false]);
            }
        });

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }


    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
