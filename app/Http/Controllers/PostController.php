<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(6)->withQueryString()
        ]);
    }
    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
    public function create()
    {
        return view('admin.posts.create');
    }
    public function store()
    {

        $attribiutes=request()->validate([
            'title'=>'required',
            'slug'=>['required',Rule::unique('posts','slug')],
            'thumbnail'=>'required|image',
            'excerpt'=>'required',
            'body'=>'required',
            'category_id'=>['required', Rule::exists('categories', 'id')]
        ]);
        $attribiutes['user_id']=auth()->id();
        //$attribiutes['thumbnail']=request()->file('thumbnail')->store('thumbnails');
        Post::create($attribiutes);

        return redirect('/');
    }
}
