<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Product;
use App\Models\Master\ProductDetail;
use App\Models\Master\Color;
use App\Models\Master\Type;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); 
        $types = Type::all();
        return view('admin.master.product.index', compact('products', 'types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_code' => 'required|string|max:255',
            'product_type' => 'required|string|max:255',
            'product_price' => 'required|numeric',
            'product_description' => 'nullable|string',
            'is_active' => 'required|boolean',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('assets/images/product', $imageName, 'public');

            // dd($imagePath, storage_path('app/public/assets/images/product'));
        }

        Product::create([
            'product_name' => $request->product_name,
            'product_code' => $request->product_code,
            'product_image' => $imagePath,
            'type_id' => $request->product_type,
            'price' => str_replace('.', '', $request->product_price),
            'description' => $request->product_description,
            'is_active' => $request->is_active,
        ]);

        return redirect()->route('admin.product')->with('success', 'Product added successfully!');
    }

    public function showDetail($productId)
    {
        $product = Product::find($productId);
        $productDetails = ProductDetail::where('product_id', $productId)->get();
        $colors = Color::all(); 
        return view('admin.master.product.detail', compact('product', 'productDetails', 'colors'));
    }

    public function storeDetail(Request $request, $productId)
    {
        $request->validate([
            'color' => 'required|string|max:255',
            'size' => 'required|string|max:255',
        ]);

        ProductDetail::create([
            'product_id' => $productId,
            'color_id' => $request->color,
            'size' => $request->size,
            'quantity' => 0,
        ]);

        return redirect()->route('admin.productDetail', $productId)->with('success', 'Product detail added successfully!');
    }
}
