@extends('layouts.backend.main')
@section('pesan-armada', 'active')
@section('content')

    <div style="margin-top: 100px">
        <form class="justify-content-center" method="POST" action="{{ route('user.order2') }}">
            @csrf
            <div class="card my-3">
                <div class="card-header">
                    <h1 class="fs-5 text-center">Form Lokasi Tujuan Pengiriman</h1>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-outline">
                                <input type="text" class="form-control form-control-lg" id="nama_barang" name="nama_barang"
                                    required>
                                <label class="form-label" for="nama_barang">Nama Barang</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-select form-select-lg" name="jenis_barang" id="jenis_barang">
                                <option value="">Jenis Barang</option>
                                <option value="Kotak">Kotak</option>
                                <option value="Peti">Peti</option>
                                <option value="Palet">Palet</option>
                                <option value="Barel">Barel</option>
                                <option value="Karung">Karung</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered mt-4" id="dynamicAddRemove" required>
                            <thead>
                                <tr>
                                    <th>Alamat</th>
                                    <th>Tujuan</th>
                                    @if ($orders->feed_m == 1)
                                        <th>#</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <select class="form-select form-select-lg" name="tujuan[]" required>
                                            {{-- <option value="">-- Tujuan --</option> --}}

                                            @foreach ($zone->where('id', 1) as $item)

                                                <option value="{{ $item->zone }}">{{ $item->zone }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="nama_penerima[]" class="form-control form-control-lg"
                                            placeholder="Nama Penerima" required />
                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="alamat_tujuan[]" placeholder="Alamat Lengkap"
                                            class="form-control form-control-lg" required />
                                    </td>

                                    <td>
                                        <input type="num" name="telp_tujuan[]" class="form-control form-control-lg"
                                            placeholder="628XXXXX">
                                    </td>
                                    @if ($orders->feed_m == 1)
                                        <td>

                                            <button type="button" name="add" id="dynamic-ar"
                                                class="btn btn-outline-primary">Add</button>


                                        </td>
                                    @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary">Save</button>

                    </div>
                </div>
            </div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </form>
    </div>
@endsection
