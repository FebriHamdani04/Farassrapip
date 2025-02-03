<!-- resources/views/aspirasi/feedback.blade.php -->
@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Umpan Balik Aspirasi</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Aspirasi</th>
                        <th>Status</th>
                        <th>Feedback</th>
                        <th>Admin</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedback as $item)
                    <tr>
                        <td>{{ $item->updated_at->format('d-m-Y') }}</td>
                        <td>{{ $item->inputAspirasi->ket }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->feedback }}</td>
                        <td>{{ $item->admin->username }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection