{{-- https://github.com/bigskysoftware/htmx/issues/1538 --}}
@if (request()->server('HTTP_HX_REQUEST') && request()->isMethod('post'))
<tbody hx-swap-oob="beforeend:#contacts-table-body">
@endif

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
        <a href="{{ route('contacts.show', $contact->id) }}" class="mr-1 uppercase hover:underline">View</a>
        <a href="{{ route('contacts.edit', $contact->id) }}" class="mr-1 uppercase hover:underline">Edit</a>
        <a href="#" class="mr-1 uppercase hover:underline" hx-delete="/contacts/{{ $contact->id }}"
            hx-confirm="Are you sure you want to delete this contact?"
            hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}'
            hx-target="closest tr" hx-swap="outerHTML swap:400ms">Delete</a>
    </td>
  </tr>
  @if (request()->server('HTTP_HX_REQUEST') && request()->isMethod('post'))
</tbody>
  @endif

