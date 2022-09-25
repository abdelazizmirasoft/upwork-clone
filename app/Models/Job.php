<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;

    public function scopeOnline($query)
    {
        return $query->where('status', 1);
    }

    /**
     * Get the User that owns this Job.
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get all Users liked this User.
     *
     * @return BelongsToMany
     */
    public function likes():BelongsToMany
    {
        return $this->belongsToMany('App\Models\User');
    }

    /**
     * Get the Proposals made for this User.
     *
     * @return hasMany
     */
    public function proposals():HasMany
    {
        return $this->hasMany('App\Models\Proposal'); 
    }

    /**
     * 
     * Check if this Job is already liked by the user
     */
    public function isLiked()
    {
        if (auth()->check()){
            return auth()->user()->likes->contains('id', $this->id);
        }
    }
}
