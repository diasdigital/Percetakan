@extends('frontend.layouts.main')

@section('konten')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Pesan</h2>
        <ol>
          <li><a href="/">Beranda</a></li>
          <li>Pesan</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-8 border rounded p-4">
            <div class="row">
              <div class="col">
                <div class="alert alert-success mb-3" role="alert">
                  Pesanan berhasil!
                </div>
                <p class="text-decoration-underline fs-3">Detail pemesanan</p>
                <ul class="list-group">
                  <li class="list-group-item">Nama: {{ $nama }}</li>
                  <li class="list-group-item">Nomor telpon: {{ $notelp }}</li>
                  <li class="list-group-item">Nama berkas: {{ $berkas }}</li>
                  <li class="list-group-item">Jenis kertas: {{ $kertas }}</li>
                  <li class="list-group-item">Ukuran: {{ $ukuran }}</li>
                </ul>
              </div>
            </div>
          </div><!-- End Contact Form -->
        </div>
        
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
    
@endsection