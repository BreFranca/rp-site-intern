<?php

namespace App\Http\Controllers\Admin;

use App\Depoimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreDepoimentosRequest;
use App\Http\Requests\Admin\UpdateDepoimentosRequest;

class DepoimentosController extends Controller
{
    /**
     * Display a listing of Depoimento.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('depoimento_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('depoimento_delete')) {
                return abort(401);
            }
            $depoimentos = Depoimento::onlyTrashed()->get();
        } else {
            $depoimentos = Depoimento::all();
        }

        return view('admin.depoimentos.index', compact('depoimentos'));
    }

    /**
     * Show the form for creating new Depoimento.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('depoimento_create')) {
            return abort(401);
        }
        return view('admin.depoimentos.create');
    }

    /**
     * Store a newly created Depoimento in storage.
     *
     * @param  \App\Http\Requests\StoreDepoimentosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepoimentosRequest $request)
    {
        if (! Gate::allows('depoimento_create')) {
            return abort(401);
        }
        $depoimento = Depoimento::create($request->all());



        return redirect()->route('admin.depoimentos.index');
    }


    /**
     * Show the form for editing Depoimento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('depoimento_edit')) {
            return abort(401);
        }
        $depoimento = Depoimento::findOrFail($id);

        return view('admin.depoimentos.edit', compact('depoimento'));
    }

    /**
     * Update Depoimento in storage.
     *
     * @param  \App\Http\Requests\UpdateDepoimentosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepoimentosRequest $request, $id)
    {
        if (! Gate::allows('depoimento_edit')) {
            return abort(401);
        }
        $depoimento = Depoimento::findOrFail($id);
        $depoimento->update($request->all());



        return redirect()->route('admin.depoimentos.index');
    }


    /**
     * Display Depoimento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('depoimento_view')) {
            return abort(401);
        }
        $depoimento = Depoimento::findOrFail($id);

        return view('admin.depoimentos.show', compact('depoimento'));
    }


    /**
     * Remove Depoimento from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('depoimento_delete')) {
            return abort(401);
        }
        $depoimento = Depoimento::findOrFail($id);
        $depoimento->delete();

        return redirect()->route('admin.depoimentos.index');
    }

    /**
     * Delete all selected Depoimento at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('depoimento_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Depoimento::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Depoimento from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('depoimento_delete')) {
            return abort(401);
        }
        $depoimento = Depoimento::onlyTrashed()->findOrFail($id);
        $depoimento->restore();

        return redirect()->route('admin.depoimentos.index');
    }

    /**
     * Permanently delete Depoimento from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('depoimento_delete')) {
            return abort(401);
        }
        $depoimento = Depoimento::onlyTrashed()->findOrFail($id);
        $depoimento->forceDelete();

        return redirect()->route('admin.depoimentos.index');
    }
}
