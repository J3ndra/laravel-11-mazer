@props(['id' => 'accordion', 'parent', 'show' => false])

<div class="accordion-item">
    <h2 class="accordion-header" id="header-{{ $id }}">
        {{ $header }}
        {{-- <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            Accordion Item #1
        </button> --}}
    </h2>
    <div {{ $attributes->class(['accordion-collapse collapse', 'show' => $show ]) }} id="{{ $id }}" aria-labelledby="{{ $id }}"
        data-bs-parent="{{ $parent }}">
        <div class="accordion-body">
            {{ $slot }}
        </div>
    </div>
</div>
