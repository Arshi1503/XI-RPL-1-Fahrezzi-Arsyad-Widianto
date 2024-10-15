<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Index
     * 
     * @return void
     */

     public function index() : View 
     {
        $products= Product::latest()->paginate(10);

        return view('products.index', compact('products'));

     }

     public function create() : View{
      
      return view('products.create');
     }

     public function store(Request $request) : RedirectResponse {
        // Validasi form
        $request->validate([
            "image" => "required|image|mimes:jpeg,png,jpg|max:2048",
            "title" => "required|min:5",
            "description" => "required|min:10",
            "price" => "required|numeric",
            "stock" => "required|numeric",
        ]);
    
        // Cek apakah file gambar ada
        if ($request->hasFile('image')) {
            // Upload image
            $image = $request->file('image');
            $image->storeAs("public/products", $image->hashName());
    
            // Buat produk
            Product::create([
                "image" => $image->hashName(),
                "title" => $request->title,
                "description" => $request->description,
                "price" => $request->price,
                "stock" => $request->stock,
            ]);
    
            // Redirect with success message
            return redirect()->route('products.index')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->back()->withErrors(['image' => 'File gambar tidak ditemukan atau tidak valid']);
        }
    }
    
    public function show(string $id) : View{
        
        $product= Product::findOrFail($id);

        return view('products.show', compact("product"));
    }

    public function edit(string $id): view{
        
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }
    public function update(Request $request, $id) : RedirectResponse {
        $request->validate([
            'image' => "image|mimes:jpeg,png,jpg|max:2048",
            'title' => "required|min:5",
            "description" => "required|min:10",
            "price" => "required|numeric",
            "stock" => "required|numeric",
        ]);
    
        $product = Product::findOrFail($id);
    
        if ($request->hasFile("image")) {
            $image = $request->file('image');
            $image->storeAs("public/products", $image->hashName());
    
            // Hapus gambar lama
            Storage::delete("public/products/$product->image");
    
            $product->update([
                'image' => $image->hashName(),
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
            ]);
        } else {
            $product->update([
                'title' => $request->title,
                'description' => $request->description,
                'price' => $request->price,
                'stock' => $request->stock,
            ]);
        }
    
        return redirect()->route('products.index')->with(['success', 'Data berhasil diupdate']);
    }

    public function destroy(string $id) : RedirectResponse{

        $product = Product::findOrFail($id);

        Storage::delete("public/products/$product->image");

        $product->delete();

        return redirect()->route('products.index')->with(['success' => 'Data berhasil dihapus']);
    }

}

