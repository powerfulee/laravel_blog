<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	$categories = Category::pluck('category_name','id');
    	$blog = new Blog;
    	
        return view('blog.create',compact('categories'),compact('blog'));
    }
	
	public function list(){
    	$blogs = Blog::with('belongsToCategory')->orderBy('create_date','desc')->paginate(17);
    	
    	return view('blog.list',['blogs' => $blogs]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        
        if ( $input['id'] != "" ){
    		$blog = Blog::find($input['id']);
    	}else{
    		$blog = new Blog;
    	}
    	
        $blog->title = $input['title'];
        $blog->category_id = $input['category'];
        $blog->status = $input['status'];
        $blog->content = $input['content'];
        $blog->create_date = time()*1000;
        
        $blog->save();
        
        return redirect('blog/list');
    }

	public function delete($id){
    	$blog = Blog::find($id);
    	
    	$blog->delete();
    	
    	return redirect('blog/list');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::pluck('category_name','id');
        
        $blog = Blog::find($id);
    	
        return view('blog.create',compact('categories'),compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
