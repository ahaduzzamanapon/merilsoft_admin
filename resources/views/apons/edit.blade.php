@extends('layouts.default')

{{-- Page title --}}
@section('title')
Apon @parent
@stop

@section('content')
   <section class="content-header">
    <div aria-label="breadcrumb" class="card-breadcrumb">
        <h1>{{ __('Edit') }} Apon</h1>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="card">
           <div class="card-body">
                {!! Form::model($apon, ['route' => ['apons.update', $apon->id], 'method' => 'patch','class' => 'form-horizontal']) !!}

                    @include('apons.fields')

                {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
