<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show', 'index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogposts = Blog::all();
        return view('blog.index', ['blogposts' => $blogposts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogpost = new Blog;

        $blogpost->title = $request->title;
        $blogpost->content = $request->content;

        $blogpost->save();

        return redirect()->route('blog_path');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogpost = Blog::find($id);
        return view('blog.show', ['blogpost' => $blogpost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogpost = Blog::find($id);
        return view('blog.edit', ['blogpost' => $blogpost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blogpost = Blog::find($id);
        $blogpost->title = $request->title;
        $blogpost->content = $request->content;

        $blogpost->update();

        return redirect()->route('blogpost_path', ['id' => $blogpost->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogpost = Blog::find($id);

        $blogpost->delete();
        return redirect()->route('blog_path');
    }
}
