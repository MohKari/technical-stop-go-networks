<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get access card associated with employee.
     */
    public function accessCard(): HasOne
    {
        return $this->hasOne(AccessCard::class);
    }

    /**
     * Get the departments associated with the employee.
     */
    public function departments(): HasMany
    {
        return $this->hasMany(Department::class);
    }
}
