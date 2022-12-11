<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogController extends BaseController
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
        $blogs = Blog::all();
        return view('dashboard.blogs.index', [
            'blogs'=>$blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blogs.create');
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
        // dd('asd');
        $blogs = new Blog();
        if($request->file('photo')){
            $blogs['photo'] = $this->photoSave($request->file('photo'), 'image/blogs');
        }
        $slug = str_replace(' ', '_', strtolower($request->title_uz)) . '-' . Str::random(5);
        $blogs->title_uz = $request->title_uz;
        $blogs->title_ru = $request->title_ru;
        $blogs->title_en = $request->title_en;
        $blogs->video_link = $request->video_link;
        $blogs->description_uz = $request->description_uz;
        $blogs->description_ru = $request->description_ru;
        $blogs->description_en = $request->description_en;
        $blogs['slug'] = $slug;
        // $blogs->slug = Str::slug($request->title_uz);
        $blogs->save();
        return redirect()->route('admin.blogs.index');
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
        // dd($slug);
        $blog = Blog::where('slug', $slug)->first();
        return view('dashboard.blogs.edit', [
            'blog'=>$blog
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
        $blogs = Blog::where('slug', $slug)->first();
        if($request->file('photo')){
            if(is_file(public_path($blogs->photo))){
                unlink(public_path($blogs->photo));
            }
                $blogs['photo'] = $this->photoSave($request->file('photo'), 'image/blogs');
        }
        $new_slug = str_replace(' ', '_', strtolower($request->title_uz)) . '-' . Str::random(5);
        $blogs->title_uz = $request->title_uz;
        $blogs->title_ru = $request->title_ru;
        $blogs->title_en = $request->title_en;
        $blogs->video_link = $request->video_link;
        $blogs->description_uz = $request->description_uz;
        $blogs->description_ru = $request->description_ru;
        $blogs->description_en = $request->description_en;
        $blogs['slug'] = $new_slug;
        $blogs->save();
        return redirect()->route('admin.blogs.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $blogs = Blog::find($id);
        if(is_file(public_path($blogs->photo))){
            unlink(public_path($blogs->photo));
        }
        $blogs->delete();
        return redirect()->back();
    }
}
