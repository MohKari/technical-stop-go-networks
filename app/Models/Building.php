<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Building extends Model
{
    use HasFactory;

    /**
     * Get the departments associated with the building.
     */
    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }
}
