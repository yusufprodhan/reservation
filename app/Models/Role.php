<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{
    use HasFactory;

    /**
     * Many-to-Many relations with Role.
     *
     * @return HasMany
     */
    public function permissions(): HasMany
    {
        return $this->hasMany(Permission::class);
    }
}
