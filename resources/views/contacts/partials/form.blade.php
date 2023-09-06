<x-modal name="create-contact" :show="$errors->isEmpty()" hx-trigger="submit" focusable>
<form method="post" action="{{ route('contacts.store') }}" class="mt-6 space-y-6 p-6" >
  @csrf
<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus autocomplete="name" />
    <x-input-error class="mt-2" :messages="$errors->get('name')" />
</div>

<div>
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email')" required />
    <x-input-error class="mt-2" :messages="$errors->get('email')" />
</div>

<div>
    <x-input-label for="phone" :value="__('Phone')" />
    <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone')" required />
    <x-input-error class="mt-2" :messages="$errors->get('phone')" />
</div>

<div>
    <x-input-label for="address" :value="__('Address')" />
    <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address')" required />
    <x-input-error class="mt-2" :messages="$errors->get('address')" />
</div>

<div class="flex items-center gap-4">
  <x-primary-button>{{ __('Save') }}</x-primary-button>  
  <x-secondary-button x-on:click="$dispatch('close')">{{ __('Cancel') }}</x-secondary-button>  
</div> 
</form>
</div>
</x-modal>