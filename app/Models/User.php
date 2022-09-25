<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Get the Role assigned to this User.
     *
     * @return BelongsTo
     */
    public function role():BelongsTo
    {
        return $this->belongsTo('App\Models\Role');
    }

    /**
     * Get the Jobs associated with this User 
     *
     * @return HasMany
     */
    public function jobs(): HasMany
    {
        return $this->hasMany('App\Models\Job');
    }

    /**
     * Get the Jobs liked by this User.
     *
     * @return BelongsToMany
     */
    public function likes():BelongsToMany
    {
        return $this->belongsToMany('App\Models\Job');
    }

    /**
     * Get the Proposals made by this User.
     *
     * @return hasMany
     */
    public function proposals():HasMany
    {
        return $this->hasMany('App\Models\Proposal'); 
    }
}
