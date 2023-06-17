<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\StorePutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{

    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all the posts
        //$posts = Post::get();
        // get all the posts with paginate
        $posts = Post::paginate(1);
        echo view('dashboard.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     //the next function is valid but we need to use the model Post
     // $categories = Category::get();
     
    //another way to use the model Post is with pluck
      $categories = Category::pluck('id','name');
      return view('dashboard.posts.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    //use storePostRequest to validate the data
    public function store(storePostRequest $request)
    {
        // uses dd to see the data that we are sending
        //dd($request->all());
        //dd($request->title);
        // another way to get the data from the request
        // $request->title;

        // validate the data another way
        $validatedData = $request->validate(StorePostRequest::rules() );

        //create an automatic slug
        //$request->merge(['slug'=>str_slug($request->title)]);


        // another way to validate the data with validator
        //$validator = Validator::make($request->all(),StorePostRequest::rules() );

        // if the validation fails
       // dd($validator->fails());

        // if i want to get the errors
        //dd($validator->errors());

        // save in the database
       /*  $data = array_merge($request->all(),['image'=>''
        ]); */

        Post::create($validatedData);
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id','name');
        return view('dashboard.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePutRequest $request, Post $post)
    {
        $post->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
