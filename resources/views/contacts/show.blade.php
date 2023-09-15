<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-5">
                <h2 class="text-2xl font-bold">{{ $contact->name }}</h2>
                <p class="text-gray-600">Email: {{ $contact->email }}</p>
                <p class="text-gray-600">Phone: {{ $contact->phone }}</p>
                <p class="text-gray-600">Address: {{ $contact->address }}</p>
            </div>
        </div>
    </div>
</x-app-layout>