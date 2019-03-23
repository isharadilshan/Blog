<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\post;
use App\Model\User\tag;
use App\Model\User\category; 

class PageController extends Controller
{
    public function index()
    {
        // $posts = post::all();
        $posts = post::inRandomOrder()
        ->where('verified', 'Yes')->paginate(8);
        $recents = post::orderBy('updated_at','desc')->limit(5)->get();
        $editors = post::where([
            ['verified', '=', 'Yes'],
            ['checked', '=', 1],
        ])->take(5);
        $categories = category::all();
        $tags = tag::all();
        // return($editors);
        return view('main.home',compact('posts','recents','editors','categories','tags'));
    }
    public function post(post $post)
    {
        $recents = post::orderBy('updated_at','desc')->limit(5)->get();
        $editors = post::where([
            ['verified', '=', 'Yes'],
            ['checked', '=', 1],
        ])->take(5);
        $categories = category::all();
        $tags = tag::all();
        $relatedPosts = $post->getRelatedPosts();
        return view('main.post',compact('post','categories','tags','recents','editors','relatedPosts'));
    }
    public function tag(tag $tag)
    {
        // return $tag->posts;
        $categories = category::all();
        $tags = tag::all();
        $posts = $tag->posts();
        return view('main.cattag',compact('posts','categories','tags'));
    }
    public function category(category $category)
    {
        // return $category->posts;
        $categories = category::all();
        $tags = tag::all();
        $posts = $category->posts();
        return view('main.cattag',compact('posts','categories','tags'));
    }
    public function contact()
    {
        return view('main.contact');
    }
    public function portfolio()
    {
        return view('main.portfolio');
    }
    public function portfitem()
    {
        return view('main.portfitem');
    }
    public function cancel()
    {

    }
    public function complete()
    {
        
    }
    public function new()
    {
        return view('main.new');
    }
}
