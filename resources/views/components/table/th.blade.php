@props(['field'])

@php
    $sortField = request('sort_field');
    $sortDir = (request('sort_dir', 'asc') === 'asc') ? 'desc' : 'asc';
    $sortIcon = fn($field) => ($sortField === $field) ? ($sortDir === 'asc' ? '↑' : '↓') : '';
    $hxGetUrl = fn($field) => request()->fullUrlWithQuery(['sort_field' => $field, 'sort_dir' => $sortDir]);
@endphp

<th {{ $attributes->merge([
    'class' => 'px-4 py-2 border text-left cursor-pointer',
    'hx-get' => $hxGetUrl($field),
    'hx-trigger' => 'click',
    'hx-replace-url' => 'true',
    'hx-swap' => 'outerHTML',
    'hx-target' => '#table-container',
]) }}>
    @if(isset($slot) && trim($slot) !== '')
        {{ $slot }}
    @else
        <span>{{ Str::title($field) }}</span>
    @endif
    <span class="ml-1" role="img">{{ $sortIcon($field) }}</span>
</th>
