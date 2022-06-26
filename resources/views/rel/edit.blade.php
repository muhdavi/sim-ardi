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

                    <form method="POST" action="{{ route('rels.update', $rel) }}">
                        @csrf
                        @method('PUT')

                        <!-- Rel -->
                        <div>
                            <x-label for="rel" :value="__('Rel')" />
                            <x-input id="rel" class="block mt-1 w-full" type="text" name="rel" value="{{old('rel', $rel->rel)}}" required autofocus />
                        </div>

                        <!-- Keterangan -->
                        <div class="mt-4">
                            <x-label for="keterangan" :value="__('Keterangan')" />
                            <x-input id="keterangan" class="block mt-1 w-full" type="text" name="keterangan" value="{{old('keterangan', $rel->keterangan)}}" required />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('rels.index') }}">
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
