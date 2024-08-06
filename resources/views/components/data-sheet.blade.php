@if (!empty($columns))
    <table class="table table-sm table-bordered table-hover mt-1">
        <thead>
            <tr>
                @foreach ($columns as $column)
                    <th scope="col">{{ $column }}</th>
                @endforeach
                @if ($showButton[0] || $editButton[0] || $deleteButton[0])
                    <th scope="col">Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @if (!empty($data))
                @foreach ($data as $row)
                    <tr>

                        @foreach ($row as $cell)
                            <td>{{ $cell }}</td>
                        @endforeach
                        @if ($showButton[0] || $editButton[0] || $deleteButton[0])
                            <td>
                                @if ($showButton[0])
                                    <x-button-link :buttonClass="'btn-primary'" :iconClass="'fas fa-eye'" :linkButton="$showButton[1]" />
                                @endif
                                @if ($editButton[0])
                                    <x-button-link :buttonClass="'btn-warning'" :iconClass="'fas fa-edit'" :linkButton="$editButton[1]" />
                                @endif
                                @if ($deleteButton[0])
                                    <x-button-link :buttonClass="'btn-danger'" :iconClass="'fas fa-trash'" :linkButton="$deleteButton[1]" />
                                @endif
                            </td>
                        @endif
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endif
