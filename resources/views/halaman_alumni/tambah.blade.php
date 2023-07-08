@extends('halaman_dashboard.index')
@section('fiture')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Tambah data Alumni</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="/tambahalumnireq">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Kevin Example" name="nama"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"
                            name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="number" class="form-control" id="telepon" placeholder="0838000000" name="nohp"
                            required>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    <a href="/alumni" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
