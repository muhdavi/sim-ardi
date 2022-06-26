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

                    <form method="POST" action="{{ route('perangkat_daerahs.update', $perangkat_daerah) }}">
                        @csrf
                        @method('PUT')

                        <!-- Rel -->
                        <div>
                            <x-label for="perangkat_daerah" :value="__('Nama Perangkat Daerah')" />
                            <x-input id="perangkat_daerah" class="block mt-1 w-full" type="text" name="perangkat_daerah" value="{{old('perangkat_daerah', $perangkat_daerah->perangkat_daerah)}}" required autofocus />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('perangkat_daerahs.index') }}">
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
    @endpush
</x-app-layout>
