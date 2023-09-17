<div class="p-5 border-b-8 border-b-gray-100">
    <form hx-put="{{ route('contacts.update', $contact->id) }}" hx-target="#section div" hx-swap="delete">
        @csrf
        @method('PUT')
        @include('contacts.partials.form')
    </form>
</div>
