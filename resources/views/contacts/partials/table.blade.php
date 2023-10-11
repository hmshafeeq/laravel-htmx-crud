<div id="table-container" hx-get="{{ route('contacts.index') }}" hx-trigger="loadContacts from:body">

    <x-table :columns="['name', 'email', 'phone', 'address', 'actions']" >
        <x-table.tbody :columns="['name', 'email', 'phone', 'address', 'actions']" :records="$contacts">

{{--            <?php  $__env->slot('actions', function($record) use ($__env) { ?>--}}
{{--                <x-table.actions.view :record="$record"/>--}}
{{--                <x-table.actions.edit :record="$record"/>--}}
{{--            <?php }); ?>--}}

        </x-table.tbody>
    </x-table>

    <div id="pagination-links" class="p-3" hx-boost="true" hx-target="#table-container">
        {{ $contacts->links() }}
    </div>

</div>
