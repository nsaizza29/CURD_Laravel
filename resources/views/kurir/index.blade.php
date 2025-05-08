<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kurir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 1rem;
        }

        .btn {
            border-radius: 0.5rem;
        }

        h2 {
            color: #0d6efd; /* Bootstrap blue */
        }

        .table thead th {
            background-color: #e0eaff;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-4">
                    <h2 class="fw-bold"><i class="bi bi-truck"></i> Data Kurir</h2>
                    <p class="text-muted">Daftar kurir yang terdaftar dalam sistem</p>
                </div>

                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="mb-0 text-primary"><i class="bi bi-table"></i> Tabel Kurir</h5>
                            <a href="{{ route('kurir.create') }}" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle me-1"></i> Tambah Kurir
                            </a>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Telepon</th>
                                        <th>Wilayah Operasi</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kurir as $index => $kuriritem)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $kuriritem->nama_kurir }}</td>
                                            <td>{{ $kuriritem->telepon }}</td>
                                            <td>{{ $kuriritem->wilayah_operasi }}</td>
                                            <td class="text-center">
                                                <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');"
                                                    action="{{ route('kurir.destroy', $kuriritem->id) }}" method="POST" class="d-inline">
                                                    <a href="{{ route('kurir.show', $kuriritem->id) }}" 
                                                       class="btn btn-sm btn-outline-secondary me-1" 
                                                       title="Lihat Data">
                                                       <i class="bi bi-eye"></i>
                                                    </a>
                                                    <a href="{{ route('kurir.edit', $kuriritem->id) }}" 
                                                       class="btn btn-sm btn-outline-primary me-1" 
                                                       title="Edit Data">
                                                       <i class="bi bi-pencil"></i>
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Hapus Data">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4">
                            {{ $kurir->links() }}
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS CDN -->
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
      

        @if (session('success'))
            toastr.success("{{ session('success') }}", "BERHASIL");
        @elseif (session('error'))
            toastr.error("{{ session('error') }}", "GAGAL");
        @endif
    </script>
</body>

</html>
