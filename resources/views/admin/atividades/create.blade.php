@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.atividades.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.atividades.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nome', trans('global.atividades.fields.nome').'', ['class' => 'control-label']) !!}
                    {!! Form::text('nome', old('nome'), ['class' => 'form-control', 'placeholder' => 'Nome da Atividade']) !!}
                    <p class="help-block">Nome da Atividade</p>
                    @if($errors->has('nome'))
                        <p class="help-block">
                            {{ $errors->first('nome') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('texto', trans('global.atividades.fields.texto').'', ['class' => 'control-label']) !!}
                    {!! Form::text('texto', old('texto'), ['class' => 'form-control', 'placeholder' => 'Texto da Atividade']) !!}
                    <p class="help-block">Texto da Atividade</p>
                    @if($errors->has('texto'))
                        <p class="help-block">
                            {{ $errors->first('texto') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('categoria_id', trans('global.atividades.fields.categoria').'', ['class' => 'control-label']) !!}
                    {!! Form::select('categoria_id', $categorias, old('categoria_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block">Selecione a Categoria</p>
                    @if($errors->has('categoria_id'))
                        <p class="help-block">
                            {{ $errors->first('categoria_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

