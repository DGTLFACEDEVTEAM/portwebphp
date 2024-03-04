<?php

namespace App\Http\Controllers\Frontend\Deutsch;

use App\Models\Post;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $postsList = Post::whereHas('category', function ($query) {
            $query->where('lang', 'Deutsch');
        })->where('status', '1')->get();
    
        return view('frontend.de.blog.blog', compact('postsList'));
    }

    public function blogDetail($slug) {
        
        // İlgili gönderiyi alıyoruz
        $post_content = Post::where('status', '1')->where('slug', $slug)->first();

        // Gönderinin ait olduğu kategoriyi ve dilini alıyoruz
        $categoryName = $post_content->category->name;
        $categoryLang = $post_content->category->lang;

        // İlgili kategoriye ait olmayan fakat aynı dildeki tüm gönderileri alıyoruz
        $otherPosts = Post::whereDoesntHave('category', function ($query) use ($categoryName) {
            $query->where('name', $categoryName);
        })
        ->whereHas('category', function ($query) use ($categoryLang) {
            $query->where('lang', $categoryLang);
        })
        ->where('status', '1')->get();

        if (!$post_content) {
            return abort(404);
        }

        return view('frontend.de.blog.blog-detail-new', compact('post_content', 'otherPosts'));

    }
     
}
