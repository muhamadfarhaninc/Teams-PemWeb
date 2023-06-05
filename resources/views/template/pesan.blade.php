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
                {{ Session::get('success') }} <button type="button" class="btn btn-close" data-bs-dismiss="alert"
                    aria-label="Close"></button>

            </li>
        </ul>
    </div>
@endif