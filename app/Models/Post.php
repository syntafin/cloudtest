<?php

namespace App\Models;

use App\HasImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    use HasImage;
    use Searchable;
    use SoftDeletes;

    protected $appends = ['preview_image'];

    protected $fillable = [
        'title',
        'slug',
        'content',
        'category_id',
        'user_id',
        'is_published',
        'is_featured',
        'image_path'
    ];

    protected $with = ['category', 'user'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function toSearchableArray(): array
    {
        return [
            'title' => $this->title,
            'category' => $this->category->name,
            'user' => $this->user->name,
        ];
    }
}
