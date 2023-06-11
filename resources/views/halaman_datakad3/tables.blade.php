@extends('halaman_dashboard.index')
@section('fiture')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">Data Komputerasi Akutansi D3</h4>
                </div>
                <div>
                    <a href="/tambahkad" class="text-decoration-none text-white"><button type="button"
                            class="btn btn-primary btn-icon-text btn-rounded">
                            <i class="ti-plus btn-icon-prepend"></i>Tambah
                            Data
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
                <h4 class="card-title">KAD3 TABLE</h4>
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
                                    Nim
                                </th>
                                <th>
                                    Alamat
                                </th>
                                <th>
                                    Telepon
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        @foreach ($datakad3 as $item)
                            <tbody>
                                <td class="py-1">
                                    <img src="{{ asset('gambar') }}/{{ $item->gambar }}" alt="image" />
                                </td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->telepon }}</td>
                                <td>{{ $item->email }}</td>
                                <td><a href="/kadedit/{{ $item->id }}"
                                        class="btn-sm btn-warning text-decoration-none">Edit</a>
                                    <form onsubmit="return confirmDelete(event)" class="d-inline"
                                        action="/kadhapus/{{ $item->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn-sm btn-danger btn-sm">Del</button>
                                    </form>
                                </td>
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
