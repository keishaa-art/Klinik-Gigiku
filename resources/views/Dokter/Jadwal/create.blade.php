<form action="{{ route('jadwalpraktek.store') }}" method="POST">
    @csrf

    {{-- kalau admin login --}}
@if(auth()->user()->role == 'admin')
    <div class="form-group">
        <label for="dokter_id">Pilih Dokter</label>
        <select name="dokter_id" id="dokter_id" class="form-control" required>
            <option value="">-- Pilih Dokter --</option>
            @foreach($dokter as $d)
                <option value="{{ $d->id }}">{{ $d->nama }}</option>
            @endforeach
        </select>
    </div>
@else
    {{-- kalau dokter login --}}
    <input type="hidden" name="dokter_id" value="{{ auth()->user()->dokter->id }}">
    <div class="form-group">
        <label>Dokter</label>
        <p>{{ auth()->user()->dokter->nama }}</p>
    </div>
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
