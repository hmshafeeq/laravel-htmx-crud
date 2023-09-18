<div class="p-5 border-b-8 border-b-gray-100">
    <h2 class="text-2xl font-bold">{{ $contact->name }}</h2>
    <p class="text-gray-600">Email: {{ $contact->email }}</p>
    <p class="text-gray-600">Phone: {{ $contact->phone }}</p>
    <p class="text-gray-600">Address: {{ $contact->address }}</p>
    <div class="flex items-center gap-2 mt-4">
        <x-primary-button hx-get="{{ route('contacts.edit', $contact->id) }}" hx-target="#section">{{ __('Edit') }}</x-primary-button>
        <x-secondary-button hx-get="{{ route('contacts.index') }}" hx-target="#section div" hx-swap="delete">{{ __('Go Back') }}</x-secondary-button>
    </div>
</div>