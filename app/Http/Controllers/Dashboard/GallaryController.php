<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends BaseController
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
        $gallery = Gallary::all();
        return view('dashboard.gallery.index', [
            'gallery'=>$gallery
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $gallery = new Gallary();
        if($request->file('photos')){
            foreach($request->photos as $photo){

                $gallery['photo'] = $this->photoSave($photo, 'image/gallery');

            }
        }

        $gallery->title_uz = $request->title_uz;
        $gallery->title_ru = $request->title_ru;
        $gallery->title_en = $request->title_en;
        $gallery->year = $request->year;

        $gallery->save();

        return redirect()->route('admin.gallerys.index');
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
        $gallery = Gallary::find($id);
        return view('dashboard.gallery.edit', [
            'gallery'=>$gallery
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
        $gallery = Gallary::find($id);

        if($request->file('photo')){
            if(is_file(public_path($gallery->photo))){
                unlink(public_path($gallery->photo));
            }
            
            $blogs['photo'] = $this->photoSave($request->file('photo'), 'image/gallery');
        }

        $gallery->title_uz = $request->title_uz;
        $gallery->title_ru = $request->title_ru;
        $gallery->title_en = $request->title_en;
        $gallery->year = $request->year;

        $gallery->save();

        return redirect()->route('admin.gallerys.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $gallery = Gallary::find($id);

        if(is_file(public_path($gallery->photo))){
            unlink(public_path($gallery->photo));
        }
        $gallery->delete();

        return redirect()->back();

    }
}
