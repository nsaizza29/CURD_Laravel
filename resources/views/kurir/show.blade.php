<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Kurir</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .card {
      border-radius: 1rem;
    }
    .card-header {
      border-top-left-radius: 1rem;
      border-top-right-radius: 1rem;
    }
    .card-title {
      font-weight: bold;
      font-size: 1.5rem;
    }
    .card-text .label {
      font-weight: 600;
      color: #0d6efd;
      min-width: 160px;
      display: inline-block;
    }
    .card-text i {
      color: #0d6efd;
      margin-right: 6px;
    }
  </style>
</head>
<body>
    <div class="container mb-5" style="margin-top: 100px;">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow-sm border-0">
          <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
              <h5 class="mb-0"><i class="bi bi-person-circle me-2"></i>Detail Kurir</h5>
              <a href="{{ route('kurir.index') }}" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left me-1"></i> Kembali
              </a>
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $kurir->nama_kurir }}</h5>
            <p class="card-text">
              <span class="label"><i class="bi bi-telephone"></i>Telepon:</span> {{ $kurir->telepon }}<br>
              <span class="label"><i class="bi bi-geo-alt"></i>Wilayah Operasi:</span> {{ $kurir->wilayah_operasi }}<br>
              <span class="label"><i class="bi bi-clock"></i>Dibuat pada:</span> {{ $kurir->created_at }}<br>
              <span class="label"><i class="bi bi-arrow-clockwise"></i>Diupdate pada:</span> {{ $kurir->updated_at }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
