<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mijn profiel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            {{-- MIJN GEGEVENS (READ ONLY) --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">
                        Mijn gegevens
                    </h3>

                    <div class="space-y-2 text-gray-700">
                        <p><strong>Naam:</strong> {{ auth()->user()->name }}</p>
                        <p><strong>E-mail:</strong> {{ auth()->user()->email }}</p>
                        <p><strong>Telefoon:</strong> {{ auth()->user()->phone }}</p>
                        <p><strong>Adres:</strong> {{ auth()->user()->address }}</p>
                        <p><strong>Geboortedatum:</strong> {{ auth()->user()->birth_date }}</p>
                    </div>
                </div>
            </div>

            {{-- PROFIEL BIJWERKEN (BREEZE) --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                </div>
            </div>

            {{-- WACHTWOORD WIJZIGEN --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                </div>
            </div>

            {{-- ACCOUNT VERWIJDEREN --}}
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
