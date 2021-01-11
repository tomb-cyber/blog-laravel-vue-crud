<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use DB;
use Auth;

class PostController extends Controller
{
    public function index() 
    {
        $blogPosts = BlogPost::orderBy('created_at', 'DESC');
        return view('blog_posts.index', ['blogPosts' => $blogPosts->paginate(6)]);
    }

    public function show(BlogPost $blogPost) 
    {
        return view('blog_posts.show', [
            'blogPost' => $blogPost
        ]);
        
    }

    public function create()
    {
        if (Auth::check()) { 
            return view('blog_posts.create');
        }
        else {
            return redirect()->route('login');
        }
    }

    public function store()
    {
        if (Auth::check()) { 
            BlogPost::create(request()->validate([
                'title' => ['required', 'min:3', 'max:100'],
                'body' => ['required', 'max:8000'],
                'user_id' => ['required']
            ]));

            return redirect('/blogs');
        }
        else {
            return view('home');
        }
    }
    
    public function edit($id)
    {
        $blogPost = BlogPost::find($id);
        $this->authorize('update-post', $blogPost);

        return view('blog_posts.edit', compact('blogPost'));
    }
    
    public function update($id)
    { 
        $blogPost = BlogPost::find($id);
        $this->authorize('update-post', $blogPost);

        $blogPost->update(request()->validate([
            'title' => ['required', 'min:3', 'max:100'],
            'body' => ['required', 'max:8000']
        ]));

        return redirect('/blogs/' . $blogPost->id);
    }
    
    public function destroy($id)
    {
        $blogPost = BlogPost::find($id);
        $this->authorize('update-post', $blogPost);

        $blogPost->delete();

        return redirect('/blogs');
    }
}
