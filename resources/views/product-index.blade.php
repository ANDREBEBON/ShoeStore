@extends('layouts.app')

@section('content')

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <!-- Costume CSS -->
  <Style>
    .breadcrumb {
      padding: 0;
    }

    .breadcrumb .active {
      font-weight: bold;
      color: black;
    }

    .produk img {
      max-height: 100px;
    }

    .produk .card {
      border-radius: 15px;
    }
  </Style>
</head>

<div class="container">
  <div class="row mb-2">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/home')}}" class="text-dark text-decoration-none">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ url('/produk') }}" class="text-dark text-decoration-none">All Products</a></li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="col-md-9">
      <h2>All<strong>Products</strong></h2>
    </div>
    <div class="col-md-3">
      <form method="GET">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search" autofocus>
          <button class="btn btn-dark" type="submit" id="button-addon2">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>


  {{-- Product --}}
  <section class="produk mb-5">
    <div class="row mt-4">
      @foreach ($produks as $produk)
      <div class="col-md-3 mb-3">
        <div class="card shadow">
          <div class="card-body text-center">
            <img src="{{ url('assets/produk')}}/{{ $produk ->gambar_produk}}" class="img_fluid">
            <div class="row mt-2">
              <div class="col-md-12">
                <h5><strong>{{ $produk->nama_produk}}</strong></h5>
                <h6>Rp. {{ number_format($produk->harga_produk)}}</h6>
              </div>
            </div>
            <div class="row mt-2 d-flex justify-content-center align-items-center">
              <a href="{{ route('produk.show', ['id' => $produk->id]) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row">
      <div class="col">
        {{ $produks->links() }}
      </div>
    </div>
  </section>
</div>
@endsection