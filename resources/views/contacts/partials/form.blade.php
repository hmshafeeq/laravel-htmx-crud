<form 
  @if (isset($contact))
    hx-put="{{ route('contacts.update', $contact->id) }}"
  @else
    hx-post="{{ route('contacts.store') }}"
  @endif
  hx-target="this"
  hx-swap="delete"
  class="mt-6 space-y-5 p-5">
  @csrf 
<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', isset($contact) ? $contact->name : null)" required autofocus autocomplete="name" />
    <x-input-error class="mt-2" :messages="$errors->get('name')" />
</div>

<div>
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', isset($contact) ? $contact->email : null)" required />
    <x-input-error class="mt-2" :messages="$errors->get('email')" />
</div>

{{-- <div>
    <x-input-label for="phone" :value="__('Phone')" />
    <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', isset($contact) ? $contact->phone : null)" required />
    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
</div>

<div>
    <x-input-label for="address" :value="__('Address')" />
    <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', isset($contact) ? $contact->address : null)" required />
    <x-input-error class="mt-2" :messages="$errors->get('address')" />
</div> --}}

<div class="flex items-center gap-4">
  <x-primary-button>{{ __('Save') }}</x-primary-button>  
  <x-secondary-button hx-on:click="document.getElementById('contact-details').innerHTML=''">{{ __('Cancel') }}</x-secondary-button>
</div> 
</form>