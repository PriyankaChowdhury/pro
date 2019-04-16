<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;


class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Record::all();

        return view('record.index', compact('records'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('record.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'disability' => 'required',
            'description' => 'required',
        ]);

        $name = $request->name;
        $disability = $request->disability;
        $description = $request->description;

        Record::create([
            'name' => $name,
            'disability' => $disability,
            'description' => $description
        ]);

        return redirect()->back()->with('status','successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $record = Record::find($id);
        return view('record.view', compact('record'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Record::where('id', $id)->first();

        return view('record.edit', compact('record'));
    
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
        $this->validate($request,[
            'name' => 'required',
            'disability' => 'required',
            'description' => 'required',
        ]);

        $record = Record::find($id);
        $record->name = $request->name;
        $record->disability =$request->disability;
        $record->description = $request->description;
         $record->save();

        return redirect()->back()->with('status', 'info update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Record::where('id', $id)->delete();
        return redirect()->back()->with('status', ' info deleted');
    }
}
