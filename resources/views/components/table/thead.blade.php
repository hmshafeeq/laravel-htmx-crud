@props(['columns'])

<thead>
    @if(isset($columns) && is_array($columns))
        @foreach ($columns as $column)
            <x-table.th field="{{ $column }}" />
        @endforeach
    @endif
    {{ $slot }}
</thead>
