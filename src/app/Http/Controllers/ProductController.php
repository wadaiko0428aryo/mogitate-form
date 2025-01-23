<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::Paginate(6);
        return view('products' , compact('products'));
    }

    public function search(ProductRequest $request)
    {

        $query = Product::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }
        $products = $query->paginate(6);



        return view('products', compact('products' ));
    }

    public function detail($productId)
    {
        $product = Product::find($productId);
        if (!$product) {
            return redirect('/products')->with('error', '商品が見つかりません');
        }
        return view('detail', compact('product'));
    }

    public function update(ProductRequest $request)
    {

        if ($request->has('back')) {
            return redirect('/products')->withInput();
        }
        $product = Product::find($request->productId);

        $data = $request->only(['name', 'price', 'description']);
        $data['seasons'] = implode(',', $request->input('seasons', []));

        $product->update($data);

                if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/products'); // 保存先: storage/app/public/products
            $imageUrl = Storage::url($imagePath); // 公開URLを取得
        }

        // 商品を作成
        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $imageUrl ?? null, // 画像URLを保存
            'description' => $request->input('description'),
        ]);

        return redirect('/products');
    }

    public function register(Request $request)
    {
        $products = Product::all();
        $selectedProduct = null;
        if ($request->has('image')) {
            $selectedProduct = Product::find($request->input('image'));
        }
        return view('register', compact('products', 'selectedProduct'));
    }

    public function create(ProductRequest $request)
    {

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/products'); // 保存先: storage/app/public/products
            $imageUrl = Storage::url($imagePath); // 公開URLを取得
        }

        // 商品を作成
        Product::create([
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'image' => $imageUrl ?? null, // 画像URLを保存
            'description' => $request->input('description'),
        ]);

        return redirect('/products');
    }
}
