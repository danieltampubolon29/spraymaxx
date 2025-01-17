<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::all();
        return view('admin.product.brand', compact('brand'));
    }

    public function store(Request $request)
    {
        $brand = $request->validate(['nama_brand' => 'required']);
        Brand::create($brand);
        return redirect()->route('brand.index')->with('success', 'Brand berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $brand = $request->validate(['nama_brand' => 'required']);
        $id = Brand::find($id);
        $id->update($brand);
        return redirect()->route('brand.index')->with('success', 'Brand berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('brand.index')->with('success', 'Brand berhasil dihapus.');
    }
}
