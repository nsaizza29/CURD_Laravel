<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Kurir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 1rem;
        }
        .form-control {
            border-radius: 0.5rem;
        }
        label {
            font-weight: 600;
        }
    </style>
</head>
<body>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white rounded-top">
                    <h5 class="mb-0"><i class="bi bi-plus-circle me-2"></i>Tambah Data Kurir</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('kurir.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="nama_kurir">Nama Kurir</label>
                            <input type="text" id="nama_kurir" name="nama_kurir"
                                   class="form-control @error('nama_kurir') is-invalid @enderror"
                                   placeholder="Masukkan Nama Kurir" value="{{ old('nama_kurir') }}">
                            @error('nama_kurir')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="telepon">Telepon</label>
                            <input type="text" id="telepon" name="telepon"
                                   class="form-control @error('telepon') is-invalid @enderror"
                                   placeholder="Masukkan Nomor Telepon" value="{{ old('telepon') }}">
                            @error('telepon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="wilayah_operasi">Wilayah Operasi</label>
                            <textarea id="wilayah_operasi" name="wilayah_operasi"
                                      class="form-control @error('wilayah_operasi') is-invalid @enderror"
                                      rows="4" placeholder="Masukkan Wilayah Operasi">{{ old('wilayah_operasi') }}</textarea>
                            @error('wilayah_operasi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save me-1"></i> Simpan
                            </button>
                            <a href="{{ route('kurir.index') }}" class="btn btn-outline-secondary">
                                <i class="bi bi-arrow-left me-1"></i> Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
