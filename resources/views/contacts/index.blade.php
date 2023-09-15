<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <x-slot name="action">
        <x-primary-link href="{{ route('contacts.create') }}" class="text-gray-800">{{ __('Create New Contact') }}</x-primary-link>
    </x-slot>

    <section>
        @include('contacts.partials.table')
    </section>

</x-app-layout>
