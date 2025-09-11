<form action="{{ route('jadwalpraktek.update', $jadwal->id) }}" method="POST">
    @csrf @method('PUT')

    @if(auth()->user()->role == 'admin')
        <div class="mb-3">
            <label>Dokter</label>
            <select name="user_id" class="form-control" required>
                @foreach($dokters as $d)
                    <option value="{{ $d->id }}" @selected($jadwal->user_id == $d->id)>
                        {{ $d->name }} - (Cabang: {{ $d->cabang->nama ?? '-' }})
                    </option>
                @endforeach
            </select>
        </div>
    @else
        <p><strong>Dokter:</strong> {{ $jadwal->dokter->name }}</p>
        <p><strong>Cabang:</strong> {{ $jadwal->dokter->cabang->nama ?? '-' }}</p>
    @endif

    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" value="{{ $jadwal->tanggal }}" required>
    </div>

    <div class="mb-3">
        <label>Jam</label>
        <input type="time" name="jam" class="form-control" value="{{ $jadwal->jam }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
