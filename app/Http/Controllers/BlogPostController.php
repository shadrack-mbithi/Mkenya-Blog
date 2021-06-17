<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = BlogPost::all(); //fetch all blog posts from DB
        return view('blog.index', [
                'posts' => $posts,
            ]); //returns the view with posts
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ////To show create
        {
            return view('blog.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Code
        {
            $newPost = BlogPost::create([
                'title' => $request->title,
                'body' => $request->body,
                'comments' => $request->comments,
            ]);
    
            return redirect('blog/' . $newPost->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $blogPost)
    {
       
	return view('blog.show', [
        'post' => $blogPost,
    ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(BlogPost $blogPost)
    {
        //Code
        
	return view('blog.edit', [
        'post' => $blogPost,
        ]); //returns the edit view with the post
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        //Updating the edited post
        $blogPost->update([
            'title' => $request->title,
            'body' => $request->body,
            'comments' => $request->comments,
        ]);

        return redirect('blog/' . $blogPost->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlogPost $blogPost)
    {
        //Code
        $blogPost->delete();

        return redirect('/blog');
    }
 }
