<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <center>
        <h3 class="h3">Formulir pendaftaran peserta didik baru (PPDB) SMK Semangat 45</h3>
    </center>

    <br>
    <table cellspacing="0" cellpadding="4">
        <tr>
            <th width="1%">Nama</th>
            <td align="right">:</td>
            <td>{{ $student->nama }}</td>
        </tr>
        <tr>
            <th width="1%">Jenis Kelamin</th>
            <td align="right">:</td>
            <td>{{ $student->jk=='L'?'Laki-laki':'Perempuan' }}</td>
        </tr>
        <tr>
            <th width="1%">Alamat</th>
            <td align="right">:</td>
            <td>{{ $student->alamat }}</td>
        </tr>
        <tr>
            <th width="1%">Asal SMP</th>
            <td align="right">:</td>
            <td>{{ $student->asal_smp }}</td>
        </tr>
        <tr>
            <th width="1%">Jurusan</th>
            <td align="right">:</td>
            <td>{{ $student->jurusan }}</td>
        </tr>
    </table>
    <br>
    <br>
        <h6 align="right">Tanda Tangan</h6>
        <h6 align="right">Budi Santoso S.pd</h6>
        <br>
        <br>
        <br>
        <h6 align="right">Bogor,22 April 2021</h6>
</body>
</html>