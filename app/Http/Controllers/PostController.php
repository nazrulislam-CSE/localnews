<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use Session;
use Auth;
class PostController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('created_at','desc')->paginate(10);
        return view('admin.post.all_post')->with('posts',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $tag = Tag::all();
        if($category->count() == 0){
            Session::flash('warning','you must have some categories before attemping create post');
            return redirect()->back();
        }
        return view('admin.post.create_post')
                                    ->with('categories',$category)
                                    ->with('tags',$tag);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'category_id' => 'required',
            'featured' => 'required',
            'content' => 'required',
            'tags' => 'required'
        ]);

        $str = $request->title;
        $slug = trim(preg_replace('/\s+/','-', $str));

        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/post',$featured_new_name);

        $post = Post::create([
            'title'=>$request->title,
            'slug'=>$slug,
            'category_id'=>$request->category_id,
            'content'=>$request->content,
            'featured'=>'uploads/post/'.$featured_new_name,
            'user_id'=>Auth::user()->id

        ]);

        $post->tags()->attach($request->tags);

        Session::flash('success','Post Created Successfully.');
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
        $post = Post::find($id);
        $category = Category::all();
        $tag = Tag::all();
        return view('admin.post.edit_post')
                                    ->with('categories',$category)
                                    ->with('post',$post)
                                    ->with('tags',$tag);
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
        $post = Post::find($id);
        $this->validate($request,[
            'title' => 'required',
            'category_id' => 'required',
            'featured' => 'required',
            'content' => 'required',
            'tags'=>'required'
        ]);

        $str = $request->title;
        $slug = trim(preg_replace('/\s+/','-',$str));

        if($request->hasfile('featured')){
            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/post',$featured_new_name);
            $post->featured = 'uploads/post/'.$featured_new_name;
        }

        $post->title = $request->title;
        $post->slug = $slug;
        $post->category_id = $request->category_id;
        $post->content = $request->content;

        $post->tags()->sync($request->tags);
        $post->save();
        
        Session::flash('success','Post Updated Successfully.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        Session::flash('success','Post Moved To Trashed Successfully.');
        return redirect()->back();
    }

    public function trashed(){
        $post = Post::onlyTrashed()->get();
        return view('admin.post.trashed_post')->with('posts',$post);
    }

    public function restore($id){
        $post = Post::withTrashed()->where('id',$id)->first();
        $post->restore();

        Session::flash('success','Post Restore Successfully.');
        return redirect()->back();
    }

    public function kill($id){
        $post = Post::withTrashed()->where('Id',$id)->first();
        unlink($post->featured);
        $post->forceDelete();

        Session::flash('info','Post Parmanently deleted Successfully.');
        return redirect()->back();
    }
}
