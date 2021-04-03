@extends('layouts.main')
@section('content')
        <div class="container">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                <span>{{ session('success') }}</span>
                <button class="close" data-dismiss="alert">&times;</button>
            </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card shadow">
                        <form id="formStudent" action="{{ route('student.store') }}" method="post">
                            @csrf
                            <div class="card-header py-3">
                                <h2 class="h6 m-0 font-weight-bold text-primary">Tambah Siswa Baru</h2>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nis">*NIS</label>
                                            <input type="number" name="nis" id="nis" class="form-control @error('nis') is-invalid @enderror" required>
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
                                            <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" required>
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
                                            <textarea name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" required></textarea>
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
                                                <option disabled selected>pilih jenis kelamin</option>
                                                <option value="Laki-laki">Laki - laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tempat_lahir">*Tempat Lahir</label>
                                            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" required>
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
                                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" required>
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
                                            <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" required>
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
                                            <input type="text" name="kelas" id="kelas" class="form-control @error('kelas') is-invalid @enderror" required>
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
                                            <input type="text" name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror" required>
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
                                <button class="btn btn-primary shadow" type="submit">Tambah</button>
                                <button class="btn btn-success shadow" type="reset">Clear</button>
                                <a href="{{ route('index') }}" class="btn btn-secondary shadow">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
                        <h3 class="mt-3">Daftar Siswa/i yang telah mendafar</h3>
                        <table class="table table-striped mt-3">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Tempat Lahir</th>
                                    <th scope="col">Tanggal Lahir</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Asal Sekolah</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Jurusan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ( $students as $student )
                            <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $student->nis }}</td>
                                    <td>{{ $student->nama }}</td>
                                    <td>{{ $student->jk }}</td>
                                    <td>{{ $student->tempat_lahir }}</td>
                                    <td>{{ $student->tanggal_lahir }}</td>
                                    <td>{{ $student->alamat }}</td>
                                    <td>{{ $student->asal_sekolah }}</td>
                                    <td>{{ $student->kelas }}</td>
                                    <td>{{ $student->jurusan }}</td>
                                @empty
                                    <td colspan="10" class="text-center">Tidak ada data</td>
                                @endforelse
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>

@endsection
