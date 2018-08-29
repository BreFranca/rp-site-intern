@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.depoimentos.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.depoimentos.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('cliente', trans('global.depoimentos.fields.cliente').'', ['class' => 'control-label']) !!}
                    {!! Form::text('cliente', old('cliente'), ['class' => 'form-control', 'placeholder' => 'Ex: Pestadora de Serviços']) !!}
                    <p class="help-block">Cliente</p>
                    @if($errors->has('cliente'))
                        <p class="help-block">
                            {{ $errors->first('cliente') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('empresa', trans('global.depoimentos.fields.empresa').'', ['class' => 'control-label']) !!}
                    {!! Form::text('empresa', old('empresa'), ['class' => 'form-control', 'placeholder' => 'Ex: Rperformance']) !!}
                    <p class="help-block">Nome da Empresa</p>
                    @if($errors->has('empresa'))
                        <p class="help-block">
                            {{ $errors->first('empresa') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('depoimento', trans('global.depoimentos.fields.depoimento').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('depoimento', old('depoimento'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('depoimento'))
                        <p class="help-block">
                            {{ $errors->first('depoimento') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

