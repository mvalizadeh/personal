<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::searched()->get();
        return view('app.index')->with(['categories'=>$categories,'posts'=>$posts]);
    }

    public function show($slug)
    {
        $categories = Category::all();
        $post = Post::where('slug',$slug)->firstOrFail();
        return view('app.page')->with(['categories'=>$categories,'post'=>$post]);
    }

    public function showCategory(Category $category)
    {
        $categories = Category::all();
        $posts = Post::where('category_id',$category->id)->get();
        return view('app.category')->with(['categories'=>$categories,'posts'=>$posts]);
    }

}
