<?php

namespace App\Http\Controllers\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.product.product', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'jenis_kendaraan' => 'required',
            'merk' => 'required',
            'type' => 'required',
            'harga' => 'required',
        ]);
        Product::create($validasi);
        return redirect()->route('product.index');
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $validasi = $request->validate([
            'jenis_kendaraan' => 'required',
            'merk' => 'required',
            'type' => 'required',
            'harga' => 'required',
        ]);
        $product->update($validasi);
        return redirect()->route('product.index');
    }
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
