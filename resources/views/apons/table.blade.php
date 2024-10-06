<div class="table-responsive">
    <table class="table" id="apons-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Test</th>
        <th>Created At</th>
        <th>Updated At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($apons as $apon)
            <tr>
                <td>{{ $apon->id }}</td>
            <td>{{ $apon->test }}</td>
            <td>{{ $apon->created_at }}</td>
            <td>{{ $apon->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['apons.destroy', $apon->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('apons.show', [$apon->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('apons.edit', [$apon->id]) }}" class='btn btn-outline-primary btn-xs'><i
                                class="im im-icon-File-Edit"></i></a>
                        {!! Form::button('<i class="im im-icon-Remove"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
