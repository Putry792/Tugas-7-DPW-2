<?php
namespace App\Http\Controllers;

use App\Models\product;
use App\Models\user;
class ProductController extends controller  
{
    function index(){
        $user = request()->user();
        $data['list_product'] = $user->product;
        return view('product.index', $data);
    }
    function create(){
        return view('product.create');
    }
    function store(){
       $product = new product;
       $product->id_user = request()->user()->id;
       $product->nama_product = request('nama_product');
       $product->harga = request('harga');
       $product->berat = request('berat');
       $product->deskripsi = request('deskripsi');
       $product->penulis = request('penulis');
       $product->halaman = request('halaman');
       $product->terbit = request('terbit');
       $product->stok = request('stok');
         
            $product->save();
    
              
       return redirect('admin/product')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(product $product){
        $data['product'] = $product;
       return view('product.show', $data);
    }
    function edit(product $product){
        $data['product'] = $product;
       return view('product.edit', $data);
    }
    function update(product $product){
      
        $product->nama_product = request('nama_product');
        $product->harga = request('harga');
        $product->berat = request('berat');
        $product->deskripsi = request('deskripsi');
        $product->penulis = request('penulis');
        $product->halaman = request('halaman');
        $product->terbit = request('terbit');
        $product->stok = request('stok');
          
             $product->save();
             return redirect('admin/product')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(product $product){
        $product->delete();
        return redirect('admin/product')->with('danger', 'Data Berhasil Dihapus');
    }
    function filter(){
        $nama_product = request('nama_product');
        $stok = explode(",", request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        // $data['list_product'] = product::where('nama_product', 'like', "%$nama_product%")->get();
        // $data['list_product'] = product::whereIn('stok',  $stok)->get();
        $data['list_product'] = Product::whereBetween('harga', [$harga_min, $harga_max])->get();
        $data['nama_product'] = $nama_product;
        $data['stok'] = request('stok');
        return view('product.index', $data);
    }

}