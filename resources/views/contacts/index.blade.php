<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex w-full mb-2" style="justify-content: end">
                <x-nav-link href="{{ route('contacts.create') }}" class="text-gray-800">{{ __('Create New Contact') }}</x-nav-link>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                  @include('contacts.partials.table')
            </div>

        </div>
    </div>

</x-app-layout>
