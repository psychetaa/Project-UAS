@extends('layouts.app')

@section('title', 'New Biodata')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Subject</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Biodata</a></div>
                    <div class="breadcrumb-item">New Biodata</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('biodata.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Biodata</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>NAMA ASAL SEKOLAH</label>
                                <input type="text"
                                    class="form-control @error('NAMA_ASAL_SEKOLAH')
                                    is-invalid
                                @enderror"
                                    name="NAMA_ASAL_SEKOLAH">
                                @error('NAMA ASAL SEKOLAH')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                    <label>JENIS SEKOLAH</label>
                                    <select class="form-control @error('JENIS_SEKOLAH') is-invalid @enderror" name="JENIS_SEKOLAH">
                                        <option value="" {{ old('JENIS_SEKOLAH') === '' ? 'selected' : '' }}>Pilih JENIS SEKOLAH</option>
                                        <option value="SMK" {{ old('JENIS_SEKOLAH') === 'SMK' ? 'selected' : '' }}>SMK</option>
                                        <option value="MA" {{ old('JENIS_SEKOLAH') === 'MA' ? 'selected' : '' }}>MA</option>
                                        <option value="SMA" {{ old('JENIS_SEKOLAH') === 'SMA' ? 'selected' : '' }}>SMA</option>
                                    </select>
                                    @error('JENIS SEKOLAH')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label>JURUSAN SEKOLAH</label>
                                    <select class="form-control @error('JURUSAN_SEKOLAH') is-invalid @enderror" name="JURUSAN_SEKOLAH">
                                        <option value="" {{ old('JURUSAN_SEKOLAH') === '' ? 'selected' : '' }}>Pilih JURUSAN SEKOLAH</option>
                                        <option value="TKJ" {{ old('JURUSAN_SEKOLAH') === 'TKJ' ? 'selected' : '' }}>TKJ</option>
                                        <option value="MULTIMEDIA" {{ old('JURUSAN_SEKOLAH') === 'MULTIMEDIA' ? 'selected' : '' }}>MULTIMEDIA</option>
                                        <option value="AKUTANSI" {{ old('JURUSAN_SEKOLAH') === 'AKUTANSI' ? 'selected' : '' }}>AKUTANSI</option>
                                        <option value="PERKANTORAN" {{ old('JURUSAN_SEKOLAH') === 'PERKANTORAN' ? 'selected' : '' }}>PERKANTORAN</option>
                                        <option value="IPA" {{ old('JURUSAN_SEKOLAH') === 'IPA' ? 'selected' : '' }}>IPA</option>
                                        <option value="IPS" {{ old('JURUSAN_SEKOLAH') === 'IPS' ? 'selected' : '' }}>IPS</option>
                                        <option value="AGAMA" {{ old('JURUSAN_SEKOLAH') === 'AGAMA' ? 'selected' : '' }}>AGAMA</option>
                                    </select>
                                    @error('JURUSAN SEKOLAH')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <label>KOTA SEKOLAH</label>
                                <input type="text" class="form-control" name="KOTA_SEKOLAH">
                            </div>
                            <div class="form-group">
                                <label>JUMLAH NILAI UAN SEKOLAH/RAPORT TERAKHIR SMT SEBELUMNYA</label>
                                <input type="text" class="form-control" name="JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA">
                            </div>
                            
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush