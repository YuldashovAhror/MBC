<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends BaseController
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
        $projects = Project::with('status')->orderBy('id')->get();
        return view('dashboard.projects.index',[
            'projects'=>$projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // dd($request->all());

        $validated = $request->validate([
            'name_uz' => 'required|max:255',
            'name_ru' => 'required|max:255',
            'name_en' => 'required|max:255',
            'description_uz' => 'required',
            'description_uz' => 'required',
            'description_uz' => 'required',
        ]);
        
        $projects = new Project();

        if($request->file('photo')){
            $projects['photo'] = $this->photoSave($request->file('photo'), 'image/projects');
        }


        $projects->status_id = $request->status;
        $projects->name_uz = $request->name_uz;
        $projects->name_ru = $request->name_ru;
        $projects->name_en = $request->name_en;
        $projects->description_uz = $request->description_uz;
        $projects->description_ru = $request->description_ru;
        $projects->description_en = $request->description_en;
        $projects->link = $request->link;

        $projects->save();

        return redirect()->route('admin.projects.index');

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
        $project = Project::find($id);

        return view('dashboard.projects.edit',[
            'project'=>$project
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
        $projects = Project::find($id);

        if($request->file('photo')){
            if(is_file(public_path($projects->photo))){
                unlink(public_path($projects->photo));
            }
            $projects['photo'] = $this->photoSave($request->file('photo'), 'image/projects');
            
        }
    
        // dd($request->all());

        $projects->status_id = $request->status;
        $projects->name_uz = $request->name_uz;
        $projects->name_ru = $request->name_ru;
        $projects->name_en = $request->name_en;
        $projects->description_uz = $request->description_uz;
        $projects->description_ru = $request->description_ru;
        $projects->description_en = $request->description_en;
        $projects->link = $request->link;

        $projects->save();

        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $project = Project::find($id);
        if(is_file(public_path($project->photo))){
            unlink(public_path($project->photo));
        }

        $project->delete();

        return redirect()->back();
    }
}
