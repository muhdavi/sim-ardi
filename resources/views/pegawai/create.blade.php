<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('pegawais.store') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-label for="nip" :value="__('NIP')" />
                            <x-input id="nip" class="block mt-1 w-full" type="text" name="nip" :value="old('nip')" required autofocus />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-label for="nama" :value="__('Nama')" />
                            <x-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="keterangan" :value="__('Keterangan')" />
                            <x-input id="keterangan" class="block mt-1 w-full" type="text" name="keterangan" :value="old('keterangan')" required />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Perangkat Daerah')" />
                            <select class="block mt-1 w-full perangkat_daerah_id" name="perangkat_daerah_id" required autofocus></select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('pegawais.index') }}">
                                {{ __('Batal') }}
                            </a>

                            <x-button class="ml-4">
                                {{ __('Simpan') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript">
            $('.perangkat_daerah_id').select2({
                placeholder: 'Pilih salah satu perangkat daerah...',
                ajax: {
                    url: "{{ route('get_perangkat_daerahs') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results:  $.map(data, function (item) {
                                return {
                                    text: item.perangkat_daerah,
                                    id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });
        </script>
    @endpush
</x-app-layout>
