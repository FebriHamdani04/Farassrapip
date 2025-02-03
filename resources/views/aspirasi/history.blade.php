<!-- resources/views/aspirasi/history.blade.php -->
@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>Histori Aspirasi</h5>
    </div>
    <div class="card-body">
        <div class="timeline">
            @foreach($history as $item)
            <div class="timeline-item border-left border-primary pl-3 mb-4">
                <div class="d-flex justify-content-between">
                    <h6>{{ $item->updated_at->format('d-m-Y H:i') }}</h6>
                    <span class="badge bg-{{ $item->status == 'Selesai' ? 'success' : ($item->status == 'Ditolak' ? 'danger' : 'warning') }}">
                        {{ $item->status }}
                    </span>
                </div>
                <p class="mb-2">{{ $item->inputAspirasi->ket }}</p>
                <small class="text-muted">
                    Kategori: {{ $item->kategori->ket_kategori }} |
                    Admin: {{ $item->admin->username }}
                </small>
                @if($item->feedback)
                <div class="mt-2">
                    <strong>Feedback:</strong> {{ $item->feedback }}
                </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection