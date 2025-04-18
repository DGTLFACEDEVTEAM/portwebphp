<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'title_description',
        'title_image',
        'description',
        'meta_title',
        'meta_description',
        'status',
        'created_by'
    ];

    public function category() {

        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function user() {

        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
