
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
          Pesanan Anda
        </h2>
      </div>

      <ul class="filters_menu">
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-lg-12 all">
            <div class=" d-flex justify-content-center ">
              <div class="box" style="width: 50%">
                <div>
                  <div class="img-box" style="background-color: #a1a1a1; height: 20px;">
                    <h3 class="text-dark"><strong>Order Pesanan</strong></h3>
                  </div>
                </div>
                  <div class="detail-box">
                    <h5>
                      Keranjang makanan
                    </h5>
                    <p>
                      <table border="1" cellpadding="20" class="w-100">
                        <tr>
                          <th style="width: 300px">Nama</th>
                          <th>jumlah</th>
                          <th>Harga</th>
                        </tr>
                        @foreach ($keranjang as $item)  
                        <tr>
                          <td>{{ $item->nama }}</td>
                          <td>{{ $item->total_jumlah }}</td>
                          <td>{{ 'Rp.' . number_format($item->harga, 2, ',', '.') }}</td>
                        </tr>
                        @endforeach
                      </table>
                    </p>
                    <div class="options">
                      <div class="row">
                        <div class="col-lg-12">
                          <h5 class="w-100">
                            Data Diri
                          </h5>
                        </div>
                        <div class="col-lg-12 my-2">
                          <i class="fa fa-user mr-2" aria-hidden="true"></i>
                          <span>
                            {{ $transaksi_user->name }}
                          </span>
                        </div>
                        <div class="col-lg-12 my-2">
                          <i class="fa fa-envelope mr-2" aria-hidden="true"></i>
                          <span>
                            {{ $transaksi_user->email }}
                          </span>
                        </div>
                        <div class="col-lg-12 my-2">
                          <i class="fa fa-phone mr-2" aria-hidden="true"></i>
                          <span>
                            Notlp {{ $transaksi_user->notlp }}
                          </span>
                        </div>
                        <div class="col-lg-12 my-2">
                          <h5 class="w-100">
                            Alamat
                          </h5>
                        </div>
                        <div class="col-lg-12">
                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                          <span>
                            Jl. Terusan Padasaluyu Utara I 19-17, Isola, Kec. Sukasari, Kota Bandung, Jawa Barat 40154
                          </span>
                        </div>
                        <div class="col-lg-12 my-3">
                          <h5 class="w-100">
                            Pembayaran
                          </h5>
                        </div>
                        <div class="col-lg-12">
                          <form action="/proses/pembayaran" method="POST">
                            @csrf
                            <div class="row">
                              <div class="col-lg-12 mb-3">
                                <select name="metode_pembayaran" style="z-index: 1000;" class="w-100 text-dark" id="metode_pembayaran" required>
                                  <option value="">Pilih Metode Pembayaran</option>
                                  <option value="Bayar Di Tempat">Bayar Di Tempat</option>
                                  <option value="QRIS">QRIS</option>
                                </select>
                              </div>
                              <div class="col-lg-12 mb-3">
                                <button class="btn btn-warning">Pesan Sekarang</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="col-lg-12 my-2">
                          <h5 class="text-center w-100">
                            Order Pesanan
                          </h5>
                        </div>
                      </div>
                    </div>
                  </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
      </div>
    </div>
  </section>
  <!-- end food section -->

@endsection