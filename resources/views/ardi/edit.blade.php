<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Arsip Digital') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table table-striped table-bordered table-auto">
                        <thead>
                            <tr>
                                <th colspan="6">Data Pegawai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="2">NIP</td>
                                <td colspan="4">{{ $pegawai->nip }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Nama</td>
                                <td colspan="4">{{ $pegawai->nama }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Perangkat Daerah</td>
                                <td colspan="4">{{ $pegawai->perangkat_daerah->perangkat_daerah }}</td>
                            </tr>
                            <tr>
                                <td colspan="2">Keterangan</td>
                                <td colspan="4">{{ $pegawai->keterangan }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center">
                                    <a href="{{ route('ardis.create', $pegawai->id) }}" class="btn btn-sm btn-primary float-right">Tambah Data</a>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Dokumen</th>
                                <th>Nomor</th>
                                <th>Tanggal</th>
                                <th>File</th>
                                <th>-</th>
                            </tr>
                            @php($no=0)
                            @forelse($pegawai->dokumen as $dokumen)
                            <tr>
                                <td class="text-center">{{ $no = $no + 1 }}</td>
                                <td>{{ $dokumen->nama }}</td>
                                <td class="text-center">{{ $dokumen->pivot->nomor ? $dokumen->pivot->nomor : '-' }}</td>
                                <td class="text-center">{{ $dokumen->pivot->tanggal ? $dokumen->pivot->tanggal : '-'}}</td>
                                <td class="text-center">
                                    <a href="{{ route('get_files', [$dokumen->pivot->file, $pegawai->nip]) }}" title="Download File"><i class="fa fa-clipboard"></i><span class="badge badge-pill badge-dark ml-2">Download</span></a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route("ardis.detach", [$dokumen->id, $pegawai->id]) }}"><i class="fa fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center"><i>Data tidak tersedia!</i></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('ardis.index') }}">
                            {{ __('Kembali') }}
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
</x-app-layout>
