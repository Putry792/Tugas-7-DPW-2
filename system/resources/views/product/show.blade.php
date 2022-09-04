@extends('template.base')

@section('content')
    <div class="container"> 
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                       Detail Data Buku
                    </div>
                    <div class="card-body">
                        <h3>{{$product->nama_product}}</h3>
                        <h5>{{$product->penulis}}</h5>
                        <hr>
                        <p>Tgl Terbit : {{$product->terbit}}</p>
                        <p>Halaman : {{$product->halaman}} | Harga: Rp. {{$product->harga}} |
                           Stok : {{$product->stok}} |
                           Berat : {{$product->berat}} kg | Seller : {{$product->seller->nama}}</p>
                            
                           <p>{!! nl2br($product->deskripsi) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
