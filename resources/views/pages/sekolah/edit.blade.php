@extends('layouts.stisla.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Tambah Profil Sekolah</h1>
    </div>

    <div class="section-body">
        {{-- <form action="{{ route('sekolah.update', ['id' => $sekolah->id]) }}" method="PUT" enctype="multipart/form-data"> --}}
            {!! Form::open(array('route' => ['sekolah.update', $sekolah->id], 'method' => 'put', 'files' => true )) !!}
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Nama Sekolah
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="namasekolah"
                                class="form-control @error('namasekolah') is-invalid @enderror"
                                value="{{ $sekolah->namasekolah }}">
                            @if ($errors->has('namasekolah'))
                            <span class="text-danger">{{ $errors->first('namasekolah') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            NPSN
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="npsn" class="form-control" value="{{ $sekolah->npsn }}">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Bentuk Pendidikan
                        </div>
                        <div class="col-md-8">
                            <select name="bentukpendidikan" id=""
                                class="custom-select text-uppercase @error('bentukpendidikan') is-invalid @enderror">
                                <option value="">Pilih salah satu</option>
                                @foreach ($bentukpendidikan as $bentuk)
                                <option value="{{ $bentuk }}"
                                    {{ $sekolah->bentukpendidikan == $bentuk ? 'selected' : '' }}>{{ $bentuk }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('bentukpendidikan'))
                            <span class="text-danger">{{ $errors->first('bentukpendidikan') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Alamat
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $sekolah->alamat }}">
                            @if ($errors->has('alamat'))
                            <span class="text-danger">{{ $errors->first('alamat') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Kelurahan
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="kelurahan" class="form-control @error('kelurahan') is-invalid @enderror" value="{{ $sekolah->kelurahan }}">
                            @if ($errors->has('kelurahan'))
                            <span class="text-danger">{{ $errors->first('kelurahan') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Kecamatan
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" value="{{ $sekolah->kecamatan }}">
                            @if ($errors->has('kecamatan'))
                            <span class="text-danger">{{ $errors->first('kecamatan') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Kota / Kabupaten
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="kota" class="form-control @error('kota') is-invalid @enderror" value="{{ $sekolah->kota }}">
                            @if ($errors->has('kota'))
                            <span class="text-danger">{{ $errors->first('kota') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Provinsi
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="provinsi" class="form-control @error('provinsi') is-invalid @enderror" value="{{ $sekolah->provinsi }}">
                            @if ($errors->has('provinsi'))
                            <span class="text-danger">{{ $errors->first('provinsi') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Kode Pos
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="kodepos" class="form-control @error('kodepos') is-invalid @enderror" value="{{ $sekolah->kodepos }}">
                            @if ($errors->has('kodepos'))
                            <span class="text-danger">{{ $errors->first('kodepos') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Lintang
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="lintang" class="form-control" value="{{ $sekolah->lintang }}">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Bujur
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="bujur" class="form-control" value="{{ $sekolah->bujur }}">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Telp
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="telp" class="form-control" value="{{ $sekolah->telp }}">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Email
                        </div>
                        <div class="col-md-8">
                            <input type="email" name="email" class="form-control" value="{{ $sekolah->email }}">
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Website
                        </div>
                        <div class="col-md-8">
                            <input type="url" name="website" class="form-control" value="{{ $sekolah->website }}">

                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4 mb-3 text-primary font-weight-bold">
                            Logo
                        </div>
                        <div class="col-md-8">
                            <img src="{{ $sekolah->logo }}" alt="logo sekolah" width="100px">
                            <input type="file" name="logo" class="form-control-file">
                            <input type="hidden" name="oldlogo" value="{{ $sekolah->logo }}">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-warning" href="{{ route('sekolah.index') }}">Batal</a>
                </div>
            </div>
        {{-- </form> --}}
        {!! Form::close() !!}
    </div>
</section>
@endsection

@section('js')
{{-- custom js per page --}}
@endsection
