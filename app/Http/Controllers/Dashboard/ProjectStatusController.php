<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectStatus;
use Illuminate\Http\Request;

class ProjectStatusController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(ProjectController $projectController)
    {
        $this->middleware('auth');

        $this->projectControllerdestroy = $projectController;
    }
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status = ProjectStatus::all();

        return view('dashboard.project_status.create',[
            'status'=>$status
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $status = new ProjectStatus();
        
        $status->name_uz = $request->name_uz;
        $status->name_ru = $request->name_ru;
        $status->name_en = $request->name_en;

        $status->save();

        return redirect()->back();
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
        $status = ProjectStatus::find($id);

        return view('dashboard.project_status.edit',[
            'status'=>$status
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
        $status = ProjectStatus::find($id);
        
        $status->name_uz = $request->name_uz;
        $status->name_ru = $request->name_ru;
        $status->name_en = $request->name_en;

        $status->save();

        return redirect()->route('admin.status.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = ProjectStatus::find($id);

        $status->delete();
        
        foreach (Project::where('status_id', $id)->get() as $prod){
            $this->projectControllerdestroy->destroy($prod->id);
        }
        return redirect()->back();

    }
}
