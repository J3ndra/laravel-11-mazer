@props([ 'icon', 'route' => null, 'link' => null, 'name', 'active' => false ])

<li class="sidebar-item {{ request()->routeIs($route) ? 'active' : '' }} {{ $slot->isEmpty() ? '' : 'has-sub' }}">
    <a href="{{ $slot->isEmpty() ? $link : '#'}}" class='sidebar-link'>
        <i class="{{ $icon }}"></i>
        <span>{{ $name }}</span>
    </a>
    @if (!$slot->isEmpty())
        <ul class="submenu {{ request()->routeIs($route) ? 'active' : '' }}">
            {{ $slot ?? '' }}
        </ul>
    @endif
</li>
