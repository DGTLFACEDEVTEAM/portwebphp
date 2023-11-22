<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id', 'ASC')->get();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.post.create', compact('categories'));
    }

        public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer',
            'name' => 'required|string|max:200',
            'slug' => 'required|string|max:200',
            'title_description' => 'nullable|string',
            'title_image' => 'required|mimes:jpeg,jpg,png,webp|max:2048',
            'description' => 'nullable',
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'status' => 'nullable'
        ]);

        $imageName = null; // Önce $imageName değişkenini tanımlıyoruz.

        if ($request->title_image) {
            $imageName = $request->title_image->getClientOriginalName(); // Orijinal dosya adını alır
            $request->title_image->move(public_path('uploads/blogs/'), $imageName);
        }

        // Post modelini oluştururken $imageName değerini kullanıyoruz.
        Post::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'title_description' => $request->title_description,
            'title_image' => $imageName,
            'description' => $request->description,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'created_by' => Auth::user()->name,
            'status' => $request->status == true ? '1' : '0'
        ]);

        return redirect('admin/post-list')->with('message', 'Blog başarıyla eklendi.');
    }

   
    public function createNew()
    {
        $categories = Category::all();
        $defaultPostData = array('hp', 'img', 'booking' , 'hp' , 'hpx2', 'hp' , 'hpx2' , 'youtube' , 'contact');
        return view('admin.post.post_create_new', compact('defaultPostData','categories'));
    }

    public function edit($post_id)
    {
        $categories = Category::all();
        $post = Post::find($post_id);
        return view('admin.post.edit', compact('post', 'categories'));
    }

    public function editNew($post_id)
    {
        $categories = Category::all();
        $post = Post::find($post_id);
        return view('admin.post.post_edit_new', compact('post', 'categories'));
    }

    public function update(Request $request, $post_id)
    {
        $post = Post::find($post_id);
    
        $request->validate([
            'name' => 'required|string|max:200',
            'slug' => 'required|string|max:200',
            'title_description' => 'nullable',
            'title_image' => 'mimes:jpeg,jpg,png,webp',
            'description' => 'nullable',
            'meta_title' => 'required|string',
            'meta_description' => 'required|string',
            'status' => 'nullable'
        ]);   
    
        if ($request->hasFile('title_image')) {
            $old_image_path = public_path('uploads/blogs/'.$post->title_image);
            $title_image = $request->file('title_image');
            $new_image = $title_image->getClientOriginalName(); // Orijinal dosya adını alır
            $title_image->move(public_path('uploads/blogs/'), $new_image);
            $post->title_image = $new_image;
            if (file_exists($old_image_path)) {
                unlink($old_image_path);
            }
        }
    
        $post->category_id = $request->category_id;
        $post->name = $request->name;
        $post->slug = Str::slug($request->slug);
        $post->title_description = $request->title_description;
        $post->description = $request->description;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->created_by = Auth::user()->name;
        $post->status = $request->status == true ? '1' : '0';
        $post->update();
    
        return redirect('admin/post-list')->with('message', 'Değişiklikler başarıyla kaydedildi.');
    }
    

    public function destroy($post_id)
    {
        $post = Post::find($post_id);
        if($post) {

            $destination = public_path('uploads/blogs/'.$post->title_image);
            if (file_exists($destination)) {
                unlink($destination);
            }       
            $post->delete();
    
            return redirect('admin/post-list')->with('message', 'Post başarıyla silinmiştir.');
        }
        else {
            return redirect('admin/post-list')->with('message', 'Post silme işlemi başarısız oldu. Yeniden deneyin!');
        }


    }
}
