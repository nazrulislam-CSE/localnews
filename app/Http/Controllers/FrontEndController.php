<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;


class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catgory = Category::all();
        return view('FrontEnd.index')
                                ->with('categories',$catgory)
                                ->with('top_menu',Category::orderBy('created_at','ASC')->where('location_category','=', 1)->take(7)->get())
                                ->with('top_menu',Category::orderBy('created_at','ASC')->where('status','=', 1)->take(7)->get())
                                ->with('main_menu',Category::orderBy('created_at','ASC')->where('location_category','=',2)->take(8)->get())
                                ->with('main_menu',Category::orderBy('created_at','ASC')->where('status','=', 1)->skip(7)->take(8)->get())
                                ->with('footer',Category::orderBy('created_at','desc')->where('location_category','=', 3)->get())
                                ->with('footer',Category::orderBy('created_at','ASC')->where('status','=', 1)->skip(28)->take(5)->get())
                                ->with('siteinfo',Setting::all()->first())
                                ->with('random',Post::all())
                                ->with('brekingnews', Post::orderBy('created_at','desc')->take(20)->get())
                                ->with('post_slide1',Post::orderBy('created_at','desc')->take(10)->get())
                                ->with('post_one',Post::orderBy('created_at','ASC')->take(1)->get())
                                ->with('post_two',Post::orderBy('created_at','ASC')->skip(2)->take(1)->get())
                                ->with('post_three',Post::orderBy('created_at','ASC')->skip(2)->take(1)->get())
                                ->with('post_four',Post::orderBy('created_at','ASC')->skip(3)->take(1)->get())
                                ->with('featured_one',Post::orderBy('created_at','desc')->take(1)->get())
                                ->with('featured_two',Post::orderBy('created_at','desc')->skip(1)->take(3)->get())
                                ->with('featured_three',Post::orderBy('created_at','desc')->skip(2)->take(1)->get())
                                ->with('featured_four',Post::orderBy('created_at','desc')->skip(3)->take(3)->get())
                                ->with('national',Category::find(10))
                                ->with('capital',Category::find(28))
                                ->with('country',Category::find(11))
                                ->with('world_news',Category::find(13))
                                ->with('play',Category::find(14))
                                ->with('entertainment',Category::find(15))
                                ->with('lifestyle',Category::find(17))
                                ->with('politics',Category::find(12))
                                ->with('covin',Category::find(16))
                                ->with('picture',Category::find(7))
                                ->with('featured_post',Post::orderBy('created_at','desc')->take(3)->get())
                                ->with('featured_video',Post::orderBy('created_at','desc')->first())
                                ->with('popular',Post::orderBy('created_at','desc')->skip(4)->take(4)->get())
                                ->with('recent',Post::orderBy('created_at','desc')->take(4)->get())
                                ->with('topreviews',Post::orderBy('created_at','ASC')->take(4)->get());
    }


    public function singlePost($slug){

        $post= Post::where('slug',$slug)->first();

        $counter = $post->views;
        $update_counter = $counter+1;
        $post->views = $update_counter;
        $post->save();
        
        $catgory = Category::all();

        $next_post = Post::where('id', '>', $post->id)->min('id');
        $prev_post = Post::where('id', '<', $post->id)->max('id');
        return view('FrontEnd.single-post')
                                ->with('post',$post)
                                ->with('categories',$catgory)
                                ->with('tags',Tag::orderBy('created_at','ASC')->take(10)->get())
                                ->with('random',Post::all())
                                ->with('top_menu',Category::orderBy('created_at','ASC')->where('location_category','=', 1)->take(6)->get())
                                ->with('main_menu',Category::orderBy('created_at','ASC')->where('location_category','=',2)->take(8)->get())
                                ->with('footer',Category::orderBy('created_at','desc')->where('location_category','=', 3)->get())
                                ->with('siteinfo',Setting::all()->first())
                                ->with('brekingnews', Post::orderBy('created_at','desc')->take(20)->get())
                                ->with('popular',Post::orderBy('created_at','desc')->skip(4)->take(4)->get())
                                ->with('recent',Post::orderBy('created_at','desc')->take(4)->get())
                                ->with('topreviews',Post::orderBy('created_at','ASC')->take(4)->get())
                                ->with('featured_video',Post::orderBy('created_at','desc')->first())
                                ->with('featured_post',Post::orderBy('created_at','desc')->take(3)->get())
                                ->with('next',Post::find($next_post))
                                ->with('prev',Post::find($prev_post))
                                ->with('counter', $update_counter);
    }

    public function category($id){

        $catgory = Category::find($id);
        $post= Post::where('category_id',$id)->paginate(4);
        return view('FrontEnd.category-post')
                                ->with('posts',$post)
                                ->with('category',$catgory)
                                ->with('tags',Tag::all())
                                ->with('categories',Category::all())
                                ->with('top_menu',Category::orderBy('created_at','ASC')->where('location_category','=', 1)->take(6)->get())
                                ->with('main_menu',Category::orderBy('created_at','ASC')->where('location_category','=',2)->take(8)->get())
                                ->with('footer',Category::orderBy('created_at','desc')->where('location_category','=', 3)->get())
                                ->with('siteinfo',Setting::all()->first())
                                ->with('random',Post::all());
    }

    public function tag($id){
        $tag = Tag::find($id);
        $post= Post::where('id',$id)->paginate(2);
        return view('FrontEnd.tag-post')
                                ->with('posts',$post)
                                ->with('tag',$tag)
                                ->with('tags',Tag::all())
                                ->with('categories',Category::all())
                                ->with('top_menu',Category::orderBy('created_at','ASC')->where('location_category','=', 1)->take(6)->get())
                                ->with('main_menu',Category::orderBy('created_at','ASC')->where('location_category','=',2)->take(8)->get())
                                ->with('footer',Category::orderBy('created_at','desc')->where('location_category','=', 3)->get())
                                ->with('siteinfo',Setting::all()->first())
                                ->with('random',Post::all());
    }


    public function search(){
        $search = request('search');
        $post = Post::where('title','like','%'.$search.'%')->get();
        return view('FrontEnd.search')
                                ->with('posts',$post)
                                ->with('categories',Category::all())
                                ->with('top_menu',Category::orderBy('created_at','ASC')->where('location_category','=', 1)->take(6)->get())
                                ->with('main_menu',Category::orderBy('created_at','ASC')->where('location_category','=',2)->take(8)->get())
                                ->with('footer',Category::orderBy('created_at','desc')->where('location_category','=', 3)->get())
                                ->with('siteinfo',Setting::all()->first())
                                ->with('random',Post::all());
    }


    public function user(){
        $user = User::all()->first();
        $post= Post::paginate(6);
        return view('FrontEnd.user-post')
                                ->with('user',$user)
                                ->with('posts',$post)
                                ->with('random',Post::all())
                                ->with('categories',Category::all())
                                ->with('top_menu',Category::orderBy('created_at','ASC')->where('location_category','=', 1)->take(6)->get())
                                ->with('main_menu',Category::orderBy('created_at','ASC')->where('location_category','=',2)->take(8)->get())
                                ->with('footer',Category::orderBy('created_at','desc')->where('location_category','=', 3)->get())
                                ->with('siteinfo',Setting::all()->first())
                                ->with('popular',Post::orderBy('created_at','desc')->skip(4)->take(4)->get())
                                ->with('recent',Post::orderBy('created_at','desc')->take(4)->get())
                                ->with('topreviews',Post::orderBy('created_at','ASC')->take(4)->get())
                                ->with('featured_video',Post::orderBy('created_at','desc')->take(1)->get())
                                ->with('tag',Tag::orderBy('created_at','ASC')->take(10)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
