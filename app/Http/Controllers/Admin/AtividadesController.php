<?php

namespace App\Http\Controllers\Admin;

use App\Atividade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAtividadesRequest;
use App\Http\Requests\Admin\UpdateAtividadesRequest;

class AtividadesController extends Controller
{
    /**
     * Display a listing of Atividade.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('atividade_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('atividade_delete')) {
                return abort(401);
            }
            $atividades = Atividade::onlyTrashed()->get();
        } else {
            $atividades = Atividade::all();
        }

        return view('admin.atividades.index', compact('atividades'));
    }

    /**
     * Show the form for creating new Atividade.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('atividade_create')) {
            return abort(401);
        }
        
        $categorias = \App\Categoria::get()->pluck('categoria', 'id')->prepend(trans('global.app_please_select'), '');

        return view('admin.atividades.create', compact('categorias'));
    }

    /**
     * Store a newly created Atividade in storage.
     *
     * @param  \App\Http\Requests\StoreAtividadesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAtividadesRequest $request)
    {
        if (! Gate::allows('atividade_create')) {
            return abort(401);
        }
        $atividade = Atividade::create($request->all());



        return redirect()->route('admin.atividades.index');
    }


    /**
     * Show the form for editing Atividade.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('atividade_edit')) {
            return abort(401);
        }
        
        $categorias = \App\Categoria::get()->pluck('categoria', 'id')->prepend(trans('global.app_please_select'), '');

        $atividade = Atividade::findOrFail($id);

        return view('admin.atividades.edit', compact('atividade', 'categorias'));
    }

    /**
     * Update Atividade in storage.
     *
     * @param  \App\Http\Requests\UpdateAtividadesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAtividadesRequest $request, $id)
    {
        if (! Gate::allows('atividade_edit')) {
            return abort(401);
        }
        $atividade = Atividade::findOrFail($id);
        $atividade->update($request->all());



        return redirect()->route('admin.atividades.index');
    }


    /**
     * Display Atividade.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('atividade_view')) {
            return abort(401);
        }
        $atividade = Atividade::findOrFail($id);

        return view('admin.atividades.show', compact('atividade'));
    }


    /**
     * Remove Atividade from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('atividade_delete')) {
            return abort(401);
        }
        $atividade = Atividade::findOrFail($id);
        $atividade->delete();

        return redirect()->route('admin.atividades.index');
    }

    /**
     * Delete all selected Atividade at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('atividade_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Atividade::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Atividade from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('atividade_delete')) {
            return abort(401);
        }
        $atividade = Atividade::onlyTrashed()->findOrFail($id);
        $atividade->restore();

        return redirect()->route('admin.atividades.index');
    }

    /**
     * Permanently delete Atividade from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('atividade_delete')) {
            return abort(401);
        }
        $atividade = Atividade::onlyTrashed()->findOrFail($id);
        $atividade->forceDelete();

        return redirect()->route('admin.atividades.index');
    }
}
