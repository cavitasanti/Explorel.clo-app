<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    public function addproduct()
    {
        return view('addproduct');
    }

    public function insertproduct(Request $request)
    {
        $p = Product::create($request->all());
        if ($request->hasFile('image_front') && $request->hasFile('image_back') && $request->hasFile('image_left') && $request->hasFile('image_right')) {
            $request->file('image_front')->storeAs('public/productimage', $p->id . '_front.jpg');
            $request->file('image_back')->storeAs('public/productimage', $p->id . '_back.jpg');
            $request->file('image_left')->storeAs('public/productimage', $p->id . '_left.jpg');
            $request->file('image_right')->storeAs('public/productimage', $p->id . '_right.jpg');
            $p->image_front = $p->id . '_front.jpg';
            $p->image_back = $p->id . '_back.jpg';
            $p->image_left = $p->id . '_left.jpg';
            $p->image_right = $p->id . '_right.jpg';

            $p->save();
        }
        return redirect()->route('product')->with('success', 'Product added successfully.');
    }

    public function editproduct(Product $product)
    {
        return view('editproduct', compact('product'));
    }

    public function updateproduct(Product $product)
    {
        $product->update(request()->all());
        return redirect()->route('product')->with('success', 'Product updated successfully.');
    }

    public function deleteproduct(Product $product)
    {
        $product->delete();
        return redirect()->route('product')->with('success', 'Product deleted successfully.');
    }
}
