<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laporan Transaksi Pembayaran</title>

</head>

<body onload="window.print()">

    <center>

        <h2>Laporan Transaksi Pembayaran</h2>

        //bagian ditandai warna merah dapat diambil di index.blade.php

        <table border="1">

            <thead>

                <tr>

                    <th>No</th>

                    <th>ID Karyawan</th>

                    <th>Absesni</th>

                    <th>Tanggal Rekap</th>

                    <th>Jenis Absen</th>

                    <th>Petugas</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($rekap as $u)
                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        {{-- <td>{{ $u->id_karyawan}} - {{ $u->id_karyawan->nama_karyawan }} </td> --}}

                        <td>{{ $u->Absensi->jenis_absen }} </td>

                        <td>{{ $u->tanggal_absen }}</td>

                        <td>{{ $u->id_user }} {{ $u->User->nama_user }}</td>

                    </tr>
                @endforeach

            </tbody>

        </table>

    </center>

    <div class="kotak" style="margin-left: 800px;">

        <p>Bandung, ......</p>

        <br>

        <br>

        <p>Administrasi Sekolah</p>

    </div>

</body>

</html>
