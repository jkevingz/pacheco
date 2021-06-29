<?php

namespace App\Models;

use App\Models\Traits\CreatedByTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    use HasFactory, CreatedByTrait;

    /**
     * {@inheritdoc}
     */
    protected $fillable = [
        'title', 'slug', 'body', 'user_id', 'image',
    ];

    /**
     * {@inheritdoc}
     */
    protected $append = ['imageUrl'];

    /**
     * Get the image url attribute.
     *
     * @return string
     */
    public function getImageUrlAttribute(): string
    {
        return $this->image ? Storage::url($this->image) : '';
    }
}
