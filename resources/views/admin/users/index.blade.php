@extends('admin.layout')


@section('content')
    <div class="row g-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                {{-- Header --}}
                <div class="card-header bg-white border-bottom py-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div>
                            <h4 class="mb-1 fw-bold">Data Users</h4>
                            <p class="text-secondary small mb-0">
                                Kelola data pengguna aplikasi.
                            </p>
                        </div>

                        <a href="{{ route('users.create') }}" class="btn btn-primary">
                            <i class="bi bi-person-plus me-1"></i>
                            Tambah User
                        </a>
                    </div>
                </div>

                <div class="card-body">


                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Tabel Users --}}
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="py-3 text-secondary small" style="width: 40%;">
                                        NAMA
                                    </th>
                                    <th class="py-3 text-secondary small">
                                        EMAIL
                                    </th>
                                    <th class="py-3 text-secondary small text-center" style="width: 150px;">
                                        AKSI
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        {{-- Nama --}}
                                        <td class="py-3">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center fw-bold flex-shrink-0"
                                                    style="width: 42px; height: 42px;">
                                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                                </div>

                                                <div class="fw-semibold text-dark">
                                                    {{ $user->name }}
                                                </div>
                                            </div>
                                        </td>

                                        {{-- Email --}}
                                        <td class="py-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <i class="bi bi-envelope text-secondary"></i>
                                                <span>{{ $user->email }}</span>
                                            </div>
                                        </td>

                                        {{-- Aksi --}}
                                        <td class="py-3">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('users.edit', $user->id) }}"
                                                    class="btn btn-sm btn-light border" title="Edit User">
                                                    <i class="bi bi-pencil-square text-primary"></i>
                                                </a>

                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                    onsubmit="return confirm('Apakah kamu yakin ingin menghapus pengguna ini?')">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-sm btn-light border"
                                                        title="Hapus User">
                                                        <i class="bi bi-trash text-danger"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-5">
                                            <div class="mb-3">
                                                <i class="bi bi-people display-4 text-secondary"></i>
                                            </div>

                                            <h6 class="fw-semibold">Data User Tidak Ditemukan</h6>

                                            <p class="text-secondary small mb-0">
                                                Belum ada pengguna atau data tidak sesuai dengan pencarian.
                                            </p>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{-- Footer dan Pagination --}}
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mt-4">

                        <div>
                            {{ $users->withQueryString()->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
