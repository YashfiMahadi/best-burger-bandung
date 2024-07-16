
@extends('landing-pages.layouts.app')

@section('content')

  @push('style')
      style="min-height: 100%; margin-top: -25px; padding-top: 20px; background: linear-gradient(to bottom, #f1f2f3 25px, #222831 25px);"
  @endpush
  
  <!-- food section -->
  <section class="food_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Menu
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
                    @auth
                    <form action="/tambah/keranjang" method="POST">
                      @csrf
                      <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                      <input type="hidden" name="id_makanan" value="{{ $item->id }}">
                      <input type="hidden" name="harga" value="{{ $item->harga }}">
                      <div class="d-flex justify-content-between">
                        <div>
                          <label for="">Jml</label>
                          <input type="number" name="jumlah" style="width: 50px">
                        </div>
                        <button class="btn btn-warning" type="submit">
                          <i class="fa fa-shopping-cart text-white" style="font-size: 20px" aria-hidden="true"></i>
                        </button>
                      </div>
                    </form>
                    @endauth
                    @guest
                    <div class="d-flex justify-content-between">
                      <div>
                        <label for="">Jml</label>
                        <input type="number" name="jumlah" style="width: 50px">
                      </div>
                      <a href="" class="btn btn-warning" type="submit">
                        <i class="fa fa-shopping-cart text-white" style="font-size: 20px" aria-hidden="true"></i>
                      </a>
                    </div>
                    @endguest
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

@endsection