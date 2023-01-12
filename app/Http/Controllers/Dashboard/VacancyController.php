<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VacancyController extends BaseController
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
        $vacancy = Vacancy::with('categories')->orderBy('id')->get();
        return view('dashboard.vacancy.index', [
            'vacancy'=>$vacancy
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.vacancy.create');
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
            'name_uz' => 'required|max:255',
            'name_ru' => 'required|max:255',
            'name_en' => 'required|max:255',
        ]);
        // dd($request->all());
        $vacancy = new Vacancy();
        if($request->file('photo')){
            $vacancy['photo'] = $this->photoSave($request->file('photo'), 'image/vacancy');
        } 
        $slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $vacancy->category_id = $request->category_id;
        $vacancy->name_uz = $request->name_uz;
        $vacancy->name_ru = $request->name_ru;
        $vacancy->name_en = $request->name_en;
        $vacancy->duty_uz = $request->duty_uz;
        $vacancy->duty_ru = $request->duty_ru;
        $vacancy->duty_en = $request->duty_en;
        $vacancy->skills_uz = $request->skills_uz;
        $vacancy->skills_ru = $request->skills_ru;
        $vacancy->skills_en = $request->skills_en;
        $vacancy->advantage_uz = $request->advantage_uz;
        $vacancy->advantage_ru = $request->advantage_ru;
        $vacancy->advantage_en = $request->advantage_en;
        $vacancy->date = $request->date;
        $vacancy['slug'] = $slug;
        $vacancy->save();

        return redirect()->route('admin.vacancy.index');
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
        $vacancy = Vacancy::where('slug', $slug)->first();
        return view('dashboard.vacancy.edit', [
            'vacancy'=>$vacancy
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
        $vacancy = Vacancy::where('slug', $slug)->first();
        if($request->file('photo')){
            if(is_file(public_path($vacancy->photo))){
                unlink(public_path($vacancy->photo));
            }
            $vacancy['photo'] = $this->photoSave($request->file('photo'), 'image/vacancy');
        }
        $new_slug = str_replace(' ', '_', strtolower($request->name_uz)) . '-' . Str::random(5);
        $vacancy->category_id = $request->category_id;
        $vacancy->name_uz = $request->name_uz;
        $vacancy->name_ru = $request->name_ru;
        $vacancy->name_en = $request->name_en;
        $vacancy->duty_uz = $request->duty_uz;
        $vacancy->duty_ru = $request->duty_ru;
        $vacancy->duty_en = $request->duty_en;
        $vacancy->skills_uz = $request->skills_uz;
        $vacancy->skills_ru = $request->skills_ru;
        $vacancy->skills_en = $request->skills_en;
        $vacancy->advantage_uz = $request->advantage_uz;
        $vacancy->advantage_ru = $request->advantage_ru;
        $vacancy->advantage_en = $request->advantage_en;
        $vacancy->date = $request->date;
        $vacancy['slug'] = $new_slug;
        $vacancy->save();
        return redirect()->route('admin.vacancy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('asd');
        $vacancy = Vacancy::find($id);

        if(is_file(public_path($vacancy->photo))){
            unlink(public_path($vacancy->photo));
        }

        

        $vacancy->delete();

        return redirect()->back();
    }
}
