<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NewPromotion;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewPromotionController extends BaseController
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
        $news = NewPromotion::all();

        return view('dashboard.news.index',[
            'news'=>$news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create');
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
        $news = new NewPromotion();
        if($request->file('photo')){
            $news['photo'] = $this->photoSave($request->file('photo'), 'image/news');
        }
        $slug = str_replace(' ', '_', strtolower($request->title_uz)) . '-' . Str::random(5);
        $news->type_uz = $request->type_uz;
        $news->type_ru = $request->type_ru;
        $news->type_en = $request->type_en;
        $news->date = $request->date;
        $news->year = date_format(date_create($request->date), 'Y');
        $news->title_uz = $request->title_uz;
        $news->title_ru = $request->title_ru;
        $news->title_en = $request->title_en;
        $news->description_uz = $request->description_uz;
        $news->description_ru = $request->description_ru;
        $news->description_en = $request->description_en;
        $news['slug'] = $slug;
        if($request->file('photo_main')){
            $news['photo_main'] = $this->photoSave($request->file('photo_main'), 'image/news/mainphoto');
        }
        $news->save();

        return redirect()->route('admin.news.index');
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
        $new = NewPromotion::where('slug', $slug)->first();
        return view('dashboard.news.edit', [
            'new'=>$new
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
        // dd('asd');
        $news = NewPromotion::where('slug', $slug)->first();

        if($request->file('photo')){
            if(is_file(public_path($news->photo))){
                unlink(public_path($news->photo));
            }

            $news['photo'] = $this->photoSave($request->file('photo'), 'image/news');
        }
        $new_slug = str_replace(' ', '_', strtolower($request->title_uz)) . '-' . Str::random(5);
        $news->type_uz = $request->type_uz;
        $news->type_ru = $request->type_ru;
        $news->type_en = $request->type_en;
        $news->date = $request->date;
        $news->year = date_format(date_create($request->date), 'Y');
        $news->title_uz = $request->title_uz;
        $news->title_ru = $request->title_ru;
        $news->title_en = $request->title_en;
        $news->description_uz = $request->description_uz;
        $news->description_ru = $request->description_ru;
        $news->description_en = $request->description_en;
        $news['slug'] = $new_slug;
        if($request->file('photo_main')){
            if(is_file(public_path($news->photo_main))){
                unlink(public_path($news->photo_main));
            }
            $news['photo_main'] = $this->photoSave($request->file('photo_main'), 'image/news/mainphoto');
        }

        $news->save();

        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $news = NewPromotion::find($id);

        if(is_file(public_path($news->photo_main))){
            unlink(public_path($news->photo_main));
        } 
        if(is_file(public_path($news->photo))){
            unlink(public_path($news->photo));
        }
        $news->delete();
        return redirect()->back();
    }
}
