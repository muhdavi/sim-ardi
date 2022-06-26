<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Rel') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('raks.store') }}">
                        @csrf

                        <!-- Rel -->
                        <div>
                            <x-label for="select_rel" :value="__('Rel')" />
                            <select class="block mt-1 w-full" name="rel_id" id="select_rel" required autofocus></select>
                        </div>

                        <!-- Lemari -->
                        <div class="mt-4">
                            <x-label for="select_lemari" :value="__('Lemari')" />
                            <select class="block mt-1 w-full" name="lemari_id" id="select_lemari" required autofocus></select>
                        </div>

                        <!-- Rak -->
                        <div class="mt-4">
                            <x-label for="rak" :value="__('Rak')" />
                            <x-input id="rak" class="block mt-1 w-full" type="text" name="rak" :value="old('rak')" required autofocus />
                        </div>

                        <!-- Keterangan -->
                        <div class="mt-4">
                            <x-label for="keterangan" :value="__('Keterangan')" />
                            <x-input id="keterangan" class="block mt-1 w-full" type="text" name="keterangan" :value="old('keterangan')" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('raks.index') }}">
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
            $(document).ready(function () {

                $('#select_rel').select2({
                    allowClear: true,
                    placeholder: 'Pilih salah satu rel...',
                    ajax: {
                        url: "{{ route('get_rels') }}",
                        dataType: 'json',
                        delay: 250,
                        processResults: function (data) {
                            return {
                                results: $.map(data, function (item) {
                                    return {
                                        text: item.rel + ' - ' + item.keterangan,
                                        id: item.id
                                    }
                                })
                            };
                        }
                    }
                });

                $('#select_lemari').select2({
                    placeholder: 'Pilih salah satu lemari...',
                });

                $('#select_rel').change( function() {

                    $('#select_lemari').empty();

                    let rel_id = $(this).val();
                    if (rel_id) {
                        $('#select_lemari').select2({
                            allowClear: true,
                            placeholder: 'Pilih salah satu lemari...',
                            ajax: {
                                url: "{{ route('get_lemaris') }}?rel_id=" + rel_id,
                                dataType: 'json',
                                delay: 250,
                                processResults: function (data) {
                                    return {
                                        results: $.map(data, function (item) {
                                            return {
                                                text: item.lemari,
                                                id: item.id
                                            }
                                        })
                                    };
                                }
                            }
                        })
                    } else {
                        $('#select_lemari').empty();
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>
