@props([
    'buttonClass' => 'btn-outline-secondary',
    'iconClass' => 'fa-solid fa-robot',
    'buttonName' => null,
    'spanClass' => '',
    'type' => 'button',
])

<button type="{{ $type }}" class="btn btn-sm {{ $buttonClass }}">
    <i class="{{ $iconClass }}"></i><span
        class="@if ($buttonName !== null) ms-1 @endif {{ $spanClass }}">{{ $buttonName }}</span>
</button>
