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
                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('users.update', $user) }}">
                        @csrf
                        @method('PUT')

                        <!-- Email Address -->
                        <div>
                            <x-label for="email" :value="__('Email')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{old('email', $user->email)}}" readonly />
                        </div>

                        <!-- Name -->
                        <div class="mt-4">
                            <x-label for="name" :value="__('Nama')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{old('name', $user->name)}}" required autofocus />
                        </div>

                        <!-- Password -->
                        <div class="mt-4">
                            <x-label for="password" :value="__('Password Baru')" />

                            <x-input id="password" class="block mt-1 w-full"
                                     type="password"
                                     name="password"
                                     required autocomplete="new-password" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-label for="password_confirmation" :value="__('Confirm Password Baru')" />

                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                     type="password"
                                     name="password_confirmation" required />
                        </div>

                        <!-- Role -->
                        <div class="mt-4">
                            <x-label for="role" :value="__('Role')" />
                            <div class="relative focus-within:text-gray-600 text-gray-400">
                                <label class="inline-flex items-center">
                                    <input class="form-radio h-5 w-5 text-blue-600" type="radio" name="role" value="1" {{ $selected_role == 1 ? 'checked' : '' }} required autofocus />
                                    <span class="ml-2 text-gray-700">Admin</span>
                                </label>
                                <label class="inline-flex items-center ml-5">
                                    <input class="form-radio h-5 w-5 text-pink-600" type="radio" name="role" value="0" {{ $selected_role == 0 ? 'checked' : '' }} required autofocus />
                                    <span class="ml-2 text-gray-700">Operator</span>
                                </label>
                            </div>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('users.index') }}">
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
    @endpush
</x-app-layout>
