<tr id="contact-{{ $contact->id }}"
    @if (request()->server('HTTP_HX_REQUEST') && request()->isMethod('put'))
        hx-swap-oob="innerHTML:#contact-{{ $contact->id }}"
    @endif
>
    <td class="px-4 py-2 border">{{ $contact->name }}</td>
    <td class="px-4 py-2 border">{{ $contact->email }}</td>
    <td class="px-4 py-2 border">{{ $contact->phone }}</td>
    <td class="px-4 py-2 border">{{ $contact->address }}</td>
    <td class="px-4 py-2 border ">
        <a hx-get="{{ route('contacts.show', $contact->id) }}" hx-target="#section" class="mr-1 uppercase hover:underline">View</a>
        <a hx-get="{{ route('contacts.edit', $contact->id) }}" hx-target="#section" class="mr-1 uppercase hover:underline">Edit</a>
        <a class="mr-1 uppercase hover:underline" hx-delete="{{ route('contacts.destroy', $contact->id) }}"
           hx-confirm="Are you sure you want to delete this contact?"
           hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}'
           hx-target="closest tr" hx-swap="outerHTML swap:400ms">Delete</a>
    </td>
</tr>

