@extends('layouts.app')

@section('title', 'Edit Biodata')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Biodata</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Biodata</a></div>
                    <div class="breadcrumb-item">Edit Biodata</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card">
                    <form action="{{ route('biodata.update', $biodata) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Edit Biodata</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nama Asal Sekolah</label>
                                <input type="text" class="form-control @error('NAMA_ASAL_SEKOLAH') is-invalid @enderror" name="NAMA_ASAL_SEKOLAH" value="{{ $biodata->NAMA_ASAL_SEKOLAH }}">
                                @error('NAMA_ASAL_SEKOLAH')
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
                                    @error('JENIS_SEKOLAH')
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
                                    @error('JURUSAN_SEKOLAH')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            <div class="form-group">
                                <label>KOTA SEKOLAH</label>
                                <input type="text" class="form-control @error('KOTA_SEKOLAH') is-invalid @enderror" name="KOTA_SEKOLAH" value="{{ $biodata->KOTA_SEKOLAH }}">
                                @error('KOTA_SEKOLAH')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>JUMLAH NILAI UAN SEKOLAH/RAPORT TERAKHIR SMT SEBELUMNYA</label>
                                <input type="text" class="form-control @error('JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA') is-invalid @enderror" name="JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA" value="{{ $biodata->JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA }}">
                                @error('JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
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
    <!-- JS Libraries -->
    <!-- Page Specific JS File -->
@endpush