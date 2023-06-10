@extends('halaman_dashboard.index')
@section('fiture')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Tambah data KAD3</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="forms-sample" method="POST" action="/tambahkadreq" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input class="form-control" type="file" id="gambar" name="gambar" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama lengkap</label>
                                <input type="text" class="form-control" id="nama" placeholder="Kevin Example"
                                    name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="nim">Nim</label>
                                <input type="number" class="form-control" id="nim" placeholder="22020000"
                                    name="nim" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" rows="4" placeholder="Kampung Durian Runtuh Jalan Kemangan No.78"
                                    name="alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="number" class="form-control" id="telepon" placeholder="0838000000"
                                    name="telepon" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"
                                    name="email" required>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Tambah</button>
                            <a href="/datakad3" class="btn btn-light">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
