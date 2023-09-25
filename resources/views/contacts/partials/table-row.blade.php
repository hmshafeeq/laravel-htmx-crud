<x-table.tr id="row-{{ $contact->id }}">
    <x-table.td>{{ $contact->name }}</x-table.td>
    <x-table.td>{{ $contact->email }}</x-table.td>
    <x-table.td>{{ $contact->phone }}</x-table.td>
    <x-table.td>{{ $contact->address }}</x-table.td>
    <x-table.td>
        <a class="mr-1 uppercase hover:underline"
           hx-get="{{ route('contacts.show', $contact->id) }}"
           hx-target="#section">View</a>

        <a class="mr-1 uppercase hover:underline"
           hx-get="{{ route('contacts.edit', $contact->id) }}"
           hx-target="#section">Edit</a>

        <a class="mr-1 uppercase hover:underline"
           hx-delete="{{ route('contacts.destroy', $contact->id) }}"
           hx-confirm="Are you sure you want to delete this contact?"
           hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}'>Delete</a>
    </x-table.td>
</x-table.tr>

