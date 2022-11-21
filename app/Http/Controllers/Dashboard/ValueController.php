<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Value;
use Illuminate\Http\Request;

class ValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $values = Value::all();
        return view('dashboard.values.index', [
            'values'=>$values
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.values.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'title_uz' => 'required|max:255',
            'title_ru' => 'required|max:255',
            'title_en' => 'required|max:255',
            'description_uz' => 'required',
            'description_uz' => 'required',
            'description_uz' => 'required',
        ]);
        // dd($request->all());
        $values = new Value();
        
        if($request->file('photo')){
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/Image/value'), $filename);
            $values['photo']= '/Image/value/'.$filename;
        }        
        $values->title_uz = $request->title_uz;
        $values->title_ru = $request->title_ru;
        $values->title_en = $request->title_en;
        $values->description_uz = $request->description_uz;
        $values->description_ru = $request->description_ru;
        $values->description_en = $request->description_en;

        $values->save();

        return redirect()->route('admin.values.index');
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
        $value = Value::find($id);
        return view('dashboard.values.edit', [
            'value'=>$value
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
        // dd('asd');
        $values = Value::find($id);
        
        if($request->file('photo')){

            if(is_file(public_path($values->photo))){
                unlink(public_path($values->photo));
            }
            $file= $request->file('photo');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/Image/value'), $filename);
            $values['photo']= '/Image/value/'.$filename;
        }        
        $values->title_uz = $request->title_uz;
        $values->title_ru = $request->title_ru;
        $values->title_en = $request->title_en;
        $values->description_uz = $request->description_uz;
        $values->description_ru = $request->description_ru;
        $values->description_en = $request->description_en;

        $values->save();

        return redirect()->route('admin.values.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $values = Value::find($id);

        if(is_file(public_path($values->photo))){
            unlink(public_path($values->photo));
        }

        $values->delete();

        return redirect()->back();
    }
}
