@extends('landing-pages.layouts.app')

@section('content')
@push('style')
    style="min-height: 100%; margin-top: -25px; padding-top: 20px; background: linear-gradient(to bottom, #f1f2f3 25px, #222831 25px);"
@endpush

<!-- contact section -->
<section class="book_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        Contact Us
      </h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="contact_link_box">
            <div class="pb-5">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Jl. Terusan Padasaluyu Utara I 19-17, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40154
                </span>
            </div>
            <div class="pb-5">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +62 1234567890
                </span>
            </div>
            <div class="pb-5">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  bestburgerbandung@gmail.com
                </span>
            </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map_container ">
          <div id="googleMap"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end contact section -->
@endsection