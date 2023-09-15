<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Contact') }}
        </h2>
    </x-slot>


    <div class="p-5">
        <h2 class="text-2xl font-bold">{{ $contact->name }}</h2>
        <p class="text-gray-600">Email: {{ $contact->email }}</p>
        <p class="text-gray-600">Phone: {{ $contact->phone }}</p>
        <p class="text-gray-600">Address: {{ $contact->address }}</p>
        <div class="flex items-center gap-4 mt-4">
            <x-primary-button onclick="window.location = '{{ route('contacts.edit', $contact->id) }}'">{{ __('Edit') }}</x-primary-button>
            <x-secondary-button onclick="window.location = '{{ route('contacts.index') }}'">{{ __('Go Back') }}</x-secondary-button>
        </div>
    </div>

</x-app-layout>