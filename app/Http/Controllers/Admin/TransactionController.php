<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Master\Product;
use App\Models\Master\ProductDetail;
use App\Models\Master\Color;
use App\Models\Master\Location;
use App\Models\Transaction\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $productDetails = ProductDetail::all();
        $colors = Color::all();
        $locations = Location::all();
        $transactions = Transaction::all();
        return view('admin.transaksi.product.index', compact('products', 'productDetails', 'colors', 'locations', 'transactions'));
    }

    public function store(Request $request, $move)
    {
        if($move == 'in'){
            $request->validate([
                'colorIn' => 'required|string|max:255',
                'locationIn' => 'required|string|max:255',
                'quantityIn' => 'required|numeric',
                'dateIn' => 'required|date',
                'remarkIn' => 'nullable|string',
            ]);

            Transaction::create([
                'product_detail_id' => $request->colorIn,
                'location_id' => $request->locationIn,
                'transaction_type' => $move,
                'quantity' => $request->quantityIn,
                'transaction_date' => $request->dateIn,
                'remark' => $request->remarkIn,
            ]);
        }else{
            $request->validate([
                'colorOut' => 'required|string|max:255',
                'locationOut' => 'required|string|max:255',
                'quantityOut' => 'required|numeric',
                'dateOut' => 'required|date',
                'remarkOut' => 'nullable|string',
            ]);

            Transaction::create([
                'product_detail_id' => $request->colorOut,
                'location_id' => $request->locationOut,
                'transaction_type' => $move,
                'quantity' => $request->quantityOut,
                'transaction_date' => $request->dateOut,
                'remark' => $request->remarkOut,
            ]);
        }

        return redirect()->route('admin.transaction')->with('success', 'Transaction added successfully!');
    }

    public function reportStockMovement()
    {
        $transactions = Transaction::with(['productDetail.product', 'productDetail.color'])
            ->get()
            ->groupBy(function ($transaction) {
                return $transaction->productDetail->product->product_name . '_' . $transaction->productDetail->color->color_name;
            })
            ->map(function ($groupedTransactions) {
                $inQuantity = $groupedTransactions->where('transaction_type', 'in')->sum('quantity');
                $outQuantity = $groupedTransactions->where('transaction_type', 'out')->sum('quantity');
                $stock = $inQuantity - $outQuantity;

                $firstTransaction = $groupedTransactions->first();

                return [
                    'product_name' => $firstTransaction->productDetail->product->product_name,
                    'color_name' => $firstTransaction->productDetail->color->color_name,
                    'in_quantity' => $inQuantity,
                    'out_quantity' => $outQuantity,
                    'stock' => $stock,
                ];
            })->values();

        return view('admin.laporan.product.index', compact('transactions'));
    }
}
