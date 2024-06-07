@props(['link', 'icon', 'name'])

<li class="sidebar-item">
    @if($link === route('logout'))
        <form action="{{ $link }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn icon icon-left btn-danger btn-block">
                <i data-feather="log-out"></i> {{ $name }}
            </button>
        </form>
    @else
        <a href="{{ $link }}" class="btn icon icon-left btn-primary btn-block">
            <i data-feather="{{ $icon }}"></i> {{ $name }}
        </a>
    @endif
</li>
