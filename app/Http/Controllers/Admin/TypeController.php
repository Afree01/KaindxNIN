<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Type;
use App\Models\Master\Category;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();   
        $categories = Category::all();
        return view('admin.master.type.index', compact('types', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'typeName' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|exists:categories,id',
        ]);

        Type::create([
            'type_name' => $request->typeName,
            'description' => $request->description,
            'category_id' => $request->category,
        ]);

        return redirect()->route('admin.type')->with('success', 'Type added successfully!');
    }
}
