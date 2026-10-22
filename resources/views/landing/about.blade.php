 @extends('landing.layout')

 @section('content')
     <section class="section-pad" id="about">
         <div class="container contact-card about-card">
             <div class="row align-items-center g-5">
                 <div class="col-lg-6" data-aos="fade-right">
                     <div class="about-collage">
                         <div class="about-badge">
                             <div class="ab-ring">
                                 <span>UMKM</span>
                             </div>
                             <div>
                                 <div class="fw-bold font-display" style="font-size:.9rem;">
                                     Tempe Berkualitas
                                 </div>
                                 <div class="text-muted" style="font-size:.78rem;">
                                     Lokal &middot; Pilihan Keluarga
                                 </div>
                             </div>
                         </div>

                         <div class="img-a">
                             <img src="https://images.unsplash.com/photo-1515543904379-3d757afe72e4?w=800&h=650&fit=crop&auto=format"
                                 alt="Bahan makanan segar untuk produksi tempe" loading="lazy">
                         </div>

                         <div class="img-b">
                             <img src="https://images.unsplash.com/photo-1547592180-85f173990554?w=500&h=500&fit=crop&auto=format"
                                 alt="Hidangan makanan sehat" loading="lazy">
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-6" data-aos="fade-left">
                     <span class="eyebrow">
                         <i class="bi bi-shop"></i> Tentang Kami
                     </span>

                     <h2 class="section-title mt-3 mb-3" style="font-size:clamp(1.7rem,3vw,2.4rem);">
                         Tempe Berkualitas, Pilihan Sehat untuk Keluarga Indonesia.
                     </h2>

                     <p class="section-sub">
                         Tempe Betram Jaya merupakan usaha mikro, kecil, dan menengah
                         (UMKM) yang bergerak di bidang produksi tempe. Kami berkomitmen
                         menghadirkan tempe sebagai makanan tradisional Indonesia yang
                         lezat, bergizi, dan dapat dinikmati oleh berbagai kalangan.
                         Melalui proses produksi yang memperhatikan kualitas bahan
                         baku dan kebersihan, kami berupaya menyediakan produk tempe
                         yang baik untuk kebutuhan sehari-hari masyarakat.
                     </p>

                     <ul class="about-list mt-3">
                         <li>
                             <span class="ic">
                                 <i class="bi bi-patch-check-fill"></i>
                             </span>
                             <div>
                                 <strong>Mengutamakan Kualitas</strong>
                                 <div class="text-muted small">
                                     Memperhatikan pemilihan bahan baku dan proses
                                     produksi untuk menghasilkan tempe yang berkualitas.
                                 </div>
                             </div>
                         </li>

                         <li>
                             <span class="ic">
                                 <i class="bi bi-shield-check"></i>
                             </span>
                             <div>
                                 <strong>Kebersihan dalam Produksi</strong>
                                 <div class="text-muted small">
                                     Menjadikan kebersihan sebagai bagian penting
                                     dalam proses pembuatan tempe agar produk layak
                                     dikonsumsi.
                                 </div>
                             </div>
                         </li>

                         <li>
                             <span class="ic">
                                 <i class="bi bi-heart-fill"></i>
                             </span>
                             <div>
                                 <strong>Mendukung UMKM Lokal</strong>
                                 <div class="text-muted small">
                                     Berupaya mengembangkan usaha lokal sekaligus
                                     melestarikan tempe sebagai salah satu kekayaan
                                     kuliner Indonesia.
                                 </div>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </section>
 @endsection









 {{-- @extends('landing.layout')

@section('content')
    <section class="section-pad" id="about">
        <div class="container contact-card about-card">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-collage">
                        <div class="about-badge">
                            <div class="ab-ring"><span>13yrs</span></div>
                            <div>
                                <div class="fw-bold font-display" style="font-size:.9rem;">Trusted Since</div>
                                <div class="text-muted" style="font-size:.78rem;">2013 &middot; 40 countries</div>
                            </div>
                        </div>
                        <div class="img-a"><img
                                src="https://images.unsplash.com/photo-1509099836639-18ba1795216d?w=800&h=650&fit=crop&auto=format"
                                alt="Volunteers distributing supplies" loading="lazy"></div>
                        <div class="img-b"><img
                                src="https://images.unsplash.com/photo-1593113630400-ea4288922497?w=500&h=500&fit=crop&auto=format"
                                alt="Child receiving school supplies" loading="lazy"></div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <span class="eyebrow"><i class="bi bi-flag-fill"></i> Our Story</span>
                    <h2 class="section-title mt-3 mb-3" style="font-size:clamp(1.7rem,3vw,2.4rem);">We believe
                        generosity works best when it's traceable.</h2>
                    <p class="section-sub">Hopewell started in a single village kitchen in 2013 and has grown into a
                        donor network spanning 40 countries &mdash; without ever losing sight of the person on the
                        receiving end of a gift.</p>
                    <ul class="about-list mt-3">
                        <li><span class="ic"><i class="bi bi-eye-fill"></i></span>
                            <div><strong>Full transparency</strong>
                                <div class="text-muted small">Track your donation from wallet to warehouse to doorstep.
                                </div>
                            </div>
                        </li>
                        <li><span class="ic"><i class="bi bi-patch-check-fill"></i></span>
                            <div><strong>Verified NGO partners</strong>
                                <div class="text-muted small">Every partner is audited annually by an independent body.
                                </div>
                            </div>
                        </li>
                        <li><span class="ic"><i class="bi bi-globe-americas"></i></span>
                            <div><strong>On-the-ground reach</strong>
                                <div class="text-muted small">Local teams in 40 countries, not a single head office.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection --}}
