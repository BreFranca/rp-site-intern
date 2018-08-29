<?php

namespace App\Http\Controllers\Admin;

use App\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoriasRequest;
use App\Http\Requests\Admin\UpdateCategoriasRequest;

class CategoriasController extends Controller
{
    /**
     * Display a listing of Categoria.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('categoria_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('categoria_delete')) {
                return abort(401);
            }
            $categorias = Categoria::onlyTrashed()->get();
        } else {
            $categorias = Categoria::all();
        }

        return view('admin.categorias.index', compact('categorias'));
    }

    /**
     * Show the form for creating new Categoria.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('categoria_create')) {
            return abort(401);
        }
        return view('admin.categorias.create');
    }

    /**
     * Store a newly created Categoria in storage.
     *
     * @param  \App\Http\Requests\StoreCategoriasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriasRequest $request)
    {
        if (! Gate::allows('categoria_create')) {
            return abort(401);
        }
        $categoria = Categoria::create($request->all());



        return redirect()->route('admin.categorias.index');
    }


    /**
     * Show the form for editing Categoria.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('categoria_edit')) {
            return abort(401);
        }
        $categoria = Categoria::findOrFail($id);

        return view('admin.categorias.edit', compact('categoria'));
    }

    /**
     * Update Categoria in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriasRequest $request, $id)
    {
        if (! Gate::allows('categoria_edit')) {
            return abort(401);
        }
        $categoria = Categoria::findOrFail($id);
        $categoria->update($request->all());



        return redirect()->route('admin.categorias.index');
    }


    /**
     * Display Categoria.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('categoria_view')) {
            return abort(401);
        }
        $banners = \App\Banner::where('categoria_id', $id)->get();$atividades = \App\Atividade::where('categoria_id', $id)->get();

        $categoria = Categoria::findOrFail($id);

        return view('admin.categorias.show', compact('categoria', 'banners', 'atividades'));
    }


    /**
     * Remove Categoria from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('categoria_delete')) {
            return abort(401);
        }
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('admin.categorias.index');
    }

    /**
     * Delete all selected Categoria at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('categoria_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Categoria::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Categoria from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('categoria_delete')) {
            return abort(401);
        }
        $categoria = Categoria::onlyTrashed()->findOrFail($id);
        $categoria->restore();

        return redirect()->route('admin.categorias.index');
    }

    /**
     * Permanently delete Categoria from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('categoria_delete')) {
            return abort(401);
        }
        $categoria = Categoria::onlyTrashed()->findOrFail($id);
        $categoria->forceDelete();

        return redirect()->route('admin.categorias.index');
    }
}
