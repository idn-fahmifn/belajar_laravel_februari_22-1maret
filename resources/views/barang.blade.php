<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h4>Data Barang</h4>
                <span class="fw-semibold">Data semua barang</span>

                <div class="table-responsive">
                    <table class="table table-hover table-striped mt-4">
                        <thead>
                            <th>Nama barang</th>
                            <th>Harga</th>
                            <th>Exp</th>
                            <th>#</th>
                        </thead>
                        <tbody>
                            @forelse ($data as $row)
                            {{-- jika ada data, maka tampilkan --}}
                            <tr>
                                <td>{{ $row->nama_barang }}</td>
                                <td>IDR. {{ number_format($row->harga) }}</td>
                                <td>{{ $row->kedaluarsa }}</td>
                                <td>
                                    <a href="{{ route('barang.show', $row->merk) }}" class="btn btn-info btn-small">
                                        detail
                                    </a>
                                </td>
                            </tr>
                                
                            @empty
                                
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-2">
                        {{ $data->links() }}
                    </div>
                </div>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
