<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('contacts.update', $contact->id) }}" method="post">
                @csrf
                @method('PUT')
                @include('contacts.partials.form')
            </form>
        </div>
    </div>
</x-app-layout>