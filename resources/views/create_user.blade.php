@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="card card-custom">
            <div class="card-header card-header-custom text-center">
                <h5 class="card-title mb-0 fw-bold">Buat Pengguna Baru</h5>
                <small class="text-white-50">Isi formulir di bawah ini dengan benar</small>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold text-secondary">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Contoh: Feny Adria" required>
                    </div>

                    <div class="mb-3">
                        <label for="npm" class="form-label fw-semibold text-secondary">NPM</label>
                        <input type="text" class="form-control" id="npm" name="npm" placeholder="Contoh: 2417051010" required>
                    </div>

                    <div class="mb-4">
                        <label for="kelas_id" class="form-label fw-semibold text-secondary">Kelas</label>
                        <select class="form-select" name="kelas_id" id="kelas_id" required>
                            <option value="" selected disabled>-- Pilih Kelas --</option>
                            @foreach ($kelas as $kelasItem)
                                <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-custom-primary">Simpan Data</button>
                        <a href="/user" class="btn btn-light text-secondary border fw-medium" style="border-radius: 8px;">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection