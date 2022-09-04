@extends('template.base')

@section('content')
    <div class="container"> 
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Edit Data Buku
                       
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/product', $product->id)}}" method="POST"  >
                            @csrf
                            @method("PUT")
                            <div class="form-group">
                                <label class="control-label">Judul Buku</label>
                                 <input type="text" class = "form-control" name="nama_product" value="{{$product->nama_product}}">
                             </div>
                             <div class="form-group">
                                <label class="control-label">Penulis</label>
                                 <input type="text" class = "form-control" name="penulis" value="{{$product->penulis}}">
                             </div>
                             <div class="form-group">
                                <label class="control-label">Tgl Terbit</label>
                                 <input type="date" class = "form-control" name="tgl_terbit"  value="{{$product->terbit}}">
                             </div>
                             <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Halaman</label>
                                         <input type="text" class = "form-control" name="halaman" value="{{$product->halaman}}" >
                                     </div>
                                </div>
                                
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label class="control-label">Harga</label>
                                          <input type="text" class = "form-control" name="harga" value="{{$product->harga}}" >
                                      </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label class="control-label">Berat</label>
                                          <input type="text" class = "form-control" name="berat" value="{{$product->berat}}" >
                                      </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label class="control-label">Stok</label>
                                          <input type="text" class = "form-control" name="stok" value="{{$product->stok}}" >
                                      </div>
                                 </div>
                             </div>
                             
                              
                              
                              <div class="form-group">
                                 <label class="control-label">Deskripsi</label>
                                 <textarea name="deskripsi" class = "form-control">{{$product->deskripsi}}</textarea>
                                 
                              </div>
                              <button class="btn btn-dark  float-right"><i class="fa fa-save"></i> Simpan</button>
                         </div>
     
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
   
@endsection
