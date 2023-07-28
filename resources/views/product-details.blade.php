@extends('layouts.app')

@section('content')

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">\

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

  <!-- Costume CSS -->
  <Style>
    .breadcrumb {
      padding: 0;
    }

    .breadcrumb .active {
      font-weight: bold;
      color: black;
    }

    .gambar-produk {
      background-color: #f1f1f1;
      border-width: 0;
      border-radius: 20px;
    }

    .detail img {
      max-height: 500px;
      max-width: 250px;
    }

    .detail .card {
      border-radius: 15px;
      height: 400px;
    }

    .table td,
    table th {
      border: none;
    }
  </Style>
</head>

<div class="container">
  <div class="row mb-2">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/home')}}" class="text-dark text-decoration-none">Home</a></li>
          <li class="breadcrumb-item"><a href="{{ url('/produk') }}" class="text-dark text-decoration-none">All Products</a></li>
          <li class="breadcrumb-item active" aria-current="page">Detail Sepatu</li>
        </ol>
      </nav>
    </div>
  </div>


  <section class="detail mb-5">
    <div class="row mt-4">
      <div class="col-md-6 mb-3">
        <div class="card gambar-produk shadow">
          <div class="card-body text-center d-flex justify-content-center align-items-center">
            <img src="{{ url('assets/produk')}}/{{ $produk ->gambar_produk}}" class="img_fluid">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h2><strong>{{ $produk->nama_produk }}</strong></h2>
        <h4>
          Rp. {{ number_format($produk->harga_produk) }}
          @if($produk->is_ready == 1)
          <span class="badge text-bg-success"><i class="fas fa-check"></i>Ready Stock</span>
          @else
          <span class="badge text-bg-danger"><i class="fas fa-times"></i>Not Ready Stock</span>
          @endif
        </h4>
        <hr>
        <div class="row">
          <div class="col">
            <form action="{{ route('produk.pesanan', ['id' => $produk->id]) }}" method="POST">
              @csrf
              <input type="hidden" name="id_produk" value="{{ $produk->id }}">
              <table class="table" style="border: none;">
                <tr>
                  <td>Brand</td>
                  <td>:</td>
                  <td>
                    <img src="{{ url('assets/perusahan')}}/{{ $produk->perusahan ->gambar_perusahan}}" class="img_fluid" width="50">
                  </td>
                </tr>
                <tr>
                  <td>Jenis</td>
                  <td>:</td>
                  <td>
                    {{$produk->jenis_produk}}
                  </td>
                </tr>
                <tr>
                  <td>Ukuran</td>
                  <td>:</td>
                  <td>
                    {{$produk->ukuran_produk}}
                  </td>
                </tr>
                <tr>
                  <td>Jumlah</td>
                  <td>:</td>
                  <td>
                    <input id="jumlah_pesanan" type="number" class="form-control @error('jumlah_pesanan') is-invalid @enderror" name="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="name" autofocus>

                    @error('jumlah_pesanan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </td>
                </tr>
                <tr>
                  <td colspan="3">
                    <button type="submit" class="btn btn-dark btn-block" @if($produk->is_ready !== 1) disabled @endif>
                      <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                  </td>
                </tr>
              </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


@endsection