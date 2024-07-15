@extends('landing-pages.layouts.app')

@section('content')
  @push('image')
  <div class="bg-box">
    <img src="{{ asset('images/hero-bg.jpg') }}" alt="">
  </div>
  @endpush

  @push('slider')
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Jangan lewatkan burger bulan ini!
                    </h1>
                    <p>
                      burger spesial yang berbeda setiap bulan
                    </p>
                    <div class="btn-box">
                      <a href="/menu" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Burger kami dibuat dengan cinta dan dedikasi.
                    </h1>
                    <p>
                      burger tanpa daging (vegan) dengan patty Beyond Meat
                    </p>
                    <div class="btn-box">
                      <a href="/menu" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      Rasakan cita rasa klasik yang tak tergantikan.
                    </h1>
                    <p>
                      burger klasik dengan roti empuk dan saus spesial
                    </p>
                    <div class="btn-box">
                      <a href="/menu" class="btn1">
                        Order Now
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ol class="carousel-indicators">
            <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#customCarousel1" data-slide-to="1"></li>
            <li data-target="#customCarousel1" data-slide-to="2"></li>
          </ol>
        </div>
      </div>
    </section>
  @endpush

  <!-- food section -->
  <section class="food_section layout_padding-bottom pt-5">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">All</li>
        @foreach ($kategori as $item)    
          <li data-filter=".{{ $item->name }}">{{ $item->name }}</li>
        @endforeach
      </ul>

      <div class="filters-content">
        <div class="row grid">
          @foreach ($makanan as $item)
            <div class="col-sm-6 col-lg-4 all {{ $item->kategori }}">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="{{ asset('images/uploads/' . $item->image) }}" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      {{ $item->nama }}
                    </h5>
                    <p>
                      {{ Str::substr($item->deskripsi, 0, 60) . '...' }}
                    </p>
                    <div class="options">
                      <h6>
                        {{ 'Rp. ' . number_format($item->harga, 2, ',', '.') }}
                      </h6>
                    </div>
                    <form action="/tambah/keranjang" method="POST">
                      @csrf
                      <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                      <input type="hidden" name="id_makanan" value="{{ $item->id }}">
                      <input type="hidden" name="harga" value="{{ $item->harga }}">
                      <div class="d-flex justify-content-between">
                        <div>
                          <label for="">Jml</label>
                          <input type="number" name="jumlah" style="width: 50px" required>
                        </div>
                        <button class="btn btn-warning" type="submit">
                          <i class="fa fa-shopping-cart text-white" style="font-size: 20px" aria-hidden="true"></i>
                        </button> 
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>
  <!-- end food section -->

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