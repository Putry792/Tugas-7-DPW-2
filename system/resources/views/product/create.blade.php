@extends('template.base')

@section('content')
    <div class="container"> 
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Buku
                       
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/product')}}" method="POST"  >
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Judul Buku</label>
                                 <input type="text" class = "form-control" name="nama_product">
                             </div>
                             <div class="form-group">
                                <label class="control-label">Penulis</label>
                                 <input type="text" class = "form-control" name="penulis">
                             </div>
                             <div class="form-group">
                                <label class="control-label">Tgl Terbit</label>
                                 <input type="date" class = "form-control" name="terbit">
                             </div>
                             <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">Halaman</label>
                                         <input type="text" class = "form-control" name="halaman">
                                     </div>
                                </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label class="control-label">Harga</label>
                                          <input type="text" class = "form-control" name="harga">
                                      </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label class="control-label">Berat</label>
                                          <input type="text" class = "form-control" name="berat" placeholder="Berat dalam satuan kg">
                                      </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label class="control-label">Stok</label>
                                          <input type="text" class = "form-control" name="stok">
                                      </div>
                                 </div>
                             </div>
                             
                              
                              
                              <div class="form-group">
                                 <label class="control-label">Deskripsi</label>
                                 <textarea name="deskripsi" class = "form-control" ></textarea>
                                 
                              </div>
                              <button class="btn btn-dark  float-right"><i class="fa fa-save"></i> Simpan</button>
                         </div>
     
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
   
@endsection
