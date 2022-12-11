<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\NewPromotion;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        // $news = NewPromotion::all();
        return view('front.news');
    }

    public function show($slug){

        // dd('asd');
        $new = NewPromotion::where('slug', $slug)->first();
        $news = NewPromotion::paginate(3);

        return view('front.news-single', [
            'new'=>$new,
            'news'=>$news
        ]);
    }
}
