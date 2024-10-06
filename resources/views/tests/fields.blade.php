<!-- Tet Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('tet', 'Tet:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('tet', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tests.index') }}" class="btn btn-default">Cancel</a>
</div>
