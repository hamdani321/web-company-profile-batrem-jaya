@extends('landing.layout')

@section('content')
    {{ view('landing.hero') }}

    <section class="section-pad pt-0" id="produk">
        <div class="container">

            {{-- Header Section --}}
            <div class="d-flex flex-column flex-md-row
                    justify-content-between align-items-md-end gap-3 mb-5"
                data-aos="fade-up">

                <div>
                    <span
                        class="badge rounded-pill bg-primary-subtle text-primary
                             px-3 py-2 mb-3">
                        <i class="bi bi-grid me-1"></i> Katalog Produk
                    </span>

                    <h2 class="fw-bold mb-2">Temukan Produk Pilihan</h2>

                    <p class="text-secondary mb-0">
                        Jelajahi koleksi produk kami dengan kualitas dan harga terbaik.
                    </p>
                </div>

                <div class="text-secondary small">
                    <i class="bi bi-box-seam me-1"></i>
                    {{ $produk->count() }} produk tersedia
                </div>
            </div>

            {{-- Daftar Produk --}}
            <div class="row g-4">

                @forelse ($produk as $item)
                    <div class="col-12 col-sm-6 col-lg-4 col-xl-3" data-aos="fade-up">

                        <div class="card product-card h-100 border-0 shadow-sm">

                            {{-- Gambar Produk --}}
                            <div class="product-image-wrapper position-relative">

                                <img src="{{ $item->foto ? asset('storage/' . $item->foto) : 'https://placehold.co/600x450/f1f5f9/64748b?text=Produk' }}"
                                    class="card-img-top product-image" alt="{{ $item->nama }}" loading="lazy">

                                {{-- Status Produk --}}
                                <span
                                    class="badge rounded-pill
                                {{ $item->status === 'aktif' ? 'bg-success' : 'bg-secondary' }}
                                position-absolute top-0 end-0 m-3 px-3 py-2">
                                    <i class="bi bi-circle-fill me-1" style="font-size: 7px;"></i>
                                    {{ ucfirst($item->status) }}
                                </span>

                                {{-- Kode Produk --}}
                                <span
                                    class="badge bg-white text-dark border
                                         position-absolute bottom-0 start-0 m-3">
                                    <i class="bi bi-upc-scan me-1"></i>
                                    {{ $item->kode }}
                                </span>
                            </div>

                            {{-- Informasi Produk --}}
                            <div class="card-body d-flex flex-column p-4">

                                <h5 class="fw-bold mb-2 product-title">
                                    {{ $item->nama }}
                                </h5>

                                <p class="text-secondary small mb-3 product-description">
                                    {{ \Illuminate\Support\Str::limit($item->deskripsi ?? 'Belum ada deskripsi produk.', 90) }}
                                </p>

                                <div
                                    class="d-flex align-items-center
                                        justify-content-between mb-3">

                                    <div>
                                        <small class="text-secondary d-block mb-1">
                                            Harga produk
                                        </small>

                                        <span class="fs-5 fw-bold text-primary">
                                            Rp{{ number_format($item->harga, 0, ',', '.') }}
                                        </span>
                                    </div>

                                    <div class="text-end">
                                        <small class="text-secondary d-block mb-1">
                                            Stok
                                        </small>

                                        <span
                                            class="fw-semibold
                                        {{ $item->stok > 0 ? 'text-success' : 'text-danger' }}">
                                            <i class="bi bi-box-seam me-1"></i>
                                            {{ $item->stok }} unit
                                        </span>
                                    </div>
                                </div>

                                {{-- Tombol Detail --}}
                                <a href="{{ url('/product') }}/{{ $item->id }}"
                                    class="btn btn-outline-primary w-100 mt-auto
                                      rounded-3 fw-semibold mb-2">
                                    Lihat Detail
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>

                                <a href="https://wa.me/6285716340128?text=Halo, saya ingin bertanya tentang produk {{ $item->nama }} yang harga Rp. {{ $item->harga }}"
                                    class="btn btn-outline-success w-100 mt-auto
                                      rounded-3 fw-semibold"
                                    target="_blank">
                                    Order Via WhatsApp
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>


                            </div>
                        </div>

                    </div>
                @empty
                    <div class="col-12">
                        <div class="text-center bg-light rounded-4 p-5">
                            <div class="mb-3">
                                <i class="bi bi-box-seam display-3 text-secondary"></i>
                            </div>

                            <h5 class="fw-bold">Produk Belum Tersedia</h5>

                            <p class="text-secondary mb-0">
                                Saat ini belum ada produk yang dapat ditampilkan.
                                Silakan kunjungi kembali nanti.
                            </p>
                        </div>
                    </div>
                @endforelse

            </div>

            {{-- Pagination --}}
            {{-- @if ($produk->hasPages())
                <div class="d-flex justify-content-center mt-5">
                    {{ $produk->links() }}
                </div>
            @endif --}}

        </div>
    </section>
@endsection
