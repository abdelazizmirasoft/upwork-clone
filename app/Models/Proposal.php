<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable = ['job_id', 'validated'];

    /**
     * Set the user_id value for the current user.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function($model) {
            $model->user_id = auth()->user()->id;
        });
    }

    /**
     * Get User which this Proposal BelongsTo.
     *
     * @return BelongsTo
     */
    public function user():BelongsTo
    {
        return $this->belongsTo('\App\Models\User');
    }

    /**
     * Get Job which this Proposal BelongsTo.
     *
     * @return BelongsTo
     */
    public function job():BelongsTo
    {
        return $this->belongsTo('\App\Models\Job');
    }

    /**
     * Get CoverLetter of this Proposal.
     *
     * @return HasOne
     */
    public function coverLetter():HasOne
    {
        return $this->hasOne('\App\Models\CoverLetter');
    }
}
