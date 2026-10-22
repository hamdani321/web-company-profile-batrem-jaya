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

                    <a href="{{ url('/data-blogs') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-arrow-left me-1"></i>
                        Kembali
                    </a>
                </div>

                <div class="card-body">
                    <form action="{{ route('data-blogs.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

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
                                    id="title" name="judul" value="{{ old('judul') }}"
                                    placeholder="Masukkan judul blog">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Slug --}}
                            {{-- <div class="col-md-6">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                    id="slug" name="slug" value="{{ old('slug') }}"
                                    placeholder="contoh-judul-blog">
                                <div class="form-text">
                                    URL artikel. Bisa dikosongkan jika dibuat otomatis.
                                </div>
                                @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> --}}

                            {{-- Kategori --}}
                            <div class="col-md-12">
                                <label for="kategori" class="form-label">
                                    Kategori <span class="text-danger">*</span>
                                </label>
                                <select class="form-select @error('kategori') is-invalid @enderror" id="category_id"
                                    name="kategori">
                                    <option>Pilih kategori</option>
                                    <option value="Bisnis">Bisnis</option>
                                    <option value="Berita">Berita</option>
                                    <option value="Umum">Umum</option>
                                </select>
                                @error('kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Ringkasan --}}
                            <div class="col-12">
                                <label for="ringkasan" class="form-label">Ringkasan</label>
                                <textarea class="form-control @error('ringkasan') is-invalid @enderror" id="ringkasan" name="ringkasan" rows="3"
                                    placeholder="Tuliskan ringkasan singkat artikel...">{{ old('ringkasan') }}</textarea>
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
                                    placeholder="Tuliskan isi artikel di sini...">{{ old('deskripsi') }}</textarea>
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
                            </div>

                            {{-- Alt Image --}}
                            {{-- <div class="col-md-5">
                                <label for="foto_alt" class="form-label">Deskripsi Gambar</label>
                                <input type="text" class="form-control @error('foto_alt') is-invalid @enderror"
                                    id="foto_alt" name="foto_alt" value="{{ old('foto_alt') }}"
                                    placeholder="Deskripsi singkat gambar">
                                @error('foto_alt')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> --}}

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
                                    <option value="draft" @selected(old('status') === 'draft')>
                                        Draft
                                    </option>
                                    <option value="published" @selected(old('status') === 'published')>
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
                                    id="tanggal_publikasi" name="tanggal_publikasi" value="{{ old('tanggal_publikasi') }}">
                                @error('tanggal_publikasi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Featured --}}
                            {{-- <div class="col-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="is_featured"
                                        name="is_featured" value="1" @checked(old('is_featured'))>
                                    <label class="form-check-label fw-medium" for="is_featured">
                                        Jadikan artikel unggulan
                                    </label>
                                    <div class="form-text">
                                        Artikel unggulan dapat ditampilkan pada bagian khusus di halaman website.
                                    </div>
                                </div>
                            </div> --}}

                            {{-- Tombol Aksi --}}
                            <div class="col-12">
                                <hr>
                                <div class="d-flex flex-wrap justify-deskripsi-end gap-2">
                                    <a href="{{ url('/data-blog') }}" class="btn btn-light border">
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

    {{-- @push('script')
        <script>
            $('#summernote').summernote({
                placeholder: 'Hello stand alone ui',
                tabsize: 2,
                height: 120,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'underline', 'clear']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        </script>
    @endpush --}}
@endsection
