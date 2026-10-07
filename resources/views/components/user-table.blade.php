<div class="table-responsive bg-white rounded shadow-sm p-3 border">
    <table class="table table-hover align-middle mb-0">
        <thead class="table-primary">
            <tr class="table-custom-header">
                <th class="py-3">ID</th>
                <th class="py-3">Nama</th>
                <th class="py-3">NPM / NIM</th>
                <th class="py-3">Kelas</th>
                <th class="py-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td class="fw-bold" style="color: var(--glaucous);">{{ $user->id }}</td>
                    <td>{{ $user->nama }}</td>
                    <td>{{ $user->npm ?? $user->nim }}</td>
                    <td>
                        <span class="badge px-3 py-2" style="color: var(--black); font-weight: 600;">
                            {{ $user->nama_kelas ?? '-' }}
                        </span>
                    </td>

                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">

                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-edit-user">
                                Edit
                            </a>
                            
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus data {{ $user->nama }}?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-sm btn-delete-user">
                                    Hapus
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-4">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<style>
    .btn-edit-user,
    .btn-delete-user {
        border-radius: 8px;
        padding: 7px 12px;
        font-weight: 600;
        transition: all 0.2s ease;
    }

    .btn-edit-user {
        background-color: #e8f1ff;
        color: #2563eb;
        border: 1px solid #cfe0ff;
    }

    .btn-edit-user:hover {
        background-color: #2563eb;
        color: white;
        transform: translateY(-1px);
    }

    .btn-delete-user {
        background-color: #ffe9e9;
        color: #dc2626;
        border: 1px solid #ffd0d0;
    }

    .btn-delete-user:hover {
        background-color: #dc2626;
        color: white;
        transform: translateY(-1px);
    }
</style>