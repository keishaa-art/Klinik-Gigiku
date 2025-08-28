<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Praktek</title>   
</head>

<body>
    <div class="d-flex">
        <h4>Data Jadwal Praktek</h4>
    </div>
    <div class="d-flex">
        <a href="{{ route('jadwalpraktek.create') }}" class="ml-auto">
            <button class="btn btn-primary">Tambah Jadwal</button>
        </a>
    </div>

<table class="table">
    <thead>
        <tr>
            <th>Dokter</th>
            <th>Cabang</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($jadwal as $j)
            <tr>
                <td>{{ $j->dokter->name }}</td>
                <td>{{ $j->dokter->cabang->nama ?? '-' }}</td>
                <td>{{ $j->tanggal }}</td>
                <td>{{ $j->jam }}</td>
                <td>
                    <a href="{{ route('jadwalpraktek.edit', $j->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('jadwalpraktek.destroy', $j->id) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</html>