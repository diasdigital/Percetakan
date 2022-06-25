@extends('frontend.layouts.main')

@section('konten')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Hubungi Kami</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Hubungi Kami</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.534723963952!2d106.9375283!3d-6.9045109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbcd2d01a3ea1d632!2sDias%20Digital%20Printing%20dan%20Fotocopy!5e0!3m2!1sid!2sid!4v1656151930386!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col">
                <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-map"></i>
                  <h3>Alamat</h3>
                  <p class="mx-5">Jl Selabintana No 11 Rt 02/01 Batas Kota Kp. Cisarua Desa Warnasari, Selabatu, Kec. Sukabumi, Kota Sukabumi, Jawa Barat 43114</p>
                </div>
              </div>
            </div>
    
            <div class="row mt-3">
              <div class="col">
                <div class="info-item d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p>forteblast@gmail.com</p>
                </div>
              </div>
            </div>
  
            <div class="row mt-3">
              <div class="col">
                <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                  <i class="bi bi-telephone"></i>
                  <h3>Whatsapp</h3>
                  <p>08xx xxxx xxxx</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
    
@endsection