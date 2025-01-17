<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        $brand = Brand::all();

        return view('admin.product.product', compact('product', 'brand'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'brand_id' => 'required',
            'jenis_kendaraan' => 'required',
            'nama_tipe' => 'required',
            'harga' => 'required',
        ]);

        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Product berhasil ditambahkan!');
    }
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'brand_id' => 'required',
            'jenis_kendaraan' => 'required',
            'nama_tipe' => 'required',
            'harga' => 'required',
        ]);

        $product = Product::find($id);

        $product->update($data);

        return redirect()->route('product.index')->with('success', 'Product berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $merk = Product::find($id);
        $merk->delete();
        return redirect()->route('product.index')->with('success', 'Product berhasil dihapus.');
    }
}
