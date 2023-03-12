<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class AdminPostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index',[
            'posts' => Post::paginate(50)
            ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }
    public function store()
    {
        Post::create(array_merge($this->groupValidate(),[
           'user_id' => request()->user()->id,
        ]));

        return redirect('/');
    }
    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post'=>$post]);
    }
    public function update(Post $post)
    {

        $post->update($this->groupValidate($post));
        return back()->with('success, post Updated');
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success, post Deleted');
    }
    public function groupValidate(?Post $post = null) :array
    {
        $post ??= new Post();
        return request()->validate([
            'title'=>'required',
            'slug'=>['required',Rule::unique('posts','slug')->ignore($post)],
            'thumbnail'=>'image',
            'excerpt'=>'required',
            'body'=>'required',
            'category_id'=>['required', Rule::exists('categories', 'id')]
            //if (isset($attribiutes['thumbnail'])){
            //$attribiutes['thumbnail'] = \request()->file('thumbnail')->store('thumbnails');        }
        ]);
    }
}
