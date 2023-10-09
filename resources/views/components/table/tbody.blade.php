@props(['columns', 'records'])

<tbody {{ $attributes->merge(['id' => 'table-body']) }}>
    @if(isset($records))
        @forelse ($records as $record)
            <x-table.tr id="row-{{ $record->id }}">
                @foreach($columns as $column)
                    <x-table.td>
                        @if($column === 'actions')
                            @if(isset($actions))
                                {{ $actions($record) }}
                            @else
                                <x-table.actions.view :record="$record"/>
                                <x-table.actions.edit :record="$record"/>
                                <x-table.actions.delete :record="$record"/>
                            @endif
                        @else
                            {{ $record->{$column} }}
                        @endif
                    </x-table.td>
                @endforeach
            </x-table.tr>
        @empty
            <x-table.tr>
                <x-table.td colspan="100%">No record found.</x-table.td>
            </x-table.tr>
        @endforelse
    @endif
    {{ $slot }}
</tbody>
