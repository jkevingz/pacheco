<?php

namespace App\Models;

use App\Models\Traits\CreatedByTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory, CreatedByTrait;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'title',
        'description',
        'date_from',
        'date_to',
        'status',
        'user_id',
    ];

    /**
     * {@inheritdoc}
     */
    protected $casts = [
        'date_from' => 'datetime:Y-m-d\TH:i',
        'date_to' => 'datetime:Y-m-d\TH:i',
    ];
}
