<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    /**
     * Declare table
     *
     * @var string $tabel table name
     */
    protected $table = 'favorites';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'favoritable_id',
        'favoritable_type',
    ];

    /**
     * Relationship belongsTo with User
     *
     * @return array
    */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get all of the owning favoritable models
     *
     * @return array
    */
    public function favoritable()
    {
        return $this->morphTo();
    }
}
