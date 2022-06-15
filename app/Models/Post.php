<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'post_text', 'category_id'];


    //make post have access to its category as a relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
