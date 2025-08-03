<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemeriksaan</title>
</head>
<body>
    <div class="d-flex">
        <h4>Data Harga Pemeriksaan</h4>
    </div>
    <div class="d-flex">
        <a href="{{ route('admin.pemeriksaan.create') }}" class="ml-auto">
            <button class="btn btn-primary">Tambah Data</button>
        </a>
    </div>

    <table class="mt-3 table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Detail Pemeriksaan</th>
                <th scope="col">Harga</th>
                <th scope="col">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemeriksaan as $no => $pemeriksaan)
                <tr>
                    <td> {{ $no + 1 }} </td>
                    <td> {{ $pemeriksaan->nama }} </td>
                    <td> {{ $pemeriksaan->detail }} </td>
                    <td> {{ $pemeriksaan->harga }} </td>
                    <td>
                        @if ($pemeriksaan->gambar)
                            <img src="{{ asset('storage/' . $pemeriksaan->gambar) }}" alt="Foto Pemeriksaan" width="100">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>
                    <td> 
                        <form action="{{ route('admin.pemeriksaan.destroy', $pemeriksaan->id)}}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                        <a href="{{ route('admin.pemeriksaan.edit', $pemeriksaan->id) }}" class="btn btn-warning">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Hapus</button>
                        </form>     
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
