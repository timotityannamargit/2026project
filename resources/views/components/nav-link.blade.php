@props(["route", "label"])

@php
    $class = Route::is($route) ? "active" : "";
@endphp
<li>
    <a href ="{{ route($route)  }}" class="{{ $class }}">
        {{ $label }}
    </a>
</li>
