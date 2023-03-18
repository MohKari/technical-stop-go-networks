<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AccessCard extends Model
{
    use HasFactory;

    /**
     * Get employee associated with access card
     */
    public function employee(): BelongsTo
    {
        return $this->BelongsTo(Employee::class);
    }
}
