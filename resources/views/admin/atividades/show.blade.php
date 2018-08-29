@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.atividades.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.atividades.fields.nome')</th>
                            <td field-key='nome'>{{ $atividade->nome }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.atividades.fields.texto')</th>
                            <td field-key='texto'>{{ $atividade->texto }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.atividades.fields.categoria')</th>
                            <td field-key='categoria'>{{ $atividade->categoria->categoria or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.atividades.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop


