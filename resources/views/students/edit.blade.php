@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                <span>{{ session('success') }}</span>
                <button class="close" data-dismiss="alert">&times;</button>
            </div>
            @endif
            <div class="col-lg-12 mx-auto">
                <div class="card shadow">
                    <form id="formStudent" action="{{ route('student.update',$student->id) }}" method="post">
                        @csrf
                        @method('patch')
                        <div class="card-header py-3">
                            <h2 class="h6 m-0 font-weight-bold text-primary">Tambah Siswa Baru</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nis">*NIS</label>
                                        <input type="number" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror" value="{{ $student->nis }}" required>
                                        @error('nis')
                                            <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">*Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $student->nama }}" required>
                                        @error('nama')
                                            <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="alamat">*Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" required>{{ $student->alamat }}</textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jk">*Jenis Kelamin</label>
                                        <select name="jk" id="jk" class="form-control custom-select" required>
                                            <option disabled selected>Pilih jenis kelamin</option>
                                            <option value="Laki-laki" {{ $student->jk == 'Laki-laki' ? 'selected="selected"' : '' }}>Laki-laki</option>
                                            <option value="Perempuan" {{ $student->jk == 'Perempuan' ? 'selected="selected"' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tempat_lahir">*Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ $student->tempat_lahir }}" required>
                                        @error('tempat_lahir')
                                            <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tanggal_lahir">*Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ $student->tanggal_lahir }}" required>
                                        @error('tanggal_lahir')
                                            <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="asal_sekolah">*Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" value="{{ $student->asal_sekolah }}" required>
                                        @error('asal_sekolah')
                                            <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kelas">*Kelas</label>
                                        <input type="text" name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror" value="{{ $student->kelas }}" required>
                                        @error('kelas')
                                            <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jurusan">*Jurusan</label>
                                        <input type="text" name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{ $student->jurusan }}" required>
                                        @error('jurusan')
                                            <div class="invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-primary shadow" type="submit">Update</button>
                                <a href="{{ route('home') }}" class="btn btn-secondary shadow">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection
