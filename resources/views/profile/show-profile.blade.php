<x-app-layout>
    <x-slot name="header">
        <h2>Mijn profiel</h2>
    </x-slot>

    <div style="padding:40px">
        <h3>TEST PROFIEL</h3>

        <p>Naam: {{ $user->name }}</p>
        <p>Email: {{ $user->email }}</p>
        <p>Telefoon: {{ $user->phone }}</p>
        <p>Adres: {{ $user->address }}</p>
        <p>Geboortedatum: {{ $user->birth_date }}</p>
    </div>
</x-app-layout>
