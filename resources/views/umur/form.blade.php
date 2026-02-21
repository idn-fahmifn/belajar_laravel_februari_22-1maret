<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"">
</head>

<body>


    <div class="container mt-4">
        <div class="card">
            <div class="card-body">

                {{-- alert --}}

                @if ($errors->any())
                    <div class="my-3">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>terdapat kesalahan!</strong> Berikut adalah kesalahannya :

                            <ol>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ol>

                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                @if (session('fail'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>{{ session('fail') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>
                @endif



                <h4>Halaman Umur</h4>

                <form action="{{ route('proses.umur') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <div class="label mb-2">Masukan Nama Kamu</div>
                        <input type="text" name="nama" id="" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <div class="label mb-2">Masukan Umur Kamu</div>
                        <input type="number" name="umur" id="" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Masuk</button>

                </form>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
