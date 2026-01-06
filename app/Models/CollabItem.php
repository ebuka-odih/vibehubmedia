<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollabItem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'filename',
        'original_filename',
        'path',
        'mime_type',
        'size',
        'display_order',
    ];

    /**
     * Get the full URL for the collab item image.
     *
     * @return string
     */
    public function getUrlAttribute(): string
    {
        return asset('storage/' . $this->path);
    }
}



