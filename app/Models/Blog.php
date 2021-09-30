<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];
//    protected $fillable = ['title','excerpt','body','bg_img'];

    public function getRouteKeyName()
    {
        return 'title';
    }

    public function getPathAttribute()
    {
        return route('blogs.show', $this);
    }

    public function prevBlogPath()
    {
        if ($blog = self::query()->find($this->id - 1)) {
            return $blog->path;
        }
    }

    public function nextBlogPath()
    {
        if ($blog = self::query()->find($this->id + 1)) {
            return $blog->path;
        }
    }
}
