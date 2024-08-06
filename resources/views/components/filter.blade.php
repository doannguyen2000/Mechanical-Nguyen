@props(['filterFormAction' => '', 'buttonSearch' => '0'])
<form action="{{ $filterFormAction }}" method="post">
    <div class="d-none d-md-inline-block">
        @for ($j = 0; $j < 2; $j++)
            <select class="form-select form-select-sm d-inline-block w-auto" aria-label="Default select example">
                @for ($i = 0; $i < 3; $i++)
                    <option value="{{ $i }}">Lựa chọn {{ $i }}</option>
                @endfor
            </select>
        @endfor
    </div>
    <div class="dropdown d-inline-block d-md-none">
        <button class="btn btn-primary btn-sm rounded" type="button" id="userDropdown" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="fa-solid fa-filter"></i>
        </button>
        <ul class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="userDropdown">
            @for ($j = 0; $j < 2; $j++)
                <li>
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        @for ($i = 0; $i < 3; $i++)
                            <option value="{{ $i }}">Lựa chọn {{ $i }}</option>
                        @endfor
                    </select>
                </li>
            @endfor
        </ul>
    </div>
    @if ($buttonSearch)
        <x-button-icon :type="'submit'" :buttonClass="'btn-outline-success'" :spanClass="'d-none d-md-inline-block'" :iconClass="'fa-solid fa-magnifying-glass'" :buttonName="'Duyệt'" />
    @endif
</form>
