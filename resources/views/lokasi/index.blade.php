<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lokasi') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('lokasis.create') }}" class="btn btn-sm btn-primary float-right mb-2">Generate Lokasi</a>
                    <table class="table table-striped table-bordered tbl_list">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Rel</th>
                            <th>Lemari</th>
                            <th>Rak</th>
                            <th>Nomor Urut</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>-</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function () {
                $('.tbl_list').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ url()->current() }}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'rel', name: 'id' },
                        { data: 'lemari', name: 'id' },
                        { data: 'rak', name: 'id' },
                        { data: 'nomor_urut', name: 'nomor_urut' },
                        { data: 'lokasi', name: 'lokasi' },
                        {
                            data: 'pegawai_id',
                            "render": function (data, type, row) {
                                if (row.pegawai_id == null) {
                                    return '<span class="badge badge-pill badge-secondary">Kosong</span>';
                                } else {
                                    return '<span class="badge badge-pill badge-success">Isi</span>';
                                }
                            },
                            orderable: false,
                            searchable: false,
                        },
                        { data: 'keterangan', name: 'keterangan' },
                        { data: 'action', name: 'action', orderable: false, searchable: false },
                    ]
                });
            });
        </script>
    @endpush
</x-app-layout>
