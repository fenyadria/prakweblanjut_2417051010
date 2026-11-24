<div class="table-responsive bg-white rounded shadow-sm p-3 border">
    <table class="table table-hover align-middle mb-0">
        <thead class="table-primary">
            <tr class="table-custom-header">
                <th class="py-3">ID</th>
                <th class="py-3">Nama</th>
                <th class="py-3">NPM / NIM</th>
                <th class="py-3">Kelas</th>
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
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted py-4">Belum ada data pengguna.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>