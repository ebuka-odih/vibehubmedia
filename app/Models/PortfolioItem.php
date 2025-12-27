<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PortfolioItem extends Model
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
     * Get the full URL for the portfolio item image.
     *
     * @return string
     */
    public function getUrlAttribute(): string
    {
        return asset('storage/' . $this->path);
    }
}
