<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="card-body">
                        <a href="#" class="btn btn-sm btn-success mb-2">Tambah Data</a>
                        <table id="tbl_list_rak" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function () {
                $('#tbl_list_rak').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ url()->current() }}',
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'nama_lengkap' },
                        { data: 'email', name: 'email' },
                    ]
                });
            });
        </script>
    @endpush
</x-app-layout>
