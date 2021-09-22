@extends('layouts.backend.main')
@section('content')
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
        <div class="col-lg-5">
            <div class="card my-3">
                <div class="card-header">
                    <h1 class="fs-5 text-center">Titik Jemput</h1>
                </div>
                <div class="card-body">
                    <div class="form-group mt-2">
                        <label for="jemput">Dari</label>
                        <select class="form-control mt-1" name="jemput" id="jemput">
                            <option value="">-- Pilih --</option>
                            <option value="ketapang">Ketapang</option>
                            <option value="pontianak">Pontianak</option>
                            <option value="rasau">Rasau Jaya</option>
                        </select>
                    </div>

                    <div class="form-group mt-2">
                        <label for="telp_jemput">No. Telp</label>
                        <input type="num" name="telp_jemput" class="form-control mt-1" placeholder="628XXXXX">
                    </div>
                    <div class="form-group mt-2">
                        <label for="alamat_jemput">Alamat Lengkap</label>
                        <textarea class="form-control mt-1" name="alamat_jemput" id="alamat_jemput" rows="5"></textarea>
                    </div>
                    <div class="row">
                        <div class="form-group mt-2 col-lg-6">
                            <label for="armada">Jenis Armada</label>
                            <select class="form-control mt-1" name="armada" id="armada">
                                <option value="CDD Box">CDD Box</option>
                                <option value="CDD Reefer">CDD Reefer</option>
                                <option value="Pickup">Pickup</option>
                                <option value="Blindvan">Blindvan</option>
                            </select>
                        </div>
                        <div class="form-group mt-2 col-lg-3">
                            <label for="jadwal">Tanggal Muat</label>
                            <input type="date" name="jadwal" id="jadwal" class="form-control mt-1">
                        </div>
                        <div class="form-group mt-2 col-lg-3">
                            <label for="feed_m">Feed Manager</label>
                            <select class="form-control mt-1" name="feed_m">
                                <option value="0">-- Pilih --</option>
                                <option value="0">tidak</option>
                                <option value="1">ya</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ------------------------------------------------------------------------------------------- --}}
        <div class="col-lg-7">
            <div class="card my-3">
                <div class="card-header">
                    <h1 class="fs-5 text-center">Titik Tujuan </h1>
                    <table class="table table-bordered mt-4" id="dynamicAddRemove">
                        <tr>
                            <th>Alamat</th>
                            <th>Tujuan</th>
                            <th>Telp</th>
                            <th>#</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="alamat_tujuan[]" placeholder="Enter subject"
                                    class="form-control" />
                            </td>
                            <td>
                                <select class="form-control mt-1" name="tujuan[]">
                                    <option value="">-- Pilih --</option>

                                    <option value="ketapang">Ketapang</option>
                                    <option value="pontianak">Pontianak</option>
                                    <option value="rasau">Rasau Jaya</option>
                                </select>
                            </td>
                            <td>
                                <input type="num" name="telp_tujuan[]" class="form-control mt-1" placeholder="628XXXXX">
                            </td>
                            <td>
                                <button type="button" name="add" id="dynamic-ar"
                                    class="btn btn-outline-primary">Add</button>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-body">
                   

                    {{-- <div class="form-group mt-2">
                        <label for="alamat_b">Alamat Penerima</label>
                        <textarea class="form-control mt-1" name="alamat_b" id="alamat_b" rows="5"></textarea>
                    </div> --}}
                    

                    {{-- dinamik --}}
                    {{-- <table class="table table-bordered" id="dynamicAddRemove">
                        <tr>
                            <th>Subject</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td><input type="text" name="addMoreInputFields[0][subject]" placeholder="Enter subject" class="form-control" />
                            </td>
                            <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add</button></td>
                        </tr>
                    </table> --}}

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
        </div>
    </form>
@endsection
