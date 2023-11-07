<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    public function Index()
    {
        $title='';
        if(request('category')){
            $category = Category::firstwhere('slug', request('category'));
            $title = ' Category ' . $category->name;
        }

        if(request('user')){
            $user = User::firstwhere('id', request('user'));
            $title = ' By ' . $user->name;
        }


        return view('blog',[
            'title' => 'Halaman blog' . $title,
            'active' => 'blog',
            'post' => Blog::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Blog $post) 
    {
        return view('singlepost',[
            'title'=>'Single Artikel',
            'active' => 'blog',
            'post'=>$post
        ]);
    }

}

