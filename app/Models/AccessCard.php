<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class AccessCard extends Model
{
    use HasFactory;

    /**
     * Get employee associated with access card
     */
    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);
    }
}
