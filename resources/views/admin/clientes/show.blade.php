@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.clientes.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.clientes.fields.nome')</th>
                            <td field-key='nome'>{{ $cliente->nome }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.clientes.fields.imagem')</th>
                            <td field-key='imagem'>@if($cliente->imagem)<a href="{{ asset(env('UPLOAD_PATH').'/' . $cliente->imagem) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $cliente->imagem) }}"/></a>@endif</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.clientes.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop


