@extends('admin.layout')

@section('content')
    <div class="row g-4">
        <div class="col-12">

            <!-- Page Header -->
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-2">
                            <li class="breadcrumb-item">
                                <a href="#" class="text-decoration-none text-primary">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('data-product.index') }}" class="text-decoration-none text-primary">
                                    Produk
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Produk
                            </li>
                        </ol>
                    </nav>

                    <h3 class="fw-bold text-dark mb-1">
                        <i class="bi bi-plus-circle text-primary me-2"></i>
                        Edit Produk
                    </h3>
                    <p class="text-muted mb-0">
                        Lengkapi informasi berikut untuk menambahkan produk baru.
                    </p>
                </div>

                <a href="{{ route('data-product.index') }}" class="btn btn-outline-secondary rounded-3 px-3 py-2">
                    <i class="bi bi-arrow-left me-2"></i>
                    Kembali
                </a>
            </div>

            <!-- Form -->
            <form action="{{ route('data-product.update', ['data_product' => $produk->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="row g-4">

                    <!-- Left Column -->
                    <div class="col-12 col-xl-8">

                        <!-- Informasi Produk -->
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-header bg-white border-bottom px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-3 p-2">
                                        <i class="bi bi-box-seam fs-5"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1">Informasi Produk</h5>
                                        <small class="text-muted">
                                            Masukkan identitas dan deskripsi produk.
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-4">
                                <div class="row g-4">

                                    <!-- Nama -->
                                    <div class="col-12">
                                        <label for="nama" class="form-label fw-semibold">
                                            Nama Produk <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light">
                                                <i class="bi bi-box-seam text-primary"></i>
                                            </span>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="nama" name="nama" value="{{ $produk->nama }}"
                                                placeholder="Contoh: Laptop Pro 14" required>
                                        </div>
                                        @error('nama')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text">
                                            Gunakan nama produk yang jelas dan mudah dikenali.
                                        </div>
                                    </div>

                                    <!-- Kode -->
                                    <div class="col-12">
                                        <label for="kode" class="form-label fw-semibold">
                                            Kode Produk <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light">
                                                <i class="bi bi-upc-scan text-primary"></i>
                                            </span>
                                            <input type="text" class="form-control @error('kode') is-invalid @enderror"
                                                id="kode" readonly name="kode" value="{{ $produk->kode }}"
                                                placeholder="Contoh: PRD-001" required>
                                        </div>
                                        @error('kode')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Deskripsi -->
                                    <div class="col-12">
                                        <label for="deskripsi" class="form-label fw-semibold">
                                            Deskripsi Produk
                                        </label>
                                        <textarea class="form-control @error('deskripsi') is-invalid @enderror rounded-3" id="deskripsi" name="deskripsi"
                                            rows="5" maxlength="1000" placeholder="Jelaskan spesifikasi, keunggulan, dan informasi produk lainnya...">{{ $produk->deskripsi }}</textarea>
                                        @error('deskripsi')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text">
                                            Maksimal 1.000 karakter.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Harga dan Stok -->
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-header bg-white border-bottom px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-success bg-opacity-10 text-success rounded-3 p-2">
                                        <i class="bi bi-cash-stack fs-5"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1">Harga dan Persediaan</h5>
                                        <small class="text-muted">
                                            Tentukan harga jual dan jumlah stok produk.
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-4">
                                <div class="row g-4">

                                    <!-- Harga -->
                                    <div class="col-12 col-md-6">
                                        <label for="harga" class="form-label fw-semibold">
                                            Harga Produk <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light fw-semibold">Rp</span>
                                            <input type="number" class="form-control @error('harga') is-invalid @enderror"
                                                id="harga" name="harga" value="{{ $produk->harga }}" min="0"
                                                step="1" placeholder="Contoh: 150000" required>
                                        </div>
                                        @error('harga')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text">
                                            Masukkan harga dalam Rupiah.
                                        </div>
                                    </div>

                                    <!-- Stok -->
                                    <div class="col-12 col-md-6">
                                        <label for="stok" class="form-label fw-semibold">
                                            Jumlah Stok <span class="text-danger">*</span>
                                        </label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-light">
                                                <i class="bi bi-stack text-primary"></i>
                                            </span>
                                            <input type="number" class="form-control @error('stok') is-invalid @enderror"
                                                id="stok" name="stok" value="{{ $produk->stok }}"
                                                min="0" step="1" placeholder="Masukkan jumlah stok"
                                                required>
                                            <span class="input-group-text bg-light">Unit</span>
                                        </div>
                                        @error('stok')
                                            <div class="text-danger small mt-1">{{ $message }}</div>
                                        @enderror
                                        <div class="form-text">
                                            Masukkan jumlah produk yang tersedia.
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Foto Produk -->
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-header bg-white border-bottom px-4 py-3">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-info bg-opacity-10 text-info rounded-3 p-2">
                                        <i class="bi bi-image fs-5"></i>
                                    </div>
                                    <div>
                                        <h5 class="fw-bold mb-1">Foto Produk</h5>
                                        <small class="text-muted">
                                            Unggah gambar untuk menampilkan produk.
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body p-4">
                                <label for="foto"
                                    class="border border-2 border-dashed rounded-4 p-4 text-center d-block"
                                    style="border-color: #ced4da !important; cursor: pointer; background: #fafbfc;">
                                    <div class="py-3">
                                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                                            style="width: 72px; height: 72px;">
                                            <i class="bi bi-cloud-arrow-up fs-1"></i>
                                        </div>
                                        <h6 class="fw-bold mb-2">
                                            Klik untuk memilih foto produk
                                        </h6>
                                        <p class="text-muted small mb-2">
                                            Pilih gambar dari perangkat Anda.
                                        </p>
                                        <span class="badge bg-light text-secondary border">
                                            JPG, JPEG, PNG, WEBP
                                        </span>
                                        <p class="text-muted small mt-2 mb-0">
                                            Maksimal ukuran file 2 MB.
                                        </p>
                                    </div>
                                </label>

                                <input type="file" class="form-control mt-3 @error('foto') is-invalid @enderror"
                                    id="foto" name="foto" accept="image/png,image/jpeg,image/webp">

                                @error('foto')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror

                                <!-- Preview Foto -->
                                <div id="preview-container" class="mt-3 text-center">

                                    <img id="preview-foto" src="{{ asset('storage') }}/{{ $produk->foto }}"
                                        alt="Preview foto produk" class="img-thumbnail rounded-3"
                                        style="max-width: 220px; max-height: 220px; object-fit: contain;">
                                    <p class="text-muted small mt-2 mb-0">
                                        Preview foto produk
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Right Column -->
                    <div class="col-12 col-xl-4">

                        <!-- Ringkasan -->
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-header bg-white border-bottom px-4 py-3">
                                <h5 class="fw-bold mb-0">
                                    <i class="bi bi-clipboard-check text-primary me-2"></i>
                                    Ringkasan Produk
                                </h5>
                            </div>

                            <div class="card-body p-4">
                                <div class="text-center mb-4">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-4 d-flex align-items-center justify-content-center mx-auto mb-3"
                                        style="width: 90px; height: 90px;">
                                        <i class="bi bi-box-seam fs-1" id="icon-ringkasan"></i>
                                        <img id="foto-ringkasan" src="" alt="Foto produk"
                                            class="d-none rounded-4 w-100 h-100" style="object-fit: cover;">
                                    </div>
                                    <h6 class="fw-bold mb-1" id="ringkasan-nama">
                                        Nama Produk
                                    </h6>
                                    <p class="text-muted small mb-0" id="ringkasan-kode">
                                        Kode: -
                                    </p>
                                </div>

                                <hr class="border-secondary border-opacity-10">

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Harga</span>
                                    <span class="fw-bold text-primary" id="ringkasan-harga">
                                        Rp0
                                    </span>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <span class="text-muted">Stok</span>
                                    <span class="fw-semibold" id="ringkasan-stok">
                                        0 unit
                                    </span>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Kelengkapan</span>
                                    <span class="badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-3 py-2"
                                        id="ringkasan-status">
                                        Belum lengkap
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Tips -->
                        <div class="card border-0 rounded-4 bg-primary bg-opacity-10 mb-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start gap-3">
                                    <i class="bi bi-lightbulb text-primary fs-3"></i>
                                    <div>
                                        <h6 class="fw-bold text-primary mb-2">
                                            Tips Menambahkan Produk
                                        </h6>
                                        <ul class="text-secondary small ps-3 mb-0">
                                            <li class="mb-2">
                                                Gunakan nama produk yang mudah dipahami.
                                            </li>
                                            <li class="mb-2">
                                                Pastikan kode produk unik.
                                            </li>
                                            <li class="mb-2">
                                                Periksa kembali harga dan jumlah stok.
                                            </li>
                                            <li>
                                                Gunakan foto produk yang jelas.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Catatan -->
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <i class="bi bi-shield-check text-success fs-5"></i>
                                    <span class="fw-semibold">Informasi Data</span>
                                </div>
                                <p class="text-muted small mb-0">
                                    Periksa kembali seluruh informasi produk sebelum menekan tombol
                                    Simpan Produk.
                                </p>
                            </div>
                        </div>

                    </div>

                    <!-- Action Buttons -->
                    <div class="col-12">
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-body p-3">
                                <div
                                    class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3">
                                    <p class="text-muted small mb-0">
                                        <i class="bi bi-info-circle me-1"></i>
                                        Kolom bertanda <span class="text-danger">*</span> wajib diisi.
                                    </p>

                                    <div class="d-flex flex-column flex-sm-row gap-2">
                                        <a href="{{ route('data-product.index') }}"
                                            class="btn btn-light border rounded-3 px-4 py-2">
                                            <i class="bi bi-x-circle me-2"></i>
                                            Batal
                                        </a>

                                        <button type="submit" class="btn btn-primary rounded-3 px-4 py-2 shadow-sm">
                                            <i class="bi bi-check-circle me-2"></i>
                                            Simpan Produk
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>

        </div>
    </div>

    <!-- Preview Foto dan Ringkasan Produk -->
    @push('script')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const nama = document.getElementById('nama');
                const kode = document.getElementById('kode');
                const harga = document.getElementById('harga');
                const stok = document.getElementById('stok');
                const foto = document.getElementById('foto');

                const ringkasanNama = document.getElementById('ringkasan-nama');
                const ringkasanKode = document.getElementById('ringkasan-kode');
                const ringkasanHarga = document.getElementById('ringkasan-harga');
                const ringkasanStok = document.getElementById('ringkasan-stok');
                const ringkasanStatus = document.getElementById('ringkasan-status');

                const previewContainer = document.getElementById('preview-container');
                const previewFoto = document.getElementById('preview-foto');
                const fotoRingkasan = document.getElementById('foto-ringkasan');
                const iconRingkasan = document.getElementById('icon-ringkasan');

                let fotoUrl = null;

                function updateRingkasan() {
                    ringkasanNama.textContent = nama.value.trim() || 'Nama Produk';
                    ringkasanKode.textContent = 'Kode: ' + (kode.value.trim() || '-');

                    const nilaiHarga = Number(harga.value) || 0;
                    ringkasanHarga.textContent = new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        maximumFractionDigits: 0
                    }).format(nilaiHarga);

                    ringkasanStok.textContent = (stok.value || '0') + ' unit';

                    const lengkap =
                        nama.value.trim() !== '' &&
                        kode.value.trim() !== '' &&
                        harga.value !== '' &&
                        stok.value !== '' &&
                        foto.files.length > 0;

                    ringkasanStatus.textContent = lengkap ? 'Siap disimpan' : 'Belum lengkap';
                    ringkasanStatus.className = lengkap ?
                        'badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2' :
                        'badge bg-secondary bg-opacity-10 text-secondary rounded-pill px-3 py-2';
                }

                [nama, kode, harga, stok].forEach(function(input) {
                    input.addEventListener('input', updateRingkasan);
                });

                foto.addEventListener('change', function() {
                    const file = foto.files[0];

                    if (fotoUrl) {
                        URL.revokeObjectURL(fotoUrl);
                        fotoUrl = null;
                    }

                    if (file && file.type.startsWith('image/')) {
                        fotoUrl = URL.createObjectURL(file);

                        previewFoto.src = fotoUrl;
                        fotoRingkasan.src = fotoUrl;

                        previewContainer.classList.remove('d-none');
                        fotoRingkasan.classList.remove('d-none');
                        iconRingkasan.classList.add('d-none');
                    } else {
                        previewFoto.removeAttribute('src');
                        fotoRingkasan.removeAttribute('src');

                        previewContainer.classList.add('d-none');
                        fotoRingkasan.classList.add('d-none');
                        iconRingkasan.classList.remove('d-none');
                    }

                    updateRingkasan();
                });

                document.querySelector('form').addEventListener('reset', function() {
                    setTimeout(function() {
                        if (fotoUrl) {
                            URL.revokeObjectURL(fotoUrl);
                            fotoUrl = null;
                        }

                        previewFoto.removeAttribute('src');
                        fotoRingkasan.removeAttribute('src');

                        previewContainer.classList.add('d-none');
                        fotoRingkasan.classList.add('d-none');
                        iconRingkasan.classList.remove('d-none');

                        updateRingkasan();
                    }, 0);
                });

                updateRingkasan();
            });
        </script>
    @endpush
@endsection
