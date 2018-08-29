@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.clientes.title')</h3>
    
    {!! Form::model($cliente, ['method' => 'PUT', 'route' => ['admin.clientes.update', $cliente->id], 'files' => true,]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nome', trans('global.clientes.fields.nome').'', ['class' => 'control-label']) !!}
                    {!! Form::text('nome', old('nome'), ['class' => 'form-control', 'placeholder' => 'Insira o Nome']) !!}
                    <p class="help-block">Insira o Nome</p>
                    @if($errors->has('nome'))
                        <p class="help-block">
                            {{ $errors->first('nome') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($cliente->imagem)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$cliente->imagem) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$cliente->imagem) }}"></a>
                    @endif
                    {!! Form::label('imagem', trans('global.clientes.fields.imagem').'', ['class' => 'control-label']) !!}
                    {!! Form::file('imagem', ['class' => 'form-control', 'style' => 'margin-top: 4px;']) !!}
                    {!! Form::hidden('imagem_max_size', 5) !!}
                    {!! Form::hidden('imagem_max_width', 4096) !!}
                    {!! Form::hidden('imagem_max_height', 4096) !!}
                    <p class="help-block">Insira a Imagem do Cliente</p>
                    @if($errors->has('imagem'))
                        <p class="help-block">
                            {{ $errors->first('imagem') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

