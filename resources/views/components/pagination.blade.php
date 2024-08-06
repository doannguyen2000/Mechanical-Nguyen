@props(['totalPage', 'currentPage'])

<div class="btn-group" role="group" aria-label="First group">
    @if ($currentPage > 1)
        <button type="button" class="btn btn-sm btn-outline-secondary"
            onclick="window.location='?page={{ $currentPage - 1 }}'">&lt;</button>
        <button type="button" class="btn btn-sm btn-outline-secondary d-none d-lg-block"
            onclick="window.location='?page=1'">1</button>
    @endif


    @if ($currentPage > 3)
        <button type="button" class="btn btn-sm btn-outline-secondary d-none d-lg-block" disabled>...</button>
    @endif

    @if ($currentPage > 2)
        <button type="button" class="btn btn-sm btn-outline-secondary d-none d-lg-block"
            onclick="window.location='?page={{ $currentPage - 1 }}'">{{ $currentPage - 1 }}</button>
    @endif

    <button type="button" class="btn btn-sm btn-secondary">{{ $currentPage }}</button>

    @if ($currentPage < $totalPage - 1)
        <button type="button" class="btn btn-sm btn-outline-secondary d-none d-lg-block"
            onclick="window.location='?page={{ $currentPage + 1 }}'">{{ $currentPage + 1 }}</button>
    @endif

    @if ($currentPage < $totalPage - 2)
        <button type="button" class="btn btn-sm btn-outline-secondary d-none d-lg-block d-none d-lg-block"
            disabled>...</button>
    @endif

    @if ($currentPage < $totalPage)
        <button type="button" class="btn btn-sm btn-outline-secondary d-none d-lg-block"
            onclick="window.location='?page={{ $totalPage }}'">{{ $totalPage }}</button>
        <button type="button" class="btn btn-sm btn-outline-secondary"
            onclick="window.location='?page={{ $currentPage + 1 }}'">&gt;</button>
    @endif
</div>
