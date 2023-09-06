<tr id="contact-{{ $contact->id }}">
  <td class="px-4 py-2 border">{{ $contact->name }}</td>
  <td class="px-4 py-2 border">{{ $contact->email }}</td>
  <td class="px-4 py-2 border">{{ $contact->phone }}</td>
  <td class="px-4 py-2 border">{{ $contact->address }}</td>
  <td class="px-4 py-2 border">
      <a href="#" hx-get="/contacts/{{ $contact->id }}" hx-target="#contact-details">View</a>
      <a href="#" hx-delete="/contacts/{{ $contact->id }}" 
          hx-confirm="Are you sure you want to delete this contact?" 
          hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}'
          hx-target="closest tr" hx-swap="outerHTML swap:1s">Delete</a>
  </td>
</tr>