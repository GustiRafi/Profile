<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use Illuminate\Support\Facades\Storage;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.project.index',[
            'projects' => project::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => ['required','max:255'],
            'thumb' => ['required','image','max:1024'],
            'url' => ['required']
        ];

        $validate = $request->validate($rules);
        if($request->file('thumb'))
        {
            $validate['thumb'] = $request->file('thumb')->store('project');
        }

        project::create($validate);

        return redirect('/dashboard/project')->with('success', 'Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Admin.project.edit',[
            'project' => project::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => ['required','max:255'],
            'thumb' => ['image','max:1024'],
            'url' => ['required']
        ];

        $validate = $request->validate($rules);
        if($request->file('thumb'))
        {
            if($request->oldimage)
            {
                Storage::delete($request->oldimage);
            }
            $validate['thumb'] = $request->file('thumb')->store('project');
        }

        project::where('id', $id)->update($validate);

        return redirect('/dashboard/project')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        project::where('id',$request->id)->delete();
        if($request->oldimage)
        {
                Storage::delete($request->oldimage);
        }
        return redirect('/dashboard/project')->with('success', 'Data has been deleted');
    }
}