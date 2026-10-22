@extends('landing.layout')

@section('content')
    {{ view('landing.hero') }}

    <!-- ============================================
                                                                                FEATURED POST
                                                                            ============================================ -->
    <section class="section-pad bg-white pt-0">

        <div class="container">

            <a href="#" class="text-decoration-none d-block" data-aos="fade-up">
                <div class="featured-post">
                    <div class="fp-img">
                        <img src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?w=900&h=700&fit=crop&auto=format"
                            alt="Volunteers distributing well-building supplies in a village">
                        <span class="fp-tag">Impact Report</span>
                    </div>
                    <div class="fp-body">
                        <div class="fp-meta">
                            <span><i class="bi bi-calendar3"></i> Jul 28, 2026</span>
                            <span><i class="bi bi-clock"></i> 6 min read</span>
                            <span><i class="bi bi-person"></i> Priya Nair</span>
                        </div>
                        <h2>Twelve wells, one dry season, and the villages that didn't wait for rain</h2>
                        <p class="text-muted">A season-by-season look at how the Wells for 12 Villages campaign moved from
                            first survey to first clean pour &mdash; with the disbursement records behind every rupee.</p>
                        <a href="post.html"><span class="fp-link">Read the full story <i
                                    class="bi bi-arrow-right"></i></span></a>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- ============================================
                                                                            BLOG GRID
                                                                        ============================================ -->
    <section class="section-pad pt-0" id="posts">
        <div class="container">

            <div class="row g-4">

                @foreach ($blogs as $item)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up">
                        <a href="#" class="text-decoration-none">
                            <div class="blog-card">
                                <div class="bc-img">
                                    <img src="{{ asset('storage') }}/{{ $item->foto }}"
                                        alt="Children eating a school lunch">
                                    <span class="bc-tag">{{ $item->kategori }}</span>
                                </div>
                                <div class="bc-body">
                                    <div class="bc-meta"><span><i class="bi bi-calendar3"></i>
                                            {{ Carbon\Carbon::parse($item->tanggal_publikasi)->locale('id')->translatedFormat('l, d F Y H:i') }}</span><span><i
                                                class="bi bi-clock"></i>
                                            {{ Carbon\Carbon::parse($item->tanggal_publikasi)->diffForHumans() }}</span>
                                    </div>
                                    <h5>{{ $item->judul }}</h5>
                                    <p>{{ $item->ringkasan }}</p>
                                    <a href="{{ url('/blogs') }}/{{ $item->slug }}"><span class="bc-link">Baca
                                            Selengkapnya <i class="bi bi-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach


            </div>

            {{ $blogs->links() }}


        </div>
    </section>
@endsection
