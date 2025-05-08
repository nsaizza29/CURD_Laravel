<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Data Kurir</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
            <h5 class="mb-0"><i class="bi bi-pencil-square me-2"></i>Edit Data Kurir</h5>
          </div>
          <div class="card-body">

            @if ($errors->any())
              <div class="alert alert-danger">
                <strong>Whoops!</strong> Ada masalah dengan input Anda:
                <ul class="mb-0 mt-2">
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif

            <form action="{{ route('kurir.update', $kurir->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label for="nama_kurir">Nama Kurir</label>
                <input type="text" class="form-control @error('nama_kurir') is-invalid @enderror"
                       id="nama_kurir" name="nama_kurir"
                       value="{{ old('nama_kurir', $kurir->nama_kurir) }}"
                       placeholder="Masukkan Nama Kurir">
                @error('nama_kurir')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="telepon">Telepon</label>
                <input type="text" class="form-control @error('telepon') is-invalid @enderror"
                       id="telepon" name="telepon"
                       value="{{ old('telepon', $kurir->telepon) }}"
                       placeholder="Masukkan Nomor Telepon">
                @error('telepon')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="mb-4">
                <label for="wilayah_operasi">Wilayah Operasi</label>
                <input type="text" class="form-control @error('wilayah_operasi') is-invalid @enderror"
                       id="wilayah_operasi" name="wilayah_operasi"
                       value="{{ old('wilayah_operasi', $kurir->wilayah_operasi) }}"
                       placeholder="Masukkan Wilayah Operasi">
                @error('wilayah_operasi')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <div class="d-flex justify-content-between">
                <a href="{{ route('kurir.index') }}" class="btn btn-outline-secondary">
                  <i class="bi bi-arrow-left me-1"></i> Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                  <i class="bi bi-save me-1"></i> Update
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
