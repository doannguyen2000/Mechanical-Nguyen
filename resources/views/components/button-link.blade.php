@props([
    'buttonClass' => 'btn-outline-secondary',
    'iconClass' => 'fa-solid fa-robot',
    'linkButton' => '#',
    'buttonName' => null,
    'spanClass' => '',
])

<a type="button" class="btn btn-sm {{ $buttonClass }}" href="{{ $linkButton }}">
    <i class="{{ $iconClass }}"></i><span
        class="@if ($buttonName !== null) ms-1 @endif {{ $spanClass }}">{{ $buttonName }}</span>
</a>
