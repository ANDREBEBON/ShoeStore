@extends('layouts.app')

@section('content')

{{-- Banner --}}
    <div class="container">
        <div class="banner w-100">
            <img class="w-100 rounded-3" src="{{ url('assets/banner/banner.png') }}" alt="Banner">
        </div>
        <section class="pilihan-perusahan mw-100 ">
            <div class="row mt-4">
                @foreach ($perusahans as $perusahan)
                <div class="col">
                    <div class="card ">
                        <div class="card-body">
                          <img src="{{ url('assets/perusahan')}}/{{ $perusahan ->gambar_perusahan}}"  class="img_fluid">
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>

@endsection
