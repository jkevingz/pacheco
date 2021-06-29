<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;

trait CreatedByTrait
{
    /**
     * {@inheritdoc}
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function(Model $model) {
            if (empty($model->user_id)) {
                $model->user_id = auth()->id() ?: 0;
            }
        });
    }

    /**
     * Retrieve the user who created this model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
