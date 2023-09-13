<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex w-full mb-2" style="justify-content: end">
                <x-nav-link href="{{ route('contacts.create') }}">{{ __('Create New Contact') }}</x-nav-link>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

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
                        @foreach($contacts as $contact)
                            <tr>
                                <td class="px-4 py-2 border">{{ $contact->name }}</td>
                                <td class="px-4 py-2 border">{{ $contact->email }}</td>
                                <td class="px-4 py-2 border">{{ $contact->phone }}</td>
                                <td class="px-4 py-2 border">{{ $contact->address }}</td>
                                <td class="px-4 py-2 border ">
                                    <a href="{{ route('contacts.show', $contact->id) }}" class="mr-1 uppercase hover:underline">View</a>
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="mr-1 uppercase hover:underline">Edit</a>

                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?')">

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="mr-1 uppercase hover:underline">
                                            Delete
                                        </button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</x-app-layout>
