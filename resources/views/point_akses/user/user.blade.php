@extends('halaman_dashboard.index')
@section('fiture')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Dashboard</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title text-md-center text-xl-left">{{ Auth::user()->name }}</p>
                            <div
                                class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0 text-success">
                                    {{ Auth::user()->role }}</h3>
                            </div>
                            <p class="mb-0 mt-2 text-warning">mahasiswa <span
                                    class="text-black ms-1"><small>(22010001)</small></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Message</h4>
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" style="height: 52px;">
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                            <li>{{ $item }} <button type="button" class="btn btn-close"
                                                    data-bs-dismiss="alert" aria-label="Close"></button></li>
                                        @endforeach
                                    </ul>
                                </div>
                            @elseif (Session::get('success'))
                                <div class="alert alert-success alert-dismissible fade show" style="height: 52px;">
                                    <ul>
                                        <li>
                                            {{ Session::get('success') }} <button type="button" class="btn btn-close"
                                                data-bs-dismiss="alert" aria-label="Close"></button>

                                        </li>
                                    </ul>
                                </div>
                            @else
                                <div class="alert alert-secondary alert-dismissible fade show">
                                    <ul>
                                        <li>
                                            Tidak ada pesan saat ini.
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
