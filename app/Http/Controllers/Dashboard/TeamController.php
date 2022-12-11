<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends BaseController
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
        $teams = Team::all();
        return view('dashboard.teams.index',[
            'teams'=>$teams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('asd');
        return view('dashboard.teams.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);
        
        $teams = new Team();
        if($request->file('photo')){
            $teams['photo'] = $this->photoSave($request->file('photo'), 'image/teams');
        }
        $slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        if ($request->hasFile('video'))
        {
            $path = $this->videoSave($request->file('video'), 'video/team');
            $teams->video = $path;
        }
        $teams->name_uz = $request->name_uz;
        $teams->name_ru = $request->name_ru;
        $teams->name_en = $request->name_en;
        $teams->position_uz = $request->position_uz;
        $teams->position_ru = $request->position_ru;
        $teams->position_en = $request->position_en;
        $teams['slug'] = $slug;
        $teams->save();
        // dd($request->file('photo'));

        return redirect()->route('admin.teams.index');
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
    public function edit($slug)
    {
        $team = Team::where('slug', $slug)->first();
        return view('dashboard.teams.edit', [
            'team'=>$team
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $teams = Team::where('slug', $slug)->first();
        
        if($request->file('photo')){
            if(is_file(public_path($teams->photo))){
                unlink(public_path($teams->photo));
            }
                $teams['photo'] = $this->photoSave($request->file('photo'), 'image/teams');
        } 
        if ($request->hasFile('video'))
        {
            if(is_file(public_path($teams->video))){
                unlink(public_path($teams->video));
            }
            $path = $this->videoSave($request->file('video'), 'video/team');
            $teams->video = $path;
        }
        $new_slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $teams->name_uz = $request->name_uz;
        $teams->name_ru = $request->name_ru;
        $teams->name_en = $request->name_en;
        $teams->position_uz = $request->position_uz;
        $teams->position_ru = $request->position_ru;
        $teams->position_en = $request->position_en;
        $teams['slug'] = $new_slug;
        $teams->save();
        return redirect()->route('admin.teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teams = Team::find($id);
        if(is_file(public_path($teams->photo))){
            unlink(public_path($teams->photo));
        }
        if(is_file(public_path($teams->video))){
            unlink(public_path($teams->video));
        }
        $teams->delete();
        return redirect()->back();
    }
}
