<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $categories = Category::all();
        return view('backend.category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
            'category_image' => 'required|image|mimes:jpeg,png,jpg',
            'category_status' => 'required|boolean',
        ]);

        if ($request->hasFile('category_image')) {
            $file = $request->file('category_image');
            $path = 'uploads/category';
            $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $fileName);
            $validatedData['category_image'] = $path . '/' . $fileName;
        }

        Category::create($validatedData);

        return redirect()->route('admin.category.index')->with('success', 'Category created successfully!');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'category_name' => 'required|string|max:255',
            'category_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'category_status' => 'required|boolean',
        ]);

        if ($request->hasFile('category_image')) {
            if ($category->category_image && file_exists(public_path($category->category_image))) {
                unlink(public_path($category->category_image));
            }

            $file = $request->file('category_image');
            $path = 'uploads/category';
            $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $fileName);
            $validatedData['category_image'] = $path . '/' . $fileName;
        }

        $category->update($validatedData);

        return redirect()->route('admin.category.index')->with('success', 'Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
