<div class="p-5 border-b-8 border-b-gray-100">
    <form hx-post="{{ route('contacts.store') }}" hx-target="#section div" hx-swap="delete">
        @csrf
        @include('contacts.partials.form')
    </form>
</div>