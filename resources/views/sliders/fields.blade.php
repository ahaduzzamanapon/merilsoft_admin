<!-- Titel Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('titel', 'Titel:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">
            {!! Form::text('titel', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div


<!-- Image Field -->
<div class="form-group">
    <div class="row">
        {!! Form::label('image', 'Image:',['class'=>'col-md-3 col-lg-3 col-12 control-label']) !!}
        <div class="col-md-9 col-lg-9 col-12">{!! Form::file('image') !!}
        </div>
    </div>
</div <div class="clearfix">
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('sliders.index') }}" class="btn btn-default">Cancel</a>
</div>
