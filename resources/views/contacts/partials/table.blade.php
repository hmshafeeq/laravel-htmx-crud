<div id="table-container" hx-get="{{ route('contacts.index') }}" hx-trigger="loadContacts from:body">

    <x-table>

        <x-table.thead>
            @foreach (['name', 'email', 'phone', 'address', 'actions'] as $field)
                <x-table.th field="{{ $field }}" />
            @endforeach
        </x-table.thead>

        <x-table.tbody>
            @forelse ($contacts as $contact)
                <x-table.tr id="row-{{ $contact->id }}">
                    <x-table.td>{{ $contact->name }}</x-table.td>
                    <x-table.td>{{ $contact->email }}</x-table.td>
                    <x-table.td>{{ $contact->phone }}</x-table.td>
                    <x-table.td>{{ $contact->address }}</x-table.td>
                    <x-table.td>
                        <x-table.actions.view :record="$contact"/>
                        <x-table.actions.edit :record="$contact"/>
                        <x-table.actions.delete :record="$contact"/>
                    </x-table.td>
                </x-table.tr>
            @empty
                <x-table.tr>
                    <x-table.td colspan="100%">No contacts found.</x-table.td>
                </x-table.tr>
            @endforelse
        </x-table.tbody>

    </x-table>

    <div id="pagination-links" class="p-3" hx-boost="true" hx-target="#table-container">
        {{ $contacts->links() }}
    </div>

</div>