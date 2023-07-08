@extends('halaman_dashboard.index')
@section('fiture')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">Data Alumni</h4>
                </div>
                @if (Auth::user()->role != 'user')
                    <div>
                        <a href="/tambahalumni" class="text-decoration-none text-white"><button type="button"
                                class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="ti-plus btn-icon-prepend"></i>Tambah
                                Data
                            </button></a>
                    </div>
                @endif
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
    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire(
                    'Sukses',
                    '{{ Session::get('success') }}',
                    'success'
                );
            });
        </script>
    @endif
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Alumni TABLE</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Nama lengkap
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Telepon
                                </th>
                                <?php
                                    if(Auth::user()->role != 'user'){
                                ?>
                                <th>
                                    Aksi
                                </th>
                                <?php
                                    }
                                ?>
                            </tr>
                        </thead>
                        @foreach ($alumni as $item)
                            <tbody>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nohp }}</td>
                                <?php
                                if(Auth::user()->role != 'user'){
                                ?>
                                <td><a href="/alumniedit/{{ $item->id }}"
                                        class="btn-sm btn-warning text-decoration-none">Edit</a>
                                    <form onsubmit="return confirmDelete(event)" class="d-inline"
                                        action="/alumnihapus/{{ $item->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn-sm btn-danger btn-sm">Del</button>
                                    </form>
                                </td>
                                <?php
                                }
                                ?>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confirmDelete(event) {
        event.preventDefault(); // Menghentikan form dari pengiriman langsung

        Swal.fire({
            title: 'Yakin Hapus Data?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((willDelete) => {
            if (willDelete.isConfirmed) {
                event.target.submit(); // Melanjutkan pengiriman form
            } else {
                swal('Your imaginary file is safe!');
            }
        });
    }
</script>
