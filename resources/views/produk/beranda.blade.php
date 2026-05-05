@extends('layouts.master')
@section('konten')
    <body>
        <h1>ini data produk kami</h1>
        <a href="/beranda/tambah" type="button" class="btn btn-outline-primary mb-3 mt-4">Tambah Data Baru</a>
        @if (session('success'))
            <div class="allert allert-success">

                {{session('success')}}
            </div>
        @endif
        <div class="card ms-5">
            <div class="card-hearder">
                <div class="card-body">
                    <table class='table'> 
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Product</th>
                                <th scope="col">Ukuran</th>
                                <th scope="col">Warna</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$item->nama_product}}</td>
                                    <td>{{$item->ukuran}}</td>
                                    <td>{{$item->warna}}</td>
                                    <td>{{$item->harga}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
@endsection

