<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Color;    
use App\Models\Master\ProductDetail;
use App\Models\Master\Product;

class ColorController extends Controller
{
    public function index()
    {
        $colors = Color::all();
        return view('admin.master.color.index', compact('colors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'color_name' => 'required|string|max:255',
            'color_code' => 'required|string|max:255',
            'hex_code' => 'required|string|max:255',
        ]);

        Color::create([
            'color_name' => $request->color_name,
            'color_code' => $request->color_code,
            'hex_code' => $request->hex_code,
        ]);

        return redirect()->route('admin.color')->with('success', 'Color added successfully!');
    }

    public function getColorsByProduct($productId)
    {
        $colors = ProductDetail::where('product_id', $productId)
            ->with('color')
            ->get();
            
        if ($colors->isEmpty()) {
            return response()->json([
                'message' => 'No colors found for this product.',
                'data' => [],
            ], 404);
        }

        return response()->json([
            'message' => 'Colors retrieved successfully.',
            'data' => $colors,
        ]);
    }   
}
