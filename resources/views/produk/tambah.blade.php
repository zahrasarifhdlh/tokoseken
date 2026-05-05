@extends('layouts.master')
@section('konten')
<body>
    <h1>Tambah Produk Baru</h1>
    <div class="card">
        <div class="card-header">
            Tambah data
            <div class="card-body">
                <form action="/beranda/store" method="POST">
                    
                @csrf
            </div>
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_product">
                </div>
                <div class="mb-3">
                    <label class="form-label">Ukuran</label>
                    <input type="number" class="form-control" name="ukuran">
                </div>

                <div class="mb-3">
                    <label class="form-label">Warna</label>
                    <input type="text" class="form-control" name="warna">
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga">
                </div>

                
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </form>
        </div>
    
    </div>
</body>
   
@endsection