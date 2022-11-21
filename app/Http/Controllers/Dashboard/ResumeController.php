<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class ResumeController extends BaseController
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
        $resumes =  Resume::with('vacancies')->orderBy('id')->get();
        return view('dashboard.resume.index',[
            'resumes'=>$resumes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$vacancy)
    {

        $resumes = new Resume();
        $resumes->vacancy_id = $vacancy;
        $resumes->full_name = $request->full_name;
        $resumes->email = $request->email;
        $resumes->phone1 = $request->phone1;
        $resumes->phone2 = $request->phone2;

        if($request->file('file')){
            $resumes['file'] = $this->photoSave($request->file('file'), 'image/resume');
        }
        $resumes->letter = $request->letter;
        $resumes->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $resumes = Resume::find($id);
        if(is_file(public_path($resumes->file))){
            unlink(public_path($resumes->file));
        }
        $resumes->delete();
        return redirect()->back();
    }
}
