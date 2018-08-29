<?php

namespace App\Http\Controllers\Admin;

use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreInfosRequest;
use App\Http\Requests\Admin\UpdateInfosRequest;

class InfosController extends Controller
{
    /**
     * Display a listing of Info.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('info_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('info_delete')) {
                return abort(401);
            }
            $infos = Info::onlyTrashed()->get();
        } else {
            $infos = Info::all();
        }

        return view('admin.infos.index', compact('infos'));
    }

    /**
     * Show the form for creating new Info.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('info_create')) {
            return abort(401);
        }
        return view('admin.infos.create');
    }

    /**
     * Store a newly created Info in storage.
     *
     * @param  \App\Http\Requests\StoreInfosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInfosRequest $request)
    {
        if (! Gate::allows('info_create')) {
            return abort(401);
        }
        $info = Info::create($request->all());



        return redirect()->route('admin.infos.index');
    }


    /**
     * Show the form for editing Info.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('info_edit')) {
            return abort(401);
        }
        $info = Info::findOrFail($id);

        return view('admin.infos.edit', compact('info'));
    }

    /**
     * Update Info in storage.
     *
     * @param  \App\Http\Requests\UpdateInfosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInfosRequest $request, $id)
    {
        if (! Gate::allows('info_edit')) {
            return abort(401);
        }
        $info = Info::findOrFail($id);
        $info->update($request->all());



        return redirect()->route('admin.infos.index');
    }


    /**
     * Display Info.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('info_view')) {
            return abort(401);
        }
        $info = Info::findOrFail($id);

        return view('admin.infos.show', compact('info'));
    }


    /**
     * Remove Info from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('info_delete')) {
            return abort(401);
        }
        $info = Info::findOrFail($id);
        $info->delete();

        return redirect()->route('admin.infos.index');
    }

    /**
     * Delete all selected Info at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('info_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Info::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Info from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('info_delete')) {
            return abort(401);
        }
        $info = Info::onlyTrashed()->findOrFail($id);
        $info->restore();

        return redirect()->route('admin.infos.index');
    }

    /**
     * Permanently delete Info from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('info_delete')) {
            return abort(401);
        }
        $info = Info::onlyTrashed()->findOrFail($id);
        $info->forceDelete();

        return redirect()->route('admin.infos.index');
    }
}
