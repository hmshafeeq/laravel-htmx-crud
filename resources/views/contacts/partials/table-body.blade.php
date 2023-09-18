@forelse ($contacts as $contact)
    @include('contacts.partials.table-row', compact('contact'))
@empty
    <tr>
        <td class="px-4 py-2" colspan="100%">No contacts found.</td>
    </tr>
@endforelse
