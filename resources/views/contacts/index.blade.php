 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
     
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div id="contact-details"
                class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-3">
            </div>

            <div class="flex w-full mb-2" style="justify-content: end"> 
                <x-primary-button hx-get="/contacts/create" hx-target="#contact-details">{{ __('Create New Contact') }}</x-primary-button>  
            </div>
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                   @include('contacts.partials.table')
            </div>
        </div>
    </div>
  
</x-app-layout>
