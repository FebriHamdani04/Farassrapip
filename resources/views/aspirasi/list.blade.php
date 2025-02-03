<!-- resources/views/aspirasi/list.blade.php -->
@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>List Aspirasi</h5>
    </div>
    <div class="card-body">
        <form method="GET" class="row mb-3">
            <div class="col-md-3">
                <input type="date" name="date" class="form-control" value="{{ request('date') }}">
            </div>
            <div class="col-md-3">
                <select name="month" class="form-control">
                    <option value="">Pilih Bulan</option>
                    @for($i = 1; $i <= 12; $i++)
                        <option value="{{ $i }}" {{ request('month') == $i ? 'selected' : '' }}>
                            {{ date('F', mktime(0, 0, 0, $i, 1)) }}
                        </option>
                    @endfor
                </select>
            </div>
            <div class="col-md-3">
                <select name="nis" class="form-control">
                    <option value="">Pilih Siswa</option>
                    @foreach($siswa as $s)
                        <option value="{{ $s->nis }}" {{ request('nis') == $s->nis ? 'selected' : '' }}>
                            {{ $s->nis }} - {{ $s->kelas }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <select name="kategori" class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach($kategori as $k)
                        <option value="{{ $k->id_kategori }}" {{ request('kategori') == $k->id_kategori ? 'selected' : '' }}>
                            {{ $k->ket_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12 mt-2">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>NIS</th>
                        <th>Kategori</th>
                        <th>Lokasi</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($aspirasi as $item)
                    <tr>
                        <td>{{ $item->created_at->format('d-m-Y') }}</td>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->kategori->ket_kategori }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->ket }}</td>
                        <td>{{ $item->aspirasi->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection