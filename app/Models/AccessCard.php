<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccessCard extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get employee associated with access card.
     */
    public function employee(): hasOne
    {
        return $this->hasOne(Employee::class);
    }
}
