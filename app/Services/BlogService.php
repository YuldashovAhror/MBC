<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Exceptions\Blog\BlogCreateException;
use App\Traits\FileTrait;
use Illuminate\Support\Str;

class BlogService
{
    use FileTrait;
    public $request;
    protected $blog;


    public function __construct(Request $request, Blog $blog=null)
    {
    
        $this->request = $request->toArray();
    }




    public function create()
    {
        try {

            // $blog = new Blog();
            if($this->request['photo']){
                $this->request['photo'] = $this->photoSave($this->request['photo'], 'image/blogs');
            }
            $this->request['slug'] = Str::slug($this->request['title_uz']);

            Blog::create($this->request);

        } catch (\Exception $exception) {
            throw new BlogCreateException($exception->getMessage());
        }

        return back();
    }


}