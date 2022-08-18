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
            <form method="post" action="/pesan/konfirmasi" enctype="multipart/form-data">
              @csrf
              
              <p class="text-decoration-underline fs-3">Biodata pemesan</p>
              <div class="row mb-4">
                <div class="col">
                  <label for="nama" class="form-label">Nama:</label>
                  <input class="form-control" name="nama" type="text" id="nama">
                </div>
              </div>
              <div class="row mb-4">
                <div class="col">
                  <label for="notelp" class="form-label">Nomor telepon:</label>
                  <input class="form-control" name="notelp" type="text" id="notelp">
                </div>
              </div>
              
              <p class="text-decoration-underline fs-3">Rincian pesanan</p>
              <div class="row mb-4">
                <div class="col">
                  <label for="formFile" class="form-label">Upload file:</label>
                  <input class="form-control" name="berkas" type="file" id="formFile">
                </div>
              </div>

              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <select class="form-select" name="kertas">
                    <option value="">(Pilih jenis kertas)</option>
                    <option value="HVS">HVS</option>
                    <option value="Artpaper">Artpaper</option>
                    <option value="Karton">Karton</option>
                  </select>
                </div>
                <div class="col-lg-6 form-group">
                  <select class="form-select" name="ukuran">
                    <option value="">(Ukuran kertas)</option>
                    <option value="A4">A4</option>
                    <option value="A3">A3</option>
                    <option value="B5">B5</option>
                  </select>
                </div>
              </div>

              <div class="my-3">
                <textarea name="keterangan" id="keterangan" class="form-control" rows="4" placeholder="Keterangan"></textarea>
              </div>
              
              <div class="text-center">
                <button type="submit" class="btn btn-warning text-white">Pesan!</button>
              </div>
            </form>
          </div><!-- End Contact Form -->
        </div>
        
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
    
@endsection