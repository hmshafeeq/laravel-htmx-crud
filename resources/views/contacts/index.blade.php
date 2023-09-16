<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div id="content">

        <div class="flex justify-between p-3">

            <form action="{{ route('contacts.index')  }}" method="get" class="flex gap-2">
                <x-text-input name="q" class="px-2 py-1 block" :value="request('q')"/>
                <x-secondary-button type="submit" class="px-4 py-2">
                    {{ __('Search') }}
                </x-secondary-button>
            </form>

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
                @forelse ($contacts as $contact)
                    @include('contacts.partials.table-row', compact('contact'))
                @empty
                    <tr>
                        <td class="px-4 py-2" colspan="100%">No contacts found.</td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</x-app-layout>
