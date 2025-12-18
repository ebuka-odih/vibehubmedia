<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'filename',
        'original_filename',
        'path',
        'mime_type',
        'size',
        'alt_text',
        'is_active',
        'display_order',
        'section',
    ];

    /**
     * Get the full URL for the media file.
     *
     * @return string
     */
    public function getUrlAttribute(): string
    {
        return asset('storage/' . $this->path);
    }
}
