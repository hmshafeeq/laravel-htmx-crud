<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Contact') }}
        </h2>
    </x-slot>

    <div class="p-5">
        <form action="{{ route('contacts.store') }}" method="post">
            @csrf
            @include('contacts.partials.form')
        </form>
    </div>

</x-app-layout>