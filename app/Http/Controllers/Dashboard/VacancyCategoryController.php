<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use App\Models\VacancyCategory;
use Illuminate\Http\Request;

class VacancyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(VacancyController $vacancyController)
    {
        $this->middleware('auth');

        $this->vacancyControllerdestroy = $vacancyController;
    }

    public function index()
    {
        $category = VacancyCategory::all();
        return view('dashboard.vacancy_category.index', [
            'category'=>$category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('dashboard.vacancy_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new VacancyCategory();
        
        $category->name_uz = $request->name_uz;
        $category->name_ru = $request->name_ru;
        $category->name_en = $request->name_en;

        $category->save();

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
        // dd('asd');
        $category =  VacancyCategory::find($id);

        return view('dashboard.vacancy_category.edit', [
            'category'=>$category
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
        $category = VacancyCategory::find($id);
        
        $category->name_uz = $request->name_uz;
        $category->name_ru = $request->name_ru;
        $category->name_en = $request->name_en;

        $category->save();

        return redirect()->route('admin.vacancycategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = VacancyCategory::find($id);

        $category->delete();

        foreach (Vacancy::where('category_id', $id)->get() as $cat){
            
            $this->vacancyControllerdestroy->destroy($cat->id);
        }

        return redirect()->back();
    }
}
