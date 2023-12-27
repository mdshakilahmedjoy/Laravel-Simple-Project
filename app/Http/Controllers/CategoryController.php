<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
  //Display a listing of the resource.
    public function index()
    {
        // $data['categories'] = Category::all();
        // dd($data);  
        // return view('backend.category.index', $data);

        // $categories = Category::all();
        // return view('backend.category.index', compact('categories'));

        $category = Category::all();
        return view('backend.category.index', ['categories'=>$category]);
    }


    //Show the form for creating a new resource.
    public function create()
    {
        return view('backend.category.create');
    }


    //Store a newly created resource in storage.
    public function store(CategoryRequest $request)
    {
        // dd($request->all());

        $request->validated();

    //Option-1
        // $data['name'] = $request->name;
        // $data['description'] = $request->description;

        // Category::create($data);
        // Category::insert($data);
        // DB::table('order')->insert($data);

        // return back();
        // return redirect()->route('categories.index');

    //Option-2
        Category::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        //Session Flash Message (Option-1)
        // $request->session()->flash('success', 'Category Created is Successful!');

         //Session Flash Message (Option-2)
        //  session()->flash('success', 'Category Created is Successful!');

         //Session Flash Message (Option-3)
        //  Session::flash('success', 'Category Created is Successful!');

        //Session Flash Message (Option-4)
        return redirect()->route('categories.index')->with('success', 'Category Created is Successful!');
    
    //Form Validation
        // $validated = $request->validate([
        //     'name' => 'required|max:255',
        //     'description' => 'required',
        // ],[     //Massage Customize
        //     'name.required'=>'Name must be filled up.',
        //     'description.required'=>'Description must be required.',
        // ]);

        // Category::create($validated);

        // return redirect()->route('categories.index');

    }

    
    //Display the specified resource.
    public function show(Category $category)
    {
    //Option-1
        // $data['category'] = $category;
        // return view('backend.category.show',$data);

    //Option-2
        // return view('backend.category.show',['category'=>$category]);

    //Option-3
        return view('backend.category.show', compact('category'));

    }


    //Show the form for editing the specified resource.
    public function edit(Category $category)
    {
    //Option-1
        // $data['category'] = $category;
        // return view('backend.category.edit',$data);

    //Option-2
        // return view('backend.category.edit',['category'=>$category]);

    //Option-3
        return view('backend.category.edit', compact('category'));
    }

    
    //Update the specified resource in storage.
    public function update(CategoryRequest $request, Category $category)
    {
        // dd($request->all());

    //Option-1
        // $data['name'] = $request->name;
        // $data['description'] = $request->description;

        // $category->update($data);
        // Category::where('id', $category->id)->update($data);
        // DB::table('categories')->where('id', $category->id)->update($data);
        
        // return back();
        // return redirect()->route('categories.index');

    //Option-2
        // Category::where('id', $category->id)->update([
        //     'name' => $request->name,
        //     'description' => $request->description
        // ]);

        // return redirect()->route('categories.index');

    //Option-3
        $request->validated();

        $category->update($request->all());

        return redirect()->route('categories.index');

    }

    
    //Remove the specified resource from storage.
    public function destroy(Category $category)
    {
    //Option-1
        // Category::where('id', $category->id)->delete();
        // DB::table('categories')->delete();
        // DB::table('categories')->where('id', $category->id)->delete();

        $category->delete();

        return redirect()->route('categories.index');
    }
}
