<tr id="contact-{{ $contact->id }}">
    <td class="px-4 py-2 border">{{ $contact->name }}</td>
    <td class="px-4 py-2 border">{{ $contact->email }}</td>
    <td class="px-4 py-2 border">{{ $contact->phone }}</td>
    <td class="px-4 py-2 border">{{ $contact->address }}</td>
    <td class="px-4 py-2 border ">
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
    </td>
</tr>

