@extends('layouts.app')

@section('content')
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<!-- Costume CSS -->
<style>
    .banner img{
        width: 100%;
        border-radius: 15px;
    }
    .pilih-perusahan img{
        max-height: 100px;
    }
    .pilih-perusahan .card{
        border-radius: 15px;
    }
    .best-produk img{
        max-height: 100px;
    }
    .best-produk .card{
        border-radius: 15px;
    }
</style>
</head>

{{-- Banner --}}
    <div class="container">
        <div class="banner">
            <img src="{{ url('assets/banner/banner.png') }}" alt="Banner">
        </div>

        {{-- Pilih Perusahan --}}
        <section class="pilih-perusahan">
            <h3 class="fw-bold mt-4">Our Brand</h3>
            <div class="row mt-4">
                @foreach ($perusahans as $perusahan)
                <div class="col">
                    <div class="card shadow">
                        <div class="card-body text-center">
                        <img src="{{ url('assets/perusahan')}}/{{ $perusahan ->gambar_perusahan}}"  class="img_fluid">
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        {{-- Best Product --}}
        <section class="best-produk">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mb-0">Best Products</h3>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <a href="{{ url('/produk') }}" class="btn btn-dark"><i class="fas fa-eye"></i> Lihat Semua</a>
                </div>
            </div>
        </div>
            <div class="row mt-4">
                @foreach ($produks as $produk)
                <div class="col-md-3">
                    <div class="card shadow">
                        <div class="card-body text-center">
                        <img src="{{ url('assets/produk')}}/{{ $produk ->gambar_produk}}"  class="img_fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $produk->nama_produk}}</strong></h5>
                                <h6>Rp. {{ number_format($produk->harga_produk)}}</h6>
                            </div>
                        </div>
                        <div class="row mt-2 d-flex justify-content-center align-items-center">
                            <a href="{{ route('produk.show', ['id' => $produk->id]) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i>Detail</a>
                        </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection
