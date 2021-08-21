@extends('layouts.stisla.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Tambah Profil Sekolah</h1>
    </div>

    <div class="section-body">
        <form action="" method="post">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Nama Sekolah
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        NPSN
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Bentuk Pendidikan
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Alamat
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Kelurahan
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Kecamatan
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Kota / Kabupaten
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Provinsi
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Kode Pos
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Lintang
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Bujur
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Telp
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Email
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Website
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Logo
                    </div>
                    <div class="col-md-8">
                        <input type="text" name="" class="form-control">

                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
    </div>
</section>
@endsection

@section('js')
{{-- custom js per page --}}
@endsection
