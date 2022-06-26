<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dokumen') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="{{ route('dokumens.store') }}">
                        @csrf

                        <!-- Kode Dokumen -->
                        <div>
                            <x-label for="kode" :value="__('Kode Dokumen')" />
                            <x-input id="kode" class="block mt-1 w-full" type="text" name="kode" :value="old('kode')" required autofocus />
                        </div>

                        <!-- Nama Dokumen -->
                        <div class="mt-4">
                            <x-label for="nama" :value="__('Nama Dokumen')" />
                            <x-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('dokumens.index') }}">
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
