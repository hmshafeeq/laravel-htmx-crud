 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div id="contact-details">

            </div>

            <div class="flex w-full" style="justify-content: end">
                <a href="#" hx-get="/contacts/create" hx-target="#contact-details"
                    x-data=""
                    x-on:click.prevent="$dispatch('open-modal', 'create-contact')">Create New Contact</a>
            </div>
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
 
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border text-left">Name</th>
                            <th class="px-4 py-2 border text-left">Email</th>
                            <th class="px-4 py-2 border text-left">Mobile</th>
                            <th class="px-4 py-2 border text-left">Address</th>
                            <th class="px-4 py-2 border text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <div id="#contact-{{ $contact->id }}"></div>
                            <tr>
                                <td class="px-4 py-2 border">{{ $contact->name }}</td>
                                <td class="px-4 py-2 border">{{ $contact->email }}</td>
                                <td class="px-4 py-2 border">{{ $contact->phone }}</td>
                                <td class="px-4 py-2 border">{{ $contact->address }}</td>
                                <td class="px-4 py-2 border">
                                    <a href="#" hx-get="/contacts/{{ $contact->id }}" hx-target="#contact-details">View</a>
                                    <a href="#" hx-delete="/contacts/{{ $contact->id }}" 
                                        hx-confirm="Are you sure you want to delete this contact?" 
                                        hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}'
                                        hx-target="closest tr" hx-swap="outerHTML swap:1s">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</x-app-layout>
