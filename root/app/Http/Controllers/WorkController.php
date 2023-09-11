<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreworkRequest;
use App\Http\Requests\UpdateworkRequest;
use App\Models\work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::all();
        return view('works.index',compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreworkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreworkRequest $request)
    {
        Work::create($request -> validated());
        return  redirect('works/index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateworkRequest  $request
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateworkRequest $request, work $work)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $work = Work::find($id);

        if(!$work) {
            return redirect('works/index')-> with('error','リソースが見つかりませんでした');
        }

        $work -> delete();

        return redirect('works/index') -> with('success','リソースが削除されました');

    }
}
