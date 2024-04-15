<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="iewedge">

    <title>Struk</title>

</head>

<body onload="window.print()">

    <table width="400px">

        <tr align="center">

            <td colspan="3"><b>SMK 3 Depok</b></td>

        </tr>

        <tr align="center">

            <td colspan="3">Struk Pembayaran SPP</td>

        </tr>

        <tr>

            <td colspan="3">
                <hr>
            </td>

        </tr>

        <tr>

            <td colspan="2"> Petugas: {{ Auth()->User()->name }}</td>

            <td align="right">Tanggal : <?php echo date('Y/m/d'); ?></td>

        </tr>

        <tr>

            <td colspan="3">
                <hr>
            </td>

        </tr>

        <tr>

            <td> <b>NIS</b> </td>

            <td align="right">:</td>

            <td>{{ $rekap->id_karyawan }}</td>

        </tr>

        <tr>

            <td> <b>Nama</b></td>

            <td align="right">:</td>

            <td>{{ $rekap->Siswa->nama }}</td>

        </tr>

        <tr>

            <td> <b>SPP</b></td>

            <td align="right">:</td>

            <td>{{ $rekap->id_spp }} {{ $rekap->Spp->keterangan }}</td>

        </tr>

        <tr>

            <td> <b>Jumlah Bayar</b></td>

            <td align="right">:</td>

            <td>Rp. {{ number_format($rekap->jumlah_bayar, 2, ',', '.') }}</td>

        </tr>

        <tr>

            <td colspan="3">
                <hr>
            </td>

        </tr>

        <tr>

            <td colspan="3">

                Note:

                <br>

                <b>- Struk ini sebagai bukti rekap</b>

                <br>

                <b>- Harap simpan dengan baik</b>

            </td>

            /tr>

    </table>

</body>

</html>
