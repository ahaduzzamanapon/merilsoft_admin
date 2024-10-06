<div class="table-responsive">
    <table class="table" id="fffs-table">
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
        @foreach($fffs as $fff)
            <tr>
                <td>{{ $fff->id }}</td>
            <td>{{ $fff->test }}</td>
            <td>{{ $fff->created_at }}</td>
            <td>{{ $fff->updated_at }}</td>
                <td>
                    {!! Form::open(['route' => ['fffs.destroy', $fff->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fffs.show', [$fff->id]) }}" class='btn btn-outline-primary btn-xs'><i class="im im-icon-Information"></i></a>
                        <a href="{{ route('fffs.edit', [$fff->id]) }}" class='btn btn-outline-primary btn-xs'><i
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
