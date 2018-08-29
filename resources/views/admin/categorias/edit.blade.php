@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.categorias.title')</h3>
    
    {!! Form::model($categoria, ['method' => 'PUT', 'route' => ['admin.categorias.update', $categoria->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('categoria', trans('global.categorias.fields.categoria').'', ['class' => 'control-label']) !!}
                    {!! Form::text('categoria', old('categoria'), ['class' => 'form-control', 'placeholder' => 'Nome da Categoria']) !!}
                    <p class="help-block">Nome da Categoria</p>
                    @if($errors->has('categoria'))
                        <p class="help-block">
                            {{ $errors->first('categoria') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('slug', trans('global.categorias.fields.slug').'', ['class' => 'control-label']) !!}
                    {!! Form::text('slug', old('slug'), ['class' => 'form-control', 'placeholder' => 'Slug da Categoria ( Cores )']) !!}
                    <p class="help-block">Slug da Categoria ( Cores )</p>
                    @if($errors->has('slug'))
                        <p class="help-block">
                            {{ $errors->first('slug') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

