<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\certificate;
use Illuminate\Support\Facades\Storage;

class certificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.certificate.index',[
            'certificates' => certificate::orderBy('id','desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.certificate.create');
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
            'image' => ['image','max:1024'],
        ];

        $validate = $request->validate($rules);
        if($request->file('image'))
        {
            $validate['image'] = $request->file('image')->store('certificate');
        }

        certificate::create($validate);

        return redirect('/dashboard/certificate')->with('success', 'Data has been added');
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
        return view('Admin.certificate.edit',[
            'certificate' => certificate::find($id)
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
            'image' => ['image','max:1024'],
        ];

        $validate = $request->validate($rules);
        if($request->file('image'))
        {
            if($request->oldimage)
            {
                Storage::delete($request->oldimage);
            }
            $validate['image'] = $request->file('image')->store('certificate');
        }

        certificate::where('id', $id)->update($validate);

        return redirect('/dashboard/certificate')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        certificate::where('id',$request->id)->delete();
        if($request->oldimage)
        {
                Storage::delete($request->oldimage);
        }
        return redirect('/dashboard/certificate')->with('success', 'Data has been deleted');
    }
}