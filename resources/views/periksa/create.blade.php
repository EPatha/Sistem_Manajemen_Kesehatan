@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Buat Janji Periksa</h2>

    <form action="{{ route('periksa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_dokter" class="form-label">Pilih Dokter:</label>
            <select class="form-control" name="id_dokter" required>
                @foreach ($dokter as $d)
                    <option value="{{ $d->id }}">{{ $d->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tgl_periksa" class="form-label">Tanggal Periksa:</label>
            <input type="datetime-local" class="form-control" name="tgl_periksa" required>
        </div>

        <button type="submit" class="btn btn-primary">Buat Janji</button>
    </form>
</div>
@endsection
