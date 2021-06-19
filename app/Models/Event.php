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
        'date_from' => 'datetime',
        'date_to' => 'datetime',
    ];

    /**
     * {@inheritdoc}
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function(Event $event) {
            if (empty($event->user_id)) {
                $event->user_id = auth()->id() ?: 0;
            }
        });
    }

    /**
     * Retrieve the user who created this event.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
