@extends('layouts.backend.main')
<<<<<<< HEAD
@section('pesan-armada', 'active')
@section('content')

    <div style="margin-top: 100px">
        <form class="justify-content-center" method="POST" action="{{ route('user.order') }}">
            @csrf
=======
<div class="container mt-4">
    <form class="row g-3 justify-content-center" method="POST" action="{{ route('user.order') }}">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (Session::has('success'))
            <div class="alert alert-success text-center">
                <p>{{ Session::get('success') }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
              <div class="md-form md-outline input-with-post-icon timepicker" twelvehour="true">
                <input type="text" id="light-version-examples" class="form-control" placeholder="Select time">
                <label for="light-version-examples">Light version, 12hours</label>
                <i class="fas fa-envelope input-prefix"></i>
              </div>
            </div>

            <div class="col-md-6">
              <div class="md-form md-outline input-with-post-icon timepicker" darktheme="true">
                <input type="text" id="dark-version-example" class="form-control" placeholder="Select time">
                <label for="dark-version-example">Dark version, 24 hours</label>
                <i class="fas fa-envelope  input-prefix"></i>
              </div>
            </div>
          </div>
        <div class="col-lg-5">
>>>>>>> d1387e6a45a20d1e3078b65ca1746f39eb18ccd9
            <div class="card my-3">
                <div class="card-header">
                    <h1 class="fs-5 text-center">Form Lokasi Tujuan Pengiriman</h1>
                </div>
                <div class="card-body">
<<<<<<< HEAD
                    <div class="row">
                        <div class="form-group col-lg-6 mt-2">
                            <label for="jemput">Titik jemput</label>
                            <select class="form-control mt-1" name="jemput" id="jemput">
                                <option value="">-- Pilih --</option>
                                @foreach ($zone as $item)
    
                                    <option value="{{ $item->zone }}">{{ $item->zone }}</option>
                                @endforeach
                            </select>
=======
                    <div class="form-group mt-2">
                        <label for="jemput">Titik jemput</label>
                        <select class="form-control mt-1" name="jemput" id="jemput">
                            <option value="">-- Pilih --</option>
                            @foreach ($zone as $item)

                                <option value="{{ $item->zone }}">{{ $item->zone }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="nama_pengirim">Nama Pengirim</label>
                        <input class="form-control mt-1" type="text" name="nama_pengirim" id="nama_pengirim" placeholder="Nama Penerima" required>
                    </div>
                    <div class="row m-0 mt-2" style="border: 1px solid #f0f0f0; padding:10px">
                        <label for="" class="text-center" >Rentang Jemput</label>
                        <div class="form-group mt-2 col-lg-5">
                            <input type="date" name="jadwal" id="jadwal" class="form-control mt-1" required>
                        </div>
                        <div class="form-group mt-2 col-lg-3">
                                <input class="form-control mt-1" type="time" name="start_time" id="start_time" required>
>>>>>>> d1387e6a45a20d1e3078b65ca1746f39eb18ccd9
                        </div>
                        <div class="form-group col-lg-6 mt-2">
                            <label for="nama_pengirim">Nama Pengirim</label>
                            <input class="form-control mt-1" type="text" name="nama_pengirim" id="nama_pengirim"
                                placeholder="Nama Penerima" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row m-0 mt-2" style="border: 1px solid #f0f0f0; padding:10px">
                                <label for="" class="text-center">Rentang Jemput</label>
                                <div class="form-group mt-2 col-lg-5">
                                    <input type="date" name="jadwal" id="jadwal" class="form-control mt-1" required>
                                </div>
                                <div class="form-group mt-2 col-lg-3">
                                    <input class="form-control mt-1" type="time" name="start_time" id="start_time" required>
                                </div>
                                <div class="col-1"> </div>
                                <div class="form-group mt-2 col-lg-3">
                                    <input class="form-control mt-1" type="time" name="arrival_time" id="arrival_time" required>
                                </div>
                            </div>
                        </div>
    
                        <div class="form-group col-lg-6 mt-2">
                            <label for="telp_jemput">No. Telp</label>
                            <input type="num" name="telp_jemput" class="form-control mt-1" placeholder="628XXXXX" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6 mt-2">
                            <label for="alamat_jemput">Alamat Lengkap</label>
                            <textarea class="form-control mt-1" name="alamat_jemput" id="alamat_jemput" rows="5"
                                required></textarea>
                        </div>
<<<<<<< HEAD
                        <div class="row col-lg-6 mt-2">
                            <div class="form-group mt-2 col-lg-6">
                                <label for="armada">Jenis Armada</label>
                                <select class="form-control mt-1" name="armada" id="armada" required>
                                    <option value="CDD Box">CDD Box</option>
                                    <option value="CDD Reefer">CDD Reefer</option>
                                    <option value="Pickup">Pickup</option>
                                    <option value="Blindvan">Blindvan</option>
                                </select>
=======

                        <div class="form-group mt-2 col-lg-6">
                            <label for="feed_m">Jumlah Truk</label> <br>
                            <div class="form-control">
                                <input type="radio" name="feed_m" class="m-2" value="1" id="feed_m1"> <label
                                    for="feed_m1">1</label>
                                <input type="radio" name="feed_m" class="m-2" value="2" id="feed_m2"> <label
                                    for="feed_m2">2</label>
                                <input type="radio" name="feed_m" class="m-2" value="3" id="feed_m3"> <label
                                    for="feed_m3">3</label>
                                <input type="radio" name="feed_m" class="m-2" value="4" id="feed_m4"> <label
                                    for="feed_m4">4</label> <br>
                                <input type="radio" name="feed_m" class="m-2" value="0" id="feed_m0">
                                <label for="feed_m0">Field Manager</label>
>>>>>>> d1387e6a45a20d1e3078b65ca1746f39eb18ccd9
                            </div>
    
                            <div class="form-group mt-2 col-lg-6">
                                <label for="feed_m">Jumlah Truk</label> <br>
                                <div class="form-control">
                                    <input type="radio" name="feed_m" class="m-2" value="1" id="feed_m1"> <label
                                        for="feed_m1">1</label>
                                    <input type="radio" name="feed_m" class="m-2" value="2" id="feed_m2"> <label
                                        for="feed_m2">2</label>
                                    <input type="radio" name="feed_m" class="m-2" value="3" id="feed_m3"> <label
                                        for="feed_m3">3</label>
                                    <input type="radio" name="feed_m" class="m-2" value="4" id="feed_m4"> <label
                                        for="feed_m4">4</label> <br>
                                    <div class="d-none">
                                        <input type="radio" name="feed_m" class="m-2" value="0" id="feed_m0">
                                        <label for="feed_m">Feed Manager</label>
                                    </div>
                                </div>
    
                            </div>
                    </div>
                    </div>

<<<<<<< HEAD
                    <div class="mt-2 fa-pull-right">
=======
                    <div class="mt-2">
>>>>>>> d1387e6a45a20d1e3078b65ca1746f39eb18ccd9
                        <button type="submit" class="btn btn-primary">Next</button>

                    </div>
                </div>
            </div>
<<<<<<< HEAD
            {{-- ------------------------------------------------------------------------------------------- --}}
=======
        </div>
        {{-- ------------------------------------------------------------------------------------------- --}}
>>>>>>> d1387e6a45a20d1e3078b65ca1746f39eb18ccd9

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </form>
    </div>
@endsection
