 @extends('landing.layout')

 @section('content')
     <section class="section-pad" id="contact">
         <div class="container">
             <div class="contact-card contact-page">
                 <div class="row g-0">

                     {{-- Contact Information --}}
                     <div class="col-lg-5" data-aos="fade-right">
                         <div class="contact-info h-100">
                             <span class="eyebrow">
                                 <i class="bi bi-chat-dots-fill"></i>
                                 Get In Touch
                             </span>

                             <h2 class="section-title mt-3 mb-3">
                                 Let's make a difference together.
                             </h2>

                             <p class="contact-description">
                                 Have a question, want to collaborate, or need more
                                 information about our programs? We'd love to hear
                                 from you. Send us a message and our team will get
                                 back to you.
                             </p>

                             <div class="contact-details mt-4">
                                 <div class="contact-item">
                                     <div class="contact-icon">
                                         <i class="bi bi-geo-alt-fill"></i>
                                     </div>
                                     <div>
                                         <h6>Our Location</h6>
                                         <p>123 Hope Street, Your City, Your Country</p>
                                     </div>
                                 </div>

                                 <div class="contact-item">
                                     <div class="contact-icon">
                                         <i class="bi bi-envelope-fill"></i>
                                     </div>
                                     <div>
                                         <h6>Email Address</h6>
                                         <a href="mailto:hello@example.com">
                                             hello@example.com
                                         </a>
                                     </div>
                                 </div>

                                 <div class="contact-item">
                                     <div class="contact-icon">
                                         <i class="bi bi-telephone-fill"></i>
                                     </div>
                                     <div>
                                         <h6>Phone Number</h6>
                                         <a href="tel:+621234567890">
                                             +62 123 4567 890
                                         </a>
                                     </div>
                                 </div>

                                 <div class="contact-item">
                                     <div class="contact-icon">
                                         <i class="bi bi-clock-fill"></i>
                                     </div>
                                     <div>
                                         <h6>Working Hours</h6>
                                         <p>Monday – Friday, 09:00 – 17:00</p>
                                     </div>
                                 </div>
                             </div>

                             <div class="contact-social mt-4">
                                 <span>Follow our journey</span>

                                 <div class="d-flex gap-2 mt-3">
                                     <a href="#" aria-label="Instagram">
                                         <i class="bi bi-instagram"></i>
                                     </a>
                                     <a href="#" aria-label="Facebook">
                                         <i class="bi bi-facebook"></i>
                                     </a>
                                     <a href="#" aria-label="LinkedIn">
                                         <i class="bi bi-linkedin"></i>
                                     </a>
                                     <a href="#" aria-label="WhatsApp">
                                         <i class="bi bi-whatsapp"></i>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>

                     {{-- Contact Form --}}
                     <div class="col-lg-7" data-aos="fade-left">
                         <div class="contact-form-wrapper">
                             <div class="mb-4">
                                 <span class="eyebrow">
                                     <i class="bi bi-send-fill"></i>
                                     Send A Message
                                 </span>

                                 <h3 class="font-display mt-3 mb-2">
                                     We'd love to hear from you.
                                 </h3>

                                 <p class="text-muted mb-0">
                                     Fill in the form below and tell us how we can help.
                                 </p>
                             </div>

                             @if (session('success'))
                                 <div class="alert alert-success border-0 rounded-4">
                                     <i class="bi bi-check-circle-fill me-2"></i>
                                     {{ session('success') }}
                                 </div>
                             @endif

                             <form action="" method="POST">
                                 @csrf

                                 <div class="row g-3">
                                     <div class="col-md-6">
                                         <label for="name" class="form-label">
                                             Full Name
                                         </label>
                                         <input type="text"
                                             class="form-control contact-input @error('name') is-invalid @enderror"
                                             id="name" name="name" value="{{ old('name') }}"
                                             placeholder="Your full name" required>
                                         @error('name')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>

                                     <div class="col-md-6">
                                         <label for="email" class="form-label">
                                             Email Address
                                         </label>
                                         <input type="email"
                                             class="form-control contact-input @error('email') is-invalid @enderror"
                                             id="email" name="email" value="{{ old('email') }}"
                                             placeholder="you@example.com" required>
                                         @error('email')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>

                                     <div class="col-12">
                                         <label for="subject" class="form-label">
                                             Subject
                                         </label>
                                         <input type="text"
                                             class="form-control contact-input @error('subject') is-invalid @enderror"
                                             id="subject" name="subject" value="{{ old('subject') }}"
                                             placeholder="What is this about?" required>
                                         @error('subject')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>

                                     <div class="col-12">
                                         <label for="message" class="form-label">
                                             Your Message
                                         </label>
                                         <textarea class="form-control contact-input contact-textarea @error('message') is-invalid @enderror" id="message"
                                             name="message" rows="5" placeholder="Tell us more about your inquiry..." required>{{ old('message') }}</textarea>
                                         @error('message')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>

                                     <div class="col-12 mt-4">
                                         <button type="submit" class="contact-submit">
                                             Send Message
                                             <i class="bi bi-arrow-right ms-2"></i>
                                         </button>

                                         <p class="form-note mt-3 mb-0">
                                             <i class="bi bi-shield-check me-1"></i>
                                             Your information will be kept private.
                                         </p>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
     </section>
 @endsection


 {{-- Contact lama --}}
 {{-- <section class="section-pad bg-white" id="contact">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width:640px;" data-aos="fade-up">
            <span class="eyebrow"><i class="bi bi-envelope-fill"></i> Get In Touch</span>
            <h2 class="section-title mt-3" style="font-size:clamp(1.8rem,3.2vw,2.5rem);">We'd love to hear from
                you</h2>
        </div>
        <div class="row g-5">
            <div class="col-lg-5 contact-card" data-aos="fade-right">
                <div class="contact-info-item">
                    <span class="ic"><i class="bi bi-geo-alt-fill"></i></span>
                    <div><strong>Our Office</strong>
                        <div class="text-muted small">221 Riverside Lane, Austin, TX 78701</div>
                    </div>
                </div>
                <div class="contact-info-item">
                    <span class="ic"><i class="bi bi-envelope-fill"></i></span>
                    <div><strong>Email Us</strong>
                        <div class="text-muted small">hello@hopewell.org</div>
                    </div>
                </div>
                <div class="contact-info-item">
                    <span class="ic"><i class="bi bi-telephone-fill"></i></span>
                    <div><strong>Call Us</strong>
                        <div class="text-muted small">+1 (555) 204-8890</div>
                    </div>
                </div>
                <div class="map-placeholder"><i class="bi bi-pin-map-fill me-2"></i> Map Embed Placeholder</div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="contact-card">
                    <form id="contactForm" novalidate>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold" for="cf-name">Full Name</label>
                                <input type="text" class="form-control form-control-hw" id="cf-name"
                                    placeholder="Jane Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold" for="cf-email">Email Address</label>
                                <input type="email" class="form-control form-control-hw" id="cf-email"
                                    placeholder="jane@example.com" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-semibold" for="cf-subject">Subject</label>
                                <input type="text" class="form-control form-control-hw" id="cf-subject"
                                    placeholder="How can we help?">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-semibold" for="cf-message">Message</label>
                                <textarea class="form-control form-control-hw" id="cf-message" rows="4" placeholder="Tell us more&hellip;"
                                    required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn-hw-primary w-100 justify-content-center">Send
                                    Message <i class="bi bi-send"></i></button>
                            </div>
                            <div class="col-12" id="formStatus" role="status" aria-live="polite"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
