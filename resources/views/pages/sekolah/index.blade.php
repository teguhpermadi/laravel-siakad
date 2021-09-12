@extends('layouts.stisla.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Profil Sekolah</h1>
    </div>

    <div class="section-body">

      {{-- @empty($sekolah) --}}
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title text-warning"><i class="fas fa-exclamation-circle float-left mr-2"></i> Peringatan</h5>
                <p class="card-text">Data Profil Sekolah anda belum lengkap, silahkan hubungi admin!</p>
                @can('create profil sekolah')
                <a href="{{ route('sekolah.create') }}" class="btn btn-warning">Tambah Profil Sekolah</a>
                @endcan
            </div>
        </div>
      {{-- @endempty --}}

        @foreach ($sekolah as $s)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Nama Sekolah
                    </div>
                    <div class="col-md-8">
                        {{ $s->namasekolah }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        NPSN
                    </div>
                    <div class="col-md-8">
                        {{ $s->npsn }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Bentuk Pendidikan
                    </div>
                    <div class="col-md-8">
                        {{ $s->bentukpendidikan }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Alamat
                    </div>
                    <div class="col-md-8">
                        {{ $s->alamat }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Kelurahan
                    </div>
                    <div class="col-md-8">
                        {{ $s->kelurahan }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Kecamatan
                    </div>
                    <div class="col-md-8">
                        {{ $s->kecamatan }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Kota / Kabupaten
                    </div>
                    <div class="col-md-8">
                        {{ $s->kota }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Provinsi
                    </div>
                    <div class="col-md-8">
                        {{ $s->provinsi }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Kode Pos
                    </div>
                    <div class="col-md-8">
                        {{ $s->kodepos }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Lintang
                    </div>
                    <div class="col-md-8">
                        {{ $s->lintang }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Bujur
                    </div>
                    <div class="col-md-8">
                        {{ $s->bujur }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Telp
                    </div>
                    <div class="col-md-8">
                        {{ $s->telp }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Email
                    </div>
                    <div class="col-md-8">
                        {{ $s->email }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Website
                    </div>
                    <div class="col-md-8">
                        {{ $s->website }}

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3 text-primary font-weight-bold">
                        Logo
                    </div>
                    <div class="col-md-8">
                        <img src="{{ Storage::url("{$s->logo}") }}" alt="logo sekolah" width="100px">

                    </div>
                </div>
            </div>
            @can('edit profil sekolah')
            <div class="card-footer">
                <a class="btn btn-warning" href="{{ route('sekolah.edit', $s->id) }}">Edit Profil Sekolah</a>
            </div>
            @endcan
        </div>
        @endforeach

    </div>
</section>
@endsection

@section('js')
{{-- custom js per page --}}
@endsection
