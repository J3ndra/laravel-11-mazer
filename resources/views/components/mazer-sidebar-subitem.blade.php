@props(['link', 'route' => null, 'name', 'active' => false])
<li class="submenu-item {{ request()->routeIs($route) ? 'active' : '' }} {{ $slot->isEmpty() ? '' : 'has-sub' }}">
    <a href="{{ $link }}" class="submenu-link">{{ $name }}</a>
    @if (!$slot->isEmpty())
        <ul class="submenu {{ request()->routeIs($route) ? 'active' : '' }}">
            {{ $slot ?? '' }}
        </ul>
    @endif
</li>
