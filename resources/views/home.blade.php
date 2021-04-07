@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible">
                <span>{{ session('success') }}</span>
                <button class="close" data-dismiss="alert">&times;</button>
            </div>
            @endif
            <h3>Data Siswa/i yang telah mendaftar</h3>
            <a href="{{ route('student.pdf') }}" class="btn btn-sm btn-primary">Print</a>
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
                        <th scope="col">Aksi</th>
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
                            <td>
                                <a href="{{ route('student.edit',$student->id) }}" class="btn btn-sm btn-success mb-2">Edit</a>
                                <form class="d-inline" action="{{ route('student.destroy',$student->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                </form>
                            </td>

                        @empty
                            <td colspan="11" class="text-center">Tidak ada data</td>
                        @endforelse
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
