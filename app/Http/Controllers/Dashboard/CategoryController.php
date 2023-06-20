<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryPostRequest;
use App\Http\Requests\StoreCategoryPutRequest;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\StorePutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{

    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all the posts
        //$posts = Post::get();
        // get all the posts with paginate
        $category = Category::paginate(3);
        echo view('dashboard.categories.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     //the next function is valid but we need to use the model Post
     // $categories = Category::get();
     
    //another way to use the model Post is with pluck
      $category = new Category();
     
      return view('dashboard.categories.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    //use storePostRequest to validate the data
    public function store(StoreCategoryPostRequest $request)
    {
        // uses dd to see the data that we are sending
        //dd($request->all());
        //dd($request->title);
        // another way to get the data from the request
        // $request->title;

        // validate the data another way
        $validatedData = $request->validate(StoreCategoryPostRequest::rules() );

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

        
        Category::create($validatedData);
        
        return to_route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
        return view('dashboard.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
       $categories = $category;
        return view('dashboard.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryPutRequest $request, Category $category)
    {

       // dd($request->validated());
         $data = $request->validated();
       

        $category->update($data);

        //flash session message
     //   $request->session()->flash('status','Post updated successfully');

        return to_route('category.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
        
        $category->delete();
        return to_route('category.index');

    }
}
