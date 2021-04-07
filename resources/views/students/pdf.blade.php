<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>

<body>
    <center>
        <h5>Laporan PDF</h5>
    </center>

    <table class="table table-striped table-bordered" width="100%">
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
            <tbody>
                @foreach ( $students as $student )
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
            </tr>
            @endforeach ( $students as $student )
        </tbody>
    </table>
</body>

</html>
