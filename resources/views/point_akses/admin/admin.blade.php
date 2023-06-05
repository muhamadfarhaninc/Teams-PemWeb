@extends('halaman_dashboard.index')
@section('fiture')
    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card border-bottom-0">
                <div class="card-body pb-0">
                    <p class="card-title">Akses Controll Admin</p>
                    <p class="text-muted font-weight-light">The argument in favor of using filler text
                        goes something like this: If you use real content in the design process, anytime
                        you reach a review</p>
                    <div class="d-flex flex-wrap mb-5">
                        <div class="me-5 mt-3">
                            <p class="text-muted">All People</p>
                            <h3> {{ $allPeople }}</h3>
                        </div>
                        <div class="me-5 mt-3">
                            <p class="text-muted">Admin</p>
                            <h3>{{ $admin }}</h3>
                        </div>
                        <div class="mt-3">
                            <p class="text-muted">User</p>
                            <h3>{{ $user }}</h3>
                        </div>
                    </div>
                </div>
                <canvas id="order-chart" class="w-100"></canvas>
            </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Master To Do Lists</h4>
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
                                    {{ Session::get('success') }} <button type="button" class="btn btn-close"
                                        data-bs-dismiss="alert" aria-label="Close"></button>

                                </li>
                            </ul>
                        </div>
                    @endif
                    <div class="list-wrapper pt-2">
                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                            <?php foreach ($list as $item){ 
                                if($item->status === 'checked'){
                                    ?>
                            <li class="completed">
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        <?php
                                }else {
                                    ?>
                            <li>
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        <?php
                                }
                                ?>
                                        {{ $item->list }}
                                    </label>
                                </div>
                                <form onsubmit="return confirm('Yakin Hapus Catatan ?')"
                                    action="/taskdel/{{ $item->id }}" method="POST" class="ms-3">
                                    @csrf
                                    <button class="ti-trash btn btn-white"></button>
                                </form>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <form action="/task" method="POST">
                        @csrf
                        <div class="add-items d-flex mb-0 mt-4">
                            <input type="text" name="list" class="form-control todo-list-input me-2"
                                placeholder="Add new task" name="task" required>
                            <button class="add btn btn-icon text-primary bg-transparent"><i
                                    class="ti-location-arrow"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
