@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold mb-1">Daftar Pengguna</h2>
        <p class="text-muted small mb-0">Kelola dan lihat data seluruh pengguna</p>
    </div>
    <a href="/user/create" class="btn btn-custom-primary shadow-sm px-3 py-2">
        + Tambah User
    </a>
</div>

{{-- Memanggil Komponen Tabel --}}
@include('components.user-table', ['users' => $users])
@endsection