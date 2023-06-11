@extends('halaman_dashboard.index')
@section('fiture')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Data User</h4>
                        </div>
                        <div>
                            <a href="/tambahmc" class="text-decoration-none text-white"><button type="button"
                                    class="btn btn-primary btn-icon-text btn-rounded">
                                    <i class="ti-plus btn-icon-prepend"></i>Tambah
                                    User
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    <ul>
                        <li>
                            {{ Session::get('success') }}

                        </li>
                    </ul>
                </div>
            @endif
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">ACCOUNT TABLE</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            Gambar
                                        </th>
                                        <th>
                                            Nama lengkap
                                        </th>
                                        <th>
                                            Role
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Aksi
                                        </th>
                                    </tr>
                                </thead>
                                @foreach ($mc as $item)
                                    <tbody>
                                        <td class="py-1">
                                            <img src="{{ asset('gambar') }}/{{ $item->gambar }}" alt="image" />
                                        </td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        @if ($item->role === 'admin')
                                            <td style="color:rgb(0, 255, 0); font-weight: bold;">
                                                {{ $item->role }}</td>
                                        @else
                                            <td>{{ $item->role }}</td>
                                        @endif
                                        <td>{{ $item->email }}</td>
                                        @if ($item->role === 'admin')
                                            <td style="color:rgb(0, 255, 0); font-weight: bold;">Admin User</td>
                                        @else
                                            <td>
                                                <form
                                                    onsubmit="return confirm('Yakin ingin Mengangkat USER Menjadi ADMIN ?')"
                                                    class="d-inline" action="/uprole/{{ $item->id }}" method="POST">
                                                    @csrf
                                                    <input type="submit"
                                                        class="btn-sm text-decoration-none border border-warning text-warning"
                                                        value="UP">
                                                </form>
                                                &nbsp;<a href="/mcedit/{{ $item->id }}"
                                                    class="btn-sm btn-warning text-decoration-none">Edit</a>
                                                <form onsubmit="return confirm('Yakin Hapus Data ?')" class="d-inline"
                                                    action="/mchapus/{{ $item->id }}" method="POST">
                                                    @csrf
                                                    <input type="submit" class="btn-sm btn-danger btn-sm" value="Del">
                                                </form>
                                        @endif
                                        </td>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
