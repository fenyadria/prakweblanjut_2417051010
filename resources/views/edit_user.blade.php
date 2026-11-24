@extends('layouts.app')

@section('content')

<div class="container">
    <div class="mb-4">
        <h2 class="fw-bold">Edit Data Mahasiswa</h2>
        <p class="text-muted">Perbarui informasi mahasiswa</p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Nama Mahasiswa
                    </label>

                    <input
                        type="text"
                        name="nama"
                        class="form-control"
                        value="{{ $user->nama }}"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        NPM
                    </label>

                    <input
                        type="text"
                        name="npm"
                        class="form-control"
                        value="{{ $user->nim }}"
                        required
                    >
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        Kelas
                    </label>

                    <select name="kelas_id" class="form-select" required>
                        @foreach($kelas as $k)
                            <option
                                value="{{ $k->id }}"
                                {{ $user->kelas_id == $k->id ? 'selected' : '' }}
                            >
                                {{ $k->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('user.index') }}"
                       class="btn btn-secondary">
                        Batal
                    </a>

                    <button type="submit"
                            class="btn btn-primary">
                        Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection