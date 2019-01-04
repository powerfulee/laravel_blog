<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$categories = Category::all();
    	//return view('category.list',compact('categories'));
    }
	
	public function list()
    {
        $categories = Category::all();
    	return view('category.list',compact('categories'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category;
    	return view('category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	if ( $request->get('id') != "" ){
    		$id = $request->get('id');
    		
    		$category = Category::find($id);
    	}else{
    		$category = new Category;
    	}
    	
        $category->category_name = $request->get('category_name');
        $category->status = $request->get('status');
        $category->create_date = time();
        
        $category->save();
	    
    	return redirect('category/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$category = Category::find($id);
    	
        return view('category.create',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
    
    public function delete($id){
    	$category = Category::find($id);
    	
    	$category->delete();
    	
    	return redirect('category/list');
    }
}
