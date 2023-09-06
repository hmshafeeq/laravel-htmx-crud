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
                <a href="#" hx-get="/contacts/create" hx-target="#contact-details" >Create New Contact</a>
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
                            @include('contacts.partials.row', compact('contact'))
                        @endforeach
                    </tbody>
                </table> 
            </div>
        </div>
    </div>
</x-app-layout>
