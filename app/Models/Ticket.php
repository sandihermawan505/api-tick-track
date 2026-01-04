<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Ticket extends Model
{
    protected $fillable = [
        'user_id',
        'code',
        'title',
        'description',
        'status',
        'priority',
        'completed_at'
    ];

    public functtion user()
    {
        return $this->belongsTo(User::class);
    }
}
