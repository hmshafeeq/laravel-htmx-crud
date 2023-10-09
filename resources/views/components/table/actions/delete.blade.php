@props(['record'])

@php
        $attrs = ['class' => 'mr-1 uppercase hover:underline cursor-pointer'];
        if (isset($record)) {
            $currentRouteName = request()->route()->getName();
            $resourceName = explode('.', $currentRouteName)[0];
            $attrs['hx-delete'] = route($resourceName . '.destroy', $record->id);
            $attrs['hx-confirm'] = 'Are you sure you want to delete this record?';
            $attrs['hx-headers'] = json_encode(['X-CSRF-TOKEN' => csrf_token()]);
        }
@endphp

<a {{ $attributes->merge($attrs) }}>
        @if(isset($slot) && trim($slot) !== '')
                {{ $slot }}
        @else
                Delete
        @endif
</a>
