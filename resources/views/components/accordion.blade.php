@props(['id', 'flush' => false ])

<div {{ $attributes->class(['accordion', 'accordion-flush' => $flush ]) }} id="{{ $id }}">
    {{ $slot }}
</div>
