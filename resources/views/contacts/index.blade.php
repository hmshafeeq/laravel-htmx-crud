<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div id="section">
            {{--   Placeholder for the views   --}}
    </div>

    <div id="content">
       
        <div class="flex justify-between p-3">

            <div class="flex">

                <x-text-input name="q" class="px-2 py-1 block" :value="request('q')" placeholder="Search contacts..."
                              hx-get="{{ route('contacts.index') }}"
                              hx-target="#table-container" hx-replace-url="true"
                              hx-trigger="keyup changed delay:500ms, search"/>

            </div>

            <x-primary-link hx-get="{{ route('contacts.create') }}" hx-target="#section">
                {{ __('Create New Contact') }}
            </x-primary-link>

        </div>

       @include('contacts.partials.table')

    </div>

</x-app-layout>
