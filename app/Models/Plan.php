<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
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
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
}
