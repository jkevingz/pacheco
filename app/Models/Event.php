<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'title', 'description', 'date',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'date' => 'datetime',
    ];
}
