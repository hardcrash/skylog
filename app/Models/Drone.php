<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Drone extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * Corresponds to the columns in the 'drones' table.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'users_id',
        'registration_num',
        'serial_num',
        'make',
        'model',
    ];

    /**
     * Get the user that owns the drone.
     */
    public function user(): BelongsTo
    {
        // Assumes a User model exists and the foreign key is 'users_id'
        return $this->belongsTo(User::class, 'users_id');
    }
}
