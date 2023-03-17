<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = ['from', 'to', 'job_id'];

    public function messages(): HasMany
    {
        return $this->hasMany('App\Models\Message');
    }

    public function job(): BelongsTo
    {
        return $this->belongsTo('App\Models\Job');
    }
}
