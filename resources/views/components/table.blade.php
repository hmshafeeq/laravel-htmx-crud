@props(['columns', 'records'])

<table {{ $attributes->merge(['id' => 'table','class' => 'table-auto w-full']) }}>

    @if(isset($columns))
        <x-table.thead :columns="$columns"/>
        @if(isset($records))
            <x-table.tbody :columns="$columns" :records="$records"/>
        @endif
    @endif

    {{ $slot }}

</table>