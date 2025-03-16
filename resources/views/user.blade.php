<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
</head>
<body>
    <h1>Data User</h1>
    <a href="{{ route('user.tambah') }}">+ Tambah User</a> 
    <!--memperbaiki kode, karena href tadi tidak kehubung ke route-->
    <table border="1" cellpadding="2" cellspacing="0">
        <tr>
            <td>ID</td>
            <td>Username</td>
            <td>Nama</td>
            <td>ID Level Pengguna</td>
            <td>Kode Level</td>
            <td>Nama Level</td>
            <td>Aksi</td>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->user_id}}</td>
            <td>{{ $d->username}}</td>
            <td>{{ $d->nama}}</td>
            <td>{{ $d->level_id}}</td>
            <td>{{ $d->level->level_kode}}</td>
            <td>{{ $d->level->level_nama}}</td>
            <td><a href="user/ubah/{{$d->user_id}}">Ubah</a> | <a href="user/hapus/{{$d->user_id}}">Hapus</a></td>
        </tr> 
        @endforeach
    </table>
</body>
</html>