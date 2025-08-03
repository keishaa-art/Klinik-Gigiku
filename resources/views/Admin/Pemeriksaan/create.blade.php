<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pemeriksaan</title>
</head>
<body>
    <div class="d-flex">
        <h4>Tambah Data</h4>
    </div>

    <form action="{{ route('admin.pemeriksaan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label for="detail">Detail</label>
            <input type="text" name="detail" id="detail" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label for="harga">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" required>
        </div>

        <div class="form-group mt-3">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Simpan</button>
        <a href="{{ route('admin.pemeriksaan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</body>
</html>
