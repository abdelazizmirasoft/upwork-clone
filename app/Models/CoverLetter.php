<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CoverLetter extends Model
{
    use HasFactory;

    protected $fillable = ['proposal_id', 'content'];

    /**
     * Get the proposal that this cover  letter belongs to
     *
     * @return BelongsTo
     */
    public function proposal(): BelongsTo
    {
        return $this->belongsTo('App\Models\Proposal');
    }
}
