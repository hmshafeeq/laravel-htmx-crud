<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div id="content">

        <div class="text-md w-full justify-end bg-gray-100 text-right">
            <x-primary-link href="{{ route('contacts.create') }}">
                {{ __('Create New Contact') }}
            </x-primary-link>
        </div>

        <table id="contacts-table" class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 border text-left">Name</th>
                    <th class="px-4 py-2 border text-left">Email</th>
                    <th class="px-4 py-2 border text-left">Phone</th>
                    <th class="px-4 py-2 border text-left">Address</th>
                    <th class="px-4 py-2 border text-left">Actions</th>
                </tr>
            </thead>
            <tbody id="contacts-table-body">
                @each('contacts.partials.table-row', $contacts, 'contact')
            </tbody>
        </table>

    </div>

</x-app-layout>
