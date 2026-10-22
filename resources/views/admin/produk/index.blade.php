@extends('admin.layout')

@section('content')
    <div class="page-header">
        <div>
            <h1 class="page-title">Produk</h1>
            <p class="page-subtitle">Manajemen Data Produk.</p>
        </div>
        {{-- <button class="btn-date-picker" type="button" id="date-picker-trigger">
            <i class="bi bi-calendar4-event"></i>
            <span id="selected-date-range">January 12, 2026 - January 23, 2026</span>
            <i class="bi bi-chevron-down ms-1"></i>
        </button> --}}
    </div>

    <div class="row g-4">
        <div class="col-12">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                <!-- Card Header -->
                <div class="card-header bg-white border-bottom px-4 py-4">
                    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <div>
                            <h4 class="fw-bold text-dark mb-1">
                                <i class="bi bi-box-seam text-primary me-2"></i>
                                Data Produk
                            </h4>
                            <p class="text-muted small mb-0">
                                Kelola dan pantau seluruh data produk Anda.
                            </p>
                        </div>

                        <a href="{{ route('data-product.create') }}" class="btn btn-primary rounded-3 px-4 py-2 shadow-sm">
                            <i class="bi bi-plus-lg me-2"></i>
                            Tambah Produk
                        </a>
                    </div>
                </div>

                <!-- Card Body -->
                <div class="card-body p-4">

                    <!-- Summary -->
                    {{-- <div class="row g-3 mb-4">
                        <div class="col-12 col-md-4">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-3 p-3">
                                        <i class="bi bi-box-seam fs-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted small">Total Produk</div>
                                        <h5 class="fw-bold mb-0">128</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-success bg-opacity-10 text-success rounded-3 p-3">
                                        <i class="bi bi-check-circle fs-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted small">Produk Aktif</div>
                                        <h5 class="fw-bold mb-0">115</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="bg-warning bg-opacity-10 text-warning rounded-3 p-3">
                                        <i class="bi bi-exclamation-triangle fs-4"></i>
                                    </div>
                                    <div>
                                        <div class="text-muted small">Stok Menipis</div>
                                        <h5 class="fw-bold mb-0">8</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

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



                    {{-- Basic Table --}}


                    <!-- START: Page Header Banner -->
                    <div class="page-header">
                        <div>
                            <h1 class="page-title">Basic Tables</h1>
                            <p class="page-subtitle">Highly customizable, responsive tabular data component templates.</p>
                        </div>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html"
                                        class="text-decoration-none text-muted-green">Home</a></li>
                                <li class="breadcrumb-item text-muted-green">Components</li>
                                <li class="breadcrumb-item active text-main" aria-current="page">Basic Tables</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- END: Page Header Banner -->

                    <!-- START: Basic Table Card Container -->
                    <div class="table-card-custom">
                        <!-- Header Controls -->
                        <div class="table-header-control">
                            <!-- Search bar -->
                            <div class="table-search-box">
                                <i class="bi bi-search table-search-icon"></i>
                                <input type="text" class="table-search-input" placeholder="Search orders or products...">
                            </div>
                            <!-- Action buttons / Filter options -->
                            <div class="table-filter-group">
                                <div class="dropdown">
                                    <button class="btn-table-action dropdown-toggle" type="button"
                                        id="dropdownFilterStatus" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-funnel"></i> Status Filter
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownFilterStatus">
                                        <li><a class="dropdown-item" href="#">All Statuses</a></li>
                                        <li><a class="dropdown-item" href="#">Paid / Success</a></li>
                                        <li><a class="dropdown-item" href="#">Processing</a></li>
                                        <li><a class="dropdown-item" href="#">Cancelled / Failed</a></li>
                                    </ul>
                                </div>
                                <button class="btn-table-action" type="button">
                                    <i class="bi bi-file-earmark-arrow-down"></i> Export
                                </button>
                            </div>
                        </div>

                        <!-- Responsive Table Wrapper -->
                        <div class="table-responsive">
                            <table class="table-custom">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>PRODUK</th>
                                        <th>HARGA</th>
                                        <th>STOK</th>
                                        <th class="text-center">AKSI</th>
                                        {{-- <th class="text-center">AKSI</th> --}}
                                    </tr>
                                </thead>

                                {{-- <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer</th>
                                        <th>Product Info</th>
                                        <th>Category</th>
                                        <th>Amount</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead> --}}
                                <tbody>

                                    @foreach ($produk as $index => $item)
                                        <!-- Row 1 -->
                                        <tr>
                                            <td class="table-order-id">{{ $index + 1 }}</td>
                                            <td>
                                                <div class="table-user-cell">
                                                    <img src="{{ asset('storage') }}/{{ $item->foto }}" alt="Eleanor Pena"
                                                        class="table-user-avatar"
                                                        onerror="this.src='assets/images/avatar.png'">
                                                    <div>
                                                        <div class="table-user-name">{{ $item->nama }}</div>
                                                        {{-- <div class="table-user-sub">eleanor.pena@example.com</div> --}}
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="table-amount">{{ $item->harga }}</td>
                                            <td>
                                                <span @class([
                                                    'badge-table',
                                                    'success' => $item->stok >= 11,
                                                    'pending' => $item->stok <= 10 && $item->stok >= 6,
                                                    'failed' => $item->stok < 5,
                                                ])>{{ $item->stok }}</span>

                                                {{-- {{ $item->stok }} --}}

                                            </td>
                                            {{-- <td><span class="badge-table success">Paid</span></td> --}}
                                            <td>
                                                <div class="d-flex justify-content-center gap-1">
                                                    <a href="{{ route('data-product.show', ['data_product' => $item->id]) }}"
                                                        class="table-btn-action" title="View details"><i
                                                            class="bi bi-eye"></i></a>
                                                    <a href="{{ route('data-product.edit', ['data_product' => $item->id]) }}"
                                                        class="table-btn-action" title="Edit row"><i
                                                            class="bi bi-pencil"></i></a>
                                                    <button onclick="OnDelete({{ $item->id }})" type="button"
                                                        class="table-btn-action delete" title="Delete row"><i
                                                            class="bi bi-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <!-- Footer Controls / Pagination -->

                        <div class="table-footer-control">

                            {{ $produk->links() }}
                        </div>


                    </div>
                    <!-- END: Basic Table Card Container -->


                    {{-- End Basic Table --}}


                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            function OnDelete(id) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('data-product.destroy', ['data_product' => $item->id]) }}",
                    data: {},
                    dataType: "json",
                    success: function(response) {
                        console.log(response);
                    },

                    error: function(error) {
                        console.log(error);

                    }
                });
            }
        </script>
    @endpush
@endsection
