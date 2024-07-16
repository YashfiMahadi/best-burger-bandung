@extends('landing-pages.layouts.app')

@section('content')
  @push('style')
  style="min-height: 100%; margin-top: -25px; padding-top: 20px; background: linear-gradient(to bottom, #f1f2f3 25px, #222831 25px);"
  @endpush
  <!-- about section -->

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Best Burger Bandung
              </h2>
            </div>
            <p>
              Best Burger adalah Restoran yang menghidangkan berbagai jenis burger 
              dengan cita rasa yang unik dan lezat. Berlokasi di kota Bandung, 
              Restoran ini menawarkan suasana yang nyaman dan ramah bagi 
              para pengunjung.
            </p>
            <a href="/about">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->

  <!-- end about section -->

@endsection