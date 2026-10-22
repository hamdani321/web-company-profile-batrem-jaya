@extends('admin.layout')

@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex flex-wrap justify-deskripsi-between align-items-center gap-2">
                    <div>
                        <h4 class="mb-1">Tambah Blog</h4>
                        <p class="text-muted mb-0 small">
                            Tambahkan artikel atau berita baru ke dalam website.
                        </p>
                    </div>

                    <a href="{{ url('/data-blog') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left me-1"></i>
                        Kembali
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('data-blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row g-4">
                            {{-- Informasi Blog --}}
                            <div class="col-12">
                                <h6 class="fw-semibold mb-3">
                                    <i class="bi bi-file-earmark-text me-2"></i>
                                    Informasi Blog
                                </h6>
                                <hr class="mt-0">
                            </div>

                            {{-- Judul --}}
                            <div class="col-12">
                                <label for="title" class="form-label">
                                    Judul Blog <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                    id="title" name="judul" value="{{ $blog->judul }}"
                                    placeholder="Masukkan judul blog">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Kategori --}}
                            <div class="col-md-12">
                                <label for="kategori" class="form-label">
                                    Kategori <span class="text-danger">*</span>
                                </label>
                                <select class="form-select @error('kategori') is-invalid @enderror" id="category_id"
                                    name="kategori">
                                    <option>Pilih kategori</option>
                                    <option value="Bisnis" @selected($blog->kategori == 'Bisnis')>Bisnis</option>
                                    <option value="Berita" @selected($blog->kategori == 'Berita')>Berita</option>
                                    <option value="Umum" @selected($blog->kategori == 'Umum')>Umum</option>
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Ringkasan --}}
                            <div class="col-12">
                                <label for="ringkasan" class="form-label">Ringkasan</label>
                                <textarea class="form-control @error('ringkasan') is-invalid @enderror" id="ringkasan" name="ringkasan" rows="3"
                                    placeholder="Tuliskan ringkasan singkat artikel...">{{ $blog->ringkasan }}</textarea>
                                <div class="form-text">
                                    Ringkasan singkat yang ditampilkan sebelum pembaca membuka artikel.
                                </div>
                                @error('ringkasan')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Isi Blog --}}
                            <div class="col-12">
                                <label for="deskripsi" class="form-label">
                                    Isi Blog <span class="text-danger">*</span>
                                </label>
                                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="10"
                                    placeholder="Tuliskan isi artikel di sini...">{{ $blog->deskripsi }}</textarea>
                                @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Media Blog --}}
                            <div class="col-12 mt-5">
                                <h6 class="fw-semibold mb-3">
                                    <i class="bi bi-image me-2"></i>
                                    Media Blog
                                </h6>
                                <hr class="mt-0">
                            </div>

                            {{-- foto --}}
                            <div class="col-md-12">
                                <label for="foto" class="form-label">Gambar Thumbnail <span
                                        class="text-danger">*</span></label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                    id="foto" name="foto" accept="image/*">
                                <div class="form-text">
                                    Gunakan gambar yang representatif untuk artikel.
                                </div>
                                @error('foto')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <img src="{{ asset('storage') }}/{{ $blog->foto }}" alt="">
                            </div>



                            {{-- Pengaturan Publikasi --}}
                            <div class="col-12 mt-5">
                                <h6 class="fw-semibold mb-3">
                                    <i class="bi bi-gear me-2"></i>
                                    Pengaturan Publikasi
                                </h6>
                                <hr class="mt-0">
                            </div>

                            {{-- Status --}}
                            <div class="col-md-6">
                                <label for="status" class="form-label">
                                    Status <span class="text-danger">*</span>
                                </label>
                                <select class="form-select @error('status') is-invalid @enderror" id="status"
                                    name="status">
                                    <option selected>Pilih Status</option>
                                    <option value="draft" @selected($blog->status === 'Draft')>
                                        Draft
                                    </option>
                                    <option value="published" @selected($blog->status === 'Published')>
                                        Published
                                    </option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Tanggal Publikasi --}}
                            <div class="col-md-6">
                                <label for="tanggal_publikasi" class="form-label">Tanggal Publikasi <span
                                        class="text-danger">*</span></label>
                                <input type="datetime-local"
                                    class="form-control @error('tanggal_publikasi') is-invalid @enderror"
                                    id="tanggal_publikasi" name="tanggal_publikasi" value="{{ $blog->tanggal_publikasi }}">
                                @error('tanggal_publikasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Tombol Aksi --}}
                            <div class="col-12">
                                <hr>
                                <div class="d-flex flex-wrap justify-deskripsi-end gap-2">
                                    <a href="{{ url('/data-blogs') }}" class="btn btn-light border">
                                        Batal
                                    </a>
                                    <button type="reset" class="btn btn-outline-secondary">
                                        <i class="bi bi-arrow-counterclockwise me-1"></i>
                                        Reset
                                    </button>
                                    <button type="submit" class="btn btn-success">
                                        <i class="bi bi-save me-1"></i>
                                        Simpan Blog
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
