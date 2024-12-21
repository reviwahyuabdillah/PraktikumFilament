<x-filament-panels::page>

    <h2 class="text-2xl font-bold">Laporan Dosen</h2>
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">NIDN</th>
                <th class="border border-gray-300 px-4 py-2">Nama</th>
                <th class="border border-gray-300 px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach (\App\Models\Dosen::all() as $dosen)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $dosen->nidn }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dosen->nama }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $dosen->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <h2 class="text-2xl font-bold mt-6">Laporan Mata Kuliah</h2>
    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">Kode</th>
                <th class="border border-gray-300 px-4 py-2">Nama</th>
                <th class="border border-gray-300 px-4 py-2">SKS</th>
            </tr>
        </thead>
        <tbody>
            @foreach (\App\Models\Makul::all() as $makul)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $makul->kode }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $makul->nama }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $makul->sks }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


</x-filament-panels::page>
