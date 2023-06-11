@extends('halaman_dashboard.index')
@section('fiture')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit user</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @foreach ($mc as $item)
                    <form class="forms-sample" method="POST" action="/editmcreq" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id }}">
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar</label>
                            <div class="p-2">
                                <img src="{{ asset('gambar') }}/{{ $item->gambar }}" alt="Image"
                                    style="width: 50px; height: 50px;">
                            </div>
                            <input class="form-control" type="file" id="gambar" name="gambar">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama lengkap</label>
                            <input type="text" class="form-control" id="nama" placeholder="Kevin Example"
                                name="nama" value="{{ $item->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"
                                name="email" value="{{ $item->email }}">
                        </div>
                        <input type="hidden" name="password" value="{{ $item->password }}">
                        <button type="submit" class="btn btn-primary me-2">Edit</button>
                        <a href="/mastercontrol" class="btn btn-light">Kembali</a>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
