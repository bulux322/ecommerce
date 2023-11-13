<?php

namespace App\Models;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPost extends Model
{
    protected $fillable = ['title', 'content', 'image', 'slug', 'blogcategory_id'];
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'blogcategory_id');
    }
}
