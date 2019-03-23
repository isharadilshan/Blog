<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\post;
use App\Model\User\tag;
use App\Model\User\category;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.create',compact('tags','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $post = new post();

        $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:5120',
        ]);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image2 = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalName();
            $filename2 = time().'.'.$image2->getClientOriginalName();
            $location = public_path('images/posts/'.$filename);
            $location2 = public_path('images/posts/front/'.$filename2);
            Image::make($image)->resize(900,300)->save($location);
            Image::make($image2)->resize(800,800)->save($location2);
            $post->image = $filename;
            $post->image2 = $filename2;
        }
        
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->checked = $request->checked;
        $post->verified = $request->verified;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect(route('post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        // return $post;
        return view('admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::with('tags','categories')->where('id',$id)->first();
        $tags = tag::all();
        $categories = category::all();
        return view('admin.post.edit',compact('post','tags','categories'));
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
        // return $request->all();
        $post = post::find($id);

        $this->validate($request,[
            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);
        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $image2 = $request->file('image');
            $filename = time().'.'.$image->getClientOriginalName();
            $filename2 = time().'.'.$image2->getClientOriginalName();
            $location = public_path('images/posts/'.$filename);
            $location2 = public_path('images/posts/front/'.$filename2);
            Image::make($image)->resize(900,300)->save($location);
            Image::make($image2)->resize(80,80)->save($location2);
            $post->image = $filename;
            $post->image2 = $filename2;
        }
        
        $post->title = $request->title;
        $post->subtitle = $request->subtitle;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->checked = $request->checked;
        $post->verified = $request->verified;
        $post->save();
        $post->tags()->sync($request->tags);
        $post->categories()->sync($request->categories);
        return redirect(route('post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::where('id',$id)->delete();
        return redirect()->back();
    }
}
