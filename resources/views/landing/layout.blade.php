<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM Tempe Batrem Jaya</title>
    <meta name="description"
        content="Hopewell is a transparent, donor-first charity connecting givers directly to verified causes worldwide.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Nunito+Sans:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="{{ asset('/assets-landing/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('/assets-landing/style.css') }}" rel="stylesheet" />

    <link href="{{ asset('/assets-landing/costum.css') }}" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="{{ asset('/assets-landing/images/Logo.png') }}">

</head>

<body>

    <!-- ============================================
     PRELOADER
============================================ -->
    <div id="preloader" aria-hidden="true">
        <div class="preload-ring"><i class="bi bi-heart-fill preload-heart"></i></div>
        <div class="preload-text">LOADING HOPE&hellip;</div>
    </div>

    <!-- ============================================
     NAVBAR
============================================ -->
    {{ view('landing.navbar') }}

    <!-- ============================================
     HERO
============================================ -->
    {{-- {{ view('landing.hero') }} --}}


    <!-- ============================================
     IMPACT STATS
============================================ -->
    {{-- {{ view('landing.impact') }} --}}

    <!-- ============================================
     ABOUT
============================================ -->
    {{-- {{ view('landing.about') }} --}}

    <!-- ============================================
     CAUSES
============================================ -->
    {{-- {{ view('landing.causes') }} --}}

    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}
    <!-- ============================================
     WHY CHOOSE US
============================================ -->
    {{-- {{ view('landing.why') }} --}}

    <!-- ============================================
     HOW IT WORKS
============================================ -->
    {{-- {{ view('landing.how') }} --}}

    <!-- ============================================
     VOLUNTEERS
============================================ -->
    {{-- {{ view('landing.volunteers') }} --}}

    <!-- ============================================
     TESTIMONIALS
============================================ -->
    {{-- {{ view('landing.testimonials') }} --}}

    <!-- ============================================
     CTA BANNER
============================================ -->
    {{-- {{ view('landing.cta') }} --}}

    <!-- ============================================
     CONTACT
============================================ -->
    {{-- {{ view('landing.contact') }} --}}

    <!-- ============================================
     FEATURED POST
============================================ -->

    {{-- {{ view('landing.blog') }} --}}

    <!-- ============================================
     FOOTER
============================================ -->
    {{ view('landing.footer') }}

    <!-- ============================================
     MOBILE STICKY DONATE BAR
============================================ -->
    <div class="mobile-donate-bar">
        <a href="#causes" class="btn-hw-primary">Donate Now <i class="bi bi-heart-fill"></i></a>
    </div>

    <!-- ============================================
     SCROLL TO TOP
============================================ -->
    <div id="scrollTop" role="button" aria-label="Scroll to top" tabindex="0">
        <svg viewBox="0 0 52 52">
            <circle cx="26" cy="26" r="23"></circle>
            <circle class="progress" cx="26" cy="26" r="23"></circle>
        </svg>
        <i class="bi bi-arrow-up"></i>
    </div>

    <!-- ============================================
     WATCH STORY MODAL (demo)
============================================ -->
    <div class="modal fade" id="storyModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content" style="border-radius:20px;border:none;">
                <div class="modal-header border-0">
                    <h5 class="modal-title font-display fw-bold">Our Story</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-4">
                    <div class="ratio ratio-16x9 rounded-4 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=900&h=500&fit=crop&auto=format"
                            alt="Hopewell story preview" style="object-fit:cover;">
                    </div>
                    <p class="text-muted mt-3 mb-0">Video placeholder &mdash; connect your hosted story video here.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle -->
    <script src="{{ asset('/assets-landing/bootstrap.bundle.min.js') }}"></script>
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('/assets-landing/script.js') }}"></script>

</body>

</html>
