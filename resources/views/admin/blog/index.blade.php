@extends('admin.layout')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Blog</h1>
            {{-- <p class="page-subtitle">.</p> --}}
        </div>
        <button class="btn-date-picker" type="button" id="date-picker-trigger">
            <i class="bi bi-calendar4-event"></i>
            <span id="selected-date-range">January 12, 2026 - January 23, 2026</span>
            <i class="bi bi-chevron-down ms-1"></i>
        </button>
    </div>

    <div class="row g-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4">

                {{-- Card Header --}}
                <div class="card-header bg-white border-0 p-4">
                    <div
                        class="d-flex flex-wrap justify-content-between
                            align-items-center gap-3">
                        <div>
                            <h4 class="fw-bold text-dark mb-1">
                                Data Blog
                            </h4>
                            <p class="text-secondary small mb-0">
                                Kelola artikel, kategori, dan publikasi blog.
                            </p>
                        </div>

                        <a href="{{ url('/data-blogs/create') }}" class="btn btn-success rounded-3 px-3">
                            <i class="bi bi-plus-lg me-2"></i>
                            Tambah Blog
                        </a>
                    </div>
                </div>

                {{-- Card Body --}}
                <div class="card-body p-2 pt-2">

                    {{-- Search & Filter --}}
                    <div class="row g-3 mb-4">
                        <div class="col-lg-5 col-md-6">
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    <i class="bi bi-search text-secondary"></i>
                                </span>
                                <input type="search" class="form-control bg-light border-start-0"
                                    placeholder="Cari judul blog...">
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3">
                            <select class="form-select">
                                <option value="">Semua Status</option>
                                <option value="published">Published</option>
                                <option value="draft">Draft</option>
                            </select>
                        </div>

                        <div class="col-lg-4 col-md-3">
                            <div class="d-flex justify-content-md-end gap-2">
                                <button type="button" class="btn btn-outline-secondary">
                                    <i class="bi bi-funnel me-1"></i>
                                    Filter
                                </button>

                                <button type="button" class="btn btn-outline-secondary" title="Reset">
                                    <i class="bi bi-arrow-counterclockwise"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    @if (session('success'))
                        <div class="alert-custom alert-custom-success">
                            <i class="bi bi-check-circle-fill alert-custom-icon"></i>
                            <div class="alert-custom-content">
                                <strong>Sukses :</strong> {{ $message }}
                            </div>
                            <button class="alert-custom-close" type="button" aria-label="Close"
                                onclick="this.parentElement.remove();">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </div>
                    @endif
                    {{-- Table --}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="py-3 ps-3">Artikel</th>
                                    <th class="py-3">Kategori</th>
                                    <th class="py-3">Penulis</th>
                                    <th class="py-3">Tanggal</th>
                                    <th class="py-3">Status</th>
                                    <th class="py-3 text-center">Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                                {{-- Blog 1 --}}
                                @foreach ($blogs as $item)
                                    <tr>
                                        <td class="ps-3 py-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="{{ asset('storage') }}/{{ $item->foto }}"
                                                    alt="Teknologi digital" class="rounded-3 object-fit-cover"
                                                    width="75" height="60">

                                                <div>
                                                    <h6 class="fw-semibold text-dark mb-1">
                                                        {{ $item->judul }}
                                                    </h6>
                                                    <p class="text-secondary small mb-0">
                                                        {{ $item->ringkasan }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            <span class="badge bg-primary-subtle text-primary rounded-pill px-3 py-2">
                                                {{ $item->kategori }}
                                            </span>
                                        </td>

                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <span
                                                    class="rounded-circle bg-success-subtle
                                                     text-success d-inline-flex
                                                     align-items-center justify-content-center
                                                     fw-bold"
                                                    style="width: 34px; height: 34px;">
                                                    A
                                                </span>
                                                <span>Admin</span>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="small fw-medium">
                                                {{ \Carbon\Carbon::parse($item->tanggal_publikasi)->locale('id')->translatedFormat('d M Y') }}
                                            </div>
                                            <div class="text-secondary small">
                                                {{ \Carbon\Carbon::parse($item->tanggal_publikasi)->timezone('Asia/Jakarta')->format('H:i') }}
                                                WIB
                                            </div>

                                        </td>

                                        <td>
                                            <span @class([
                                                'badge bg-success-subtle text-success rounded-pill px-3 py-2' =>
                                                    $item->status == 'Published',
                                                'badge bg-danger-subtle text-danger rounded-pill px-3 py-2' =>
                                                    $item->status == 'Draft',
                                            ])>
                                                <i @class([
                                                    'bi bi-x-circle me-1' => $item->status == 'Draft',
                                                    'bi bi-check-circle-fill me-1' => $item->status,
                                                ])></i>

                                                {{ $item->status }}
                                            </span>

                                        </td>

                                        <td>
                                            <div class="d-flex justify-content-center gap-2">


                                                <a href="{{ url('/data-blogs') }}/{{ $item->id }}/edit"
                                                    class="btn btn-sm btn-outline-primary" title="Edit">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>

                                                <button type="button" onclick="OnDeleteBlog({{ $item->id }})"
                                                    class="btn btn-sm btn-outline-danger" title="Hapus">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="mt-2">
                        {{ $blogs->links() }}
                    </div>
                    {{-- Pagination --}}
                    {{-- <div
                        class="d-flex flex-wrap justify-content-between
                            align-items-center gap-3 mt-4">
                        <small class="text-secondary">
                            Menampilkan 1–3 dari 15 data
                        </small>

                        <nav aria-label="Navigasi halaman blog">
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#">
                                        <i class="bi bi-chevron-left"></i>
                                    </a>
                                </li>

                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>

                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="bi bi-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            function OnDeleteBlog(id) {

                Swal.fire({
                    title: "Hapus Blog?",
                    showCancelButton: true,
                    confirmButtonText: "Delete",
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "DELETE",
                            url: `{{ url('/data-blogs') }}/${id}`,
                            data: {},
                            dataType: "json",
                            success: function(response) {
                                Swal.fire({
                                    title: response.message,
                                    icon: "success",
                                    draggable: true
                                }).then(() => {
                                    window.location.reload();
                                });

                            },
                            error: function(error) {
                                console.log("Error delete");

                            }
                        });
                    }
                });


            }
        </script>
    @endpush
@endsection
