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

                    <form method="POST" action="{{ route('ardis.store') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- Dokumen -->
                        <div>
                            <x-label for="rel" :value="__('Dokumen')" />
                            <select class="block mt-1 w-full dokumen_id" name="dokumen_id" required autofocus></select>
                        </div>

                        <!-- File -->
                        <div class="mt-4">
                            <x-label for="lemari" :value="__('File')" />
                            <input class="rounded-md shadow-sm border-gray-300 block mt-1 w-full py-2 px-3" type="file" name="file" id="file">
                        </div>

                        <!-- Nomor -->
                        <div class="mt-4">
                            <x-label for="nomor" :value="__('Nomor')" />
                            <x-input id="nomor" class="block mt-1 w-full" type="text" name="nomor" :value="old('nomor')" />
                        </div>

                        <!-- Tanggal -->
                        <div class="mt-4">
                            <x-label for="tanggal" :value="__('Tanggal')" />
                            <x-input class="appearance-none block mt-1 w-full py-3 px-4" type="text" id="tanggal" name="tanggal" autofocus placeholder="2018-07-26"/>
                        </div>

                        <!-- Hidden data -->
                        <input type="hidden" name="pegawai_id" value="{{ $pegawai->id }}">
                        <input type="hidden" name="pegawai_nip" value="{{ $pegawai->nip }}">

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('ardis.edit', $pegawai->id) }}">
                                {{ __('BATAL') }}
                            </a>

                            <x-button class="ml-4">
                                {{ __('SIMPAN') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript">
            $('.dokumen_id').select2({
                placeholder: 'Pilih salah satu dokumen...',
                ajax: {
                    url: "{{ route('get_dokumens') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results:  $.map(data, function (item) {
                                return {
                                    text: item.nama + ' (' + item.kode + ')',
                                    id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });
            $( "#tanggal" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: 'yy-mm-dd',
            });
        </script>
    @endpush
</x-app-layout>
