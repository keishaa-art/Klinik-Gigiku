<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmasi</title>
</head>
<body>
    <div class="d-flex">
        <h4>Data Obat</h4>
    </div>
    <div class="d-flex">
        <a href="{{ route('farmasi.create') }}" class="ml-auto">
            <button class="btn btn-primary">Tambah Obat</button>
        </a>
    </div>

    <table class="mt-3 table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Kode Obat</th>
                <th scope="col">Kandungan</th>
                <th scope="col">Bentuk Obat</th>
                <th scope="col">Satuan</th>
                <th scope="col">Pieces</th>
                <th scope="col">Tgl Produksi</th>
                <th scope="col">Tgl Kadaluarsa</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($farmasi as $no => $farmasi)
                <tr>
                    <td> {{ $no + 1 }} </td>
                    <td> {{ $farmasi->nama_obat }} </td>
                    <td> {{ $farmasi->kode_obat }} </td>
                    <td> {{ $farmasi->kandungan }} </td>
                    <td> {{ $farmasi->bentuk_obat }} </td>
                    <td> {{ $farmasi->satuan }} </td>
                    <td> {{ $farmasi->pieces }} </td>
                    <td> {{ $farmasi->tgl_produksi }} </td>
                    <td> {{ $farmasi->tgl_kadaluarsa }} </td>
                    <td> {{ $farmasi->harga }} </td>
                    <td> 
                        <form action="{{ route('farmasi.destroy', $farmasi->id)}}" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data obat ini?')">
                        <a href="{{ route('farmasi.edit', $farmasi->id) }}" class="btn btn-warning">Edit</a>
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
