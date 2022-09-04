@extends('template.base')

@section('content')
    <div class="container"> 
        <div class="row">
            <div class="col-md-12 mt-5">
               <div class="card">
                <div class="card-header">
                    Filter
                </div>
                <div class="card-body">
                    <form action="{{url('admin/product/filter')}}" method="POST">
                    @csrf
                <div class="form-group">
                   <label for="" class="control-label">Nama</label> 
                  <input  type="text" class="form-control" name="nama_product" value="{{$nama_product ?? ""}}">
                </div>
                {{-- <div class="form-group">
                    <label for="" class="control-label">Stok</label> 
                   <input  type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
                 </div> --}}
                 <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Harga Min</label> 
                           <input  type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
                         </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="" class="control-label">Harga Max</label> 
                           <input  type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
                         </div>
                    </div>
                 </div>
                <button class="btn btn-dark float-right"><i class="fa fa-search"></i> Filter</button>
            </form>
                </div>
               </div>
                <div class="card">
                    <div class="card-header">
                        Data Buku
                        <a href="{{url('admin/product/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data Buku</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Judul Buku</th>
                                <th>Penulis</th>
                                <th>Terbit</th>
                               <th>Halaman</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                @foreach ($list_product as $product)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                        <a href="{{url('admin/product',$product->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                        <a href="{{url('admin/product',$product->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                             @include('template.utils.delete', ['url' => url('admin/product', $product->id)])
                                        </div>
                                        
                                    </td>
                                    <td>{{$product->nama_product}}</td>
                                    <td>{{$product->penulis}}</td>
                                     <td>{{$product->terbit}}</td>
                                    <td>{{$product->halaman}}</td>
                                    <td>{{$product->harga}}</td>
                                    <td>{{$product->stok}}</td>
                                    
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
