<table id="contacts-table" class="table-auto w-full"  hx-get="/contacts?table" hx-trigger="newContact from:body">
    <thead>
        <tr>
            <th class="px-4 py-2 border text-left">Name</th>
            <th class="px-4 py-2 border text-left">Email</th>
            <th class="px-4 py-2 border text-left">Phone</th>
            <th class="px-4 py-2 border text-left">Address</th>
            <th class="px-4 py-2 border text-left">Actions</th>
        </tr>
    </thead>
    <tbody id="contacts-table-body">
            @each('contacts.partials.table-row', $contacts, 'contact')
    </tbody>
</table>
