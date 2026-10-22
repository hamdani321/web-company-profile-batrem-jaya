@extends('landing.layout')


@section('content')
    <!-- ============================================
            POST HERO
            ============================================ -->
    <header class="post-hero">
        <span class="blob blob-a"></span>
        <div class="container">
            <span class="eyebrow mt-3" data-aos="fade-up" data-aos-delay="80"><i class="bi bi-droplet-fill"></i> Impact Report
                &middot; Clean
                Water</span>
            <h1 class="post-title" data-aos="fade-up" data-aos-delay="120">
                {{ $blog->judul }}
                {{-- Twelve wells, one dry season, and the villages that didn't wait for
                rain --}}
            </h1>

            <div class="post-meta" data-aos="fade-up" data-aos-delay="160">
                <div class="author">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=100&h=100&fit=crop&auto=format"
                        alt="Priya Nair" />
                    <div>
                        <div class="name">{{ $blog->users->name }}</div>
                        <div class="role">{{ $blog->users->name }}</div>
                    </div>
                </div>
                <span class="stat"><i class="bi bi-calendar3"></i>
                    {{ \Carbon\Carbon::parse($blog->tanggal_publikasi)->locale('id')->translatedFormat('d M Y') }}</span>
                <span class="stat"><i class="bi bi-clock"></i>
                    {{ \Carbon\Carbon::parse($blog->tanggal_publikasi)->diffForHumans() }}</span>
                {{-- <span class="stat"><i class="bi bi-chat-left-text"></i> 14 comments</span> --}}
            </div>
        </div>
    </header>

    <!-- ============================================
            COVER IMAGE
            ============================================ -->
    <section class="container">
        <div class="post-cover" data-aos="fade-up">
            <img src="{{ asset('storage') }}/{{ $blog->foto }}"
                alt="Volunteers distributing well-building supplies in a village" />
        </div>
    </section>

    <!-- ============================================
            ARTICLE BODY
            ============================================ -->
    <section class="section-pad bg-white">
        <div class="container">
            <div class="post-body" data-aos="fade-up">

                <p>
                    {{ $blog->deskripsi }}
                </p>
                {{-- <p>
                    In March, the well in Kothapalli ran to mud by mid-morning. Women
                    were walking four kilometers before sunrise to beat the queue at the
                    next village's hand pump &mdash; a routine repeated across twelve
                    districts where the Wells for 12 Villages campaign had promised
                    relief, but hadn't yet broken ground.
                </p>

                <p>
                    Four months later, the campaign has reached 55% of its funding goal
                    and completed survey work in all twelve target villages. This is the
                    story of what actually happens between a donation and a working well
                    &mdash; the part of the process most impact reports skip.
                </p>

                <h3>Step one: the survey nobody sees</h3>
                <p>
                    Before a single rupee reaches a construction crew, a hydrogeology
                    team spends two to three weeks per village testing water tables,
                    checking seasonal rainfall records, and mapping walking distances
                    from existing water sources. It's slow, unglamorous work, and it's
                    also the single biggest factor in whether a well still produces
                    water five years from now.
                </p>

                <div class="post-pullquote">
                    "We've seen wells fail in eighteen months because someone skipped
                    the water table survey to save two weeks. We don't skip it &mdash;
                    ever."
                </div>

                <p>
                    Of the twelve villages surveyed this season, two were flagged as
                    poor sites and redirected to a rainwater harvesting design instead.
                    That's not a delay we report as a setback &mdash; it's the audit
                    process working exactly as intended.
                </p>

                <div class="post-stat-band" data-aos="fade-up">
                    <div>
                        <div class="val">12</div>
                        <div class="lbl">Villages surveyed</div>
                    </div>
                    <div>
                        <div class="val">7</div>
                        <div class="lbl">Wells under construction</div>
                    </div>
                    <div>
                        <div class="val">$16,500</div>
                        <div class="lbl">Disbursed to date</div>
                    </div>
                </div>

                <h3>Step two: construction, in the open</h3>
                <p>
                    Every well site gets a visible signboard listing the funding source,
                    expected completion date, and a phone number for community feedback.
                    Local contractors are paid in three installments &mdash; on siting,
                    on drilling completion, and on final pump installation &mdash; each
                    one verified by an independent field auditor before release.
                </p>

                <div class="post-inline-img">
                    <img src="https://images.unsplash.com/photo-1541692641319-981cc79ee10a?w=1000&h=600&fit=crop&auto=format"
                        alt="A newly completed well with a hand pump" />
                    <figcaption>
                        The Machiraju village well, completed in June, now serves roughly
                        340 residents.
                    </figcaption>
                </div>

                <p>
                    By the end of the dry season, we expect all twelve sites to have
                    working infrastructure. Three will still be short of full funding
                    &mdash; which is where this campaign, and the donors reading this,
                    come in.
                </p>

                <h3>What your donation actually funds</h3>
                <ul>
                    <li>
                        <strong>Survey &amp; siting</strong> &mdash; hydrogeology
                        assessment and community consultation
                    </li>
                    <li>
                        <strong>Drilling &amp; casing</strong> &mdash; borehole drilling
                        to verified depth, with steel casing
                    </li>
                    <li>
                        <strong>Pump &amp; platform</strong> &mdash; hand pump
                        installation and a concrete apron to prevent contamination
                    </li>
                    <li>
                        <strong>12-month maintenance</strong> &mdash; a local caretaker
                        stipend and spare parts fund
                    </li>
                </ul>

                <p>
                    None of this happens without a first gift. If you'd like to see
                    exactly where the remaining balance goes, the full financial
                    breakdown for this campaign is updated weekly on the causes page.
                </p> --}}
            </div>

            <!-- Tags & Share -->
            {{-- <div class="post-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start gap-3">
                    <div class="post-tags">
                        <a href="blog.html">Clean Water</a>
                        <a href="blog.html">Impact Report</a>
                        <a href="blog.html">Field Notes</a>
                    </div>
                    <div class="post-share">
                        <span>Share</span>
                        <a href="#" aria-label="Share on Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" aria-label="Share on X"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" aria-label="Share via email"><i class="bi bi-envelope"></i></a>
                        <a href="#" aria-label="Copy link"><i class="bi bi-link-45deg"></i></a>
                    </div>
                </div>
            </div> --}}

            <!-- Author bio -->
            {{-- <div class="author-card" data-aos="fade-up">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=200&h=200&fit=crop&auto=format"
                    alt="Priya Nair" />
                <div>
                    <h6>Priya Nair</h6>
                    <p>
                        Priya leads Hopewell's field programs across South Asia and has
                        overseen water infrastructure projects in more than 60 villages
                        since 2019.
                    </p>
                </div>
            </div> --}}
        </div>
    </section>

    <!-- ============================================
                    RELATED POSTS
                    ============================================ -->
    <section class="section-pad pt-0 bg-white">
        <div class="container">
            <h2 class="section-title mb-4" style="font-size: clamp(1.4rem, 2.4vw, 1.8rem)" data-aos="fade-up">
                Berita Lainnya
            </h2>
            <div class="row g-4">

                @foreach ($otherBlogs as $item)
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

                {{-- <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <a href="blog.html" class="text-decoration-none">
                        <div class="blog-card">
                            <div class="bc-img">
                                <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=600&h=420&fit=crop&auto=format"
                                    alt="Children eating a school lunch" />
                                <span class="bc-tag">Nutrition</span>
                            </div>
                            <div class="bc-body">
                                <div class="bc-meta">
                                    <span><i class="bi bi-calendar3"></i> Jul 21, 2026</span><span><i
                                            class="bi bi-clock"></i> 4 min</span>
                                </div>
                                <h5>What a $2 lunch actually buys in a rural classroom</h5>
                                <p>
                                    The real cost of the Daily Meals program, ingredient by
                                    ingredient.
                                </p>
                                <span class="bc-link">Read more <i class="bi bi-arrow-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <a href="blog.html" class="text-decoration-none">
                        <div class="blog-card">
                            <div class="bc-img">
                                <img src="https://images.unsplash.com/photo-1584515933487-779824d29309?w=600&h=420&fit=crop&auto=format"
                                    alt="Mobile health clinic staff examining a patient" />
                                <span class="bc-tag">Healthcare</span>
                            </div>
                            <div class="bc-body">
                                <div class="bc-meta">
                                    <span><i class="bi bi-calendar3"></i> Jul 9, 2026</span><span><i
                                            class="bi bi-clock"></i> 3 min</span>
                                </div>
                                <h5>Inside a mobile clinic's first hour in a new district</h5>
                                <p>
                                    A field diary entry on setup, triage, and the line that
                                    forms before opening.
                                </p>
                                <span class="bc-link">Read more <i class="bi bi-arrow-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <a href="blog.html" class="text-decoration-none">
                        <div class="blog-card">
                            <div class="bc-img">
                                <img src="https://images.unsplash.com/photo-1618477388954-7852f32655ec?w=600&h=420&fit=crop&auto=format"
                                    alt="Relief supplies being distributed after flooding" />
                                <span class="bc-tag">Emergency Relief</span>
                            </div>
                            <div class="bc-body">
                                <div class="bc-meta">
                                    <span><i class="bi bi-calendar3"></i> Jun 30, 2026</span><span><i
                                            class="bi bi-clock"></i> 4 min</span>
                                </div>
                                <h5>72 hours after the flood: a timeline of the response</h5>
                                <p>
                                    Exactly how donor funds moved during the flood relief
                                    effort.
                                </p>
                                <span class="bc-link">Read more <i class="bi bi-arrow-right"></i></span>
                            </div>
                        </div>
                    </a>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- ============================================
                CTA BANNER (reused pattern)
                ============================================ -->
    {{-- <section class="section-pad" id="cta">
        <div class="container">
            <div class="cta-banner" data-aos="zoom-in">
                <i class="bi bi-heart-fill" style="font-size: 2.4rem"></i>
                <h2 class="mt-3">
                    Help us reach the last three villages on the list.
                </h2>
                <p class="mb-4" style="opacity: 0.92">
                    Every gift, however small, moves a real story forward today.
                </p>
                <a href="index.html#causes" class="btn-cta" id="ctaDonateBtn"><i class="bi bi-heart-fill me-2"></i>Donate
                    Now</a>
            </div>
        </div>
    </section> --}}
@endsection
