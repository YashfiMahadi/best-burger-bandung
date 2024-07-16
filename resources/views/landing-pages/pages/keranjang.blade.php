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
          Keranjang
        </h2>
      </div>

      <ul class="filters_menu">
      </ul>

      <div class="row">
        <div class="col-lg-12">
          @if (session()->has('tambah'))
              <div class="alert bg-success text-white text-center">
                  {{ session()->get('tambah') }}
              </div>
          @endif
          @if (session()->has('edit'))
              <div class="alert bg-warning text-white text-center">
                  {{ session()->get('edit') }}
              </div>
          @endif
          @if (session()->has('hapus'))
              <div class="alert bg-danger text-white text-center">
                  {{ session()->get('hapus') }}
              </div>
          @endif
        </div>
      </div>

      <div class="filters-content">
        <div class="row grid">
          @foreach ($keranjang as $item)
            <div class="col-sm-6 col-lg-4 all">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="{{ asset('images/uploads/' . $item->image) }}" alt="">
                    <a href="/hapus/{{ $item->id_keranjang }}/keranjang" class="btn btn-danger" 
                      style="position: absolute; left: 19.5rem; top: 10px;">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
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
                        {{ 'Rp. ' . number_format($item->subtotal_harga, 2, ',', '.') }}
                      </h6>
                    </div>
                    <form action="/edit/{{ $item->id_keranjang }}/keranjang" method="POST">
                      @csrf
                      <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                      <input type="hidden" name="id_makanan" value="{{ $item->id }}">
                      <input type="hidden" name="harga" value="{{ $item->harga }}">
                      <div class="d-flex justify-content-between">
                        <div>
                          <label for="">Jml</label>
                          <input type="number" name="jumlah" style="width: 50px" value="{{ $item->total_jumlah }}">
                        </div>
                        <button class="btn btn-warning" type="submit">
                          <i class="fa fa-pencil text-white" style="font-size: 20px" aria-hidden="true"></i>
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
      <div class="row mt-5 w-100">
        <div class="col-lg-4">
          <h4><strong>Subtotal</strong> Rp. {{ number_format($subtotal_harga, 2, ',', '.') }}</h4>
        </div>
        <div class="col-lg-5"></div>
        <div class="col-lg-3 text-right">
            <a href="/transaksi" class="btn btn-warning text-white">Check out</a>
        </div>
      </div>
    </div>
  </section>
  <!-- end food section -->
@endsection