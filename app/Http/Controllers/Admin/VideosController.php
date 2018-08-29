<?php

namespace App\Http\Controllers\Admin;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreVideosRequest;
use App\Http\Requests\Admin\UpdateVideosRequest;

class VideosController extends Controller
{
    /**
     * Display a listing of Video.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('video_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('video_delete')) {
                return abort(401);
            }
            $videos = Video::onlyTrashed()->get();
        } else {
            $videos = Video::all();
        }

        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating new Video.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('video_create')) {
            return abort(401);
        }
        return view('admin.videos.create');
    }

    /**
     * Store a newly created Video in storage.
     *
     * @param  \App\Http\Requests\StoreVideosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideosRequest $request)
    {
        if (! Gate::allows('video_create')) {
            return abort(401);
        }
        $video = Video::create($request->all());



        return redirect()->route('admin.videos.index');
    }


    /**
     * Show the form for editing Video.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('video_edit')) {
            return abort(401);
        }
        $video = Video::findOrFail($id);

        return view('admin.videos.edit', compact('video'));
    }

    /**
     * Update Video in storage.
     *
     * @param  \App\Http\Requests\UpdateVideosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideosRequest $request, $id)
    {
        if (! Gate::allows('video_edit')) {
            return abort(401);
        }
        $video = Video::findOrFail($id);
        $video->update($request->all());



        return redirect()->route('admin.videos.index');
    }


    /**
     * Display Video.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('video_view')) {
            return abort(401);
        }
        $video = Video::findOrFail($id);

        return view('admin.videos.show', compact('video'));
    }


    /**
     * Remove Video from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('video_delete')) {
            return abort(401);
        }
        $video = Video::findOrFail($id);
        $video->delete();

        return redirect()->route('admin.videos.index');
    }

    /**
     * Delete all selected Video at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('video_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Video::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Video from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('video_delete')) {
            return abort(401);
        }
        $video = Video::onlyTrashed()->findOrFail($id);
        $video->restore();

        return redirect()->route('admin.videos.index');
    }

    /**
     * Permanently delete Video from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('video_delete')) {
            return abort(401);
        }
        $video = Video::onlyTrashed()->findOrFail($id);
        $video->forceDelete();

        return redirect()->route('admin.videos.index');
    }
}
