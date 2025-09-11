<form action="{{ route('jadwalpraktek.store') }}" method="POST">
    @csrf

    @if ($user->role == 'admin')
        <div class="form-group">
            <label for="dokter_id">Pilih Dokter</label>
            <select name="dokter_id" class="form-control" required>
                @foreach($dokter as $d)
                    <option value="{{ $d->id }}">
                        {{ $d->name }} - {{ $d->cabang->nama ?? '-' }}
                    </option>
                @endforeach
            </select>
        </div>
    @else
        {{-- otomatis isi dokter & cabang dari akun login --}}
        <input type="hidden" name="dokter_id" value="{{ $dokter->first()->id }}">
        <p><strong>Dokter:</strong> {{ $dokter->first()->name }}</p>
        <p><strong>Cabang:</strong> {{ $dokter->first()->cabang->nama ?? '-' }}</p>
    @endif

    <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="jam">Jam</label>
        <input type="time" name="jam" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
