
    <div class="mb-2">
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', isset($contact) ? $contact->name : null)" required autofocus autocomplete="name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>

    <div class="mb-2">
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', isset($contact) ? $contact->email : null)" required/>
        <x-input-error class="mt-2" :messages="$errors->get('email')"/>
    </div>

    <div class="mb-2">
        <x-input-label for="phone" :value="__('Phone')"/>
        <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', isset($contact) ? $contact->phone : null)" required/>
        <x-input-error class="mt-2" :messages="$errors->get('phone')"/>
    </div>

    <div class="mb-2">
        <x-input-label for="address" :value="__('Address')"/>
        <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', isset($contact) ? $contact->address : null)" required/>
        <x-input-error class="mt-2" :messages="$errors->get('address')"/>
    </div>

    <div class="flex items-center gap-2 mt-4">
        <x-primary-button>{{ __('Save') }}</x-primary-button>
        <x-secondary-button hx-get="{{ route('contacts.index') }}">{{ __('Cancel') }}</x-secondary-button>
    </div>
