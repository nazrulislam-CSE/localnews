<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use Session;

class TagController extends Controller
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
        $tag = Tag::paginate(5);
        return view('admin.tag.all_tag')->With('tags',$tag);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create_tag');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['tag' => 'required']);
        $tag = Tag::create(['name' => $request->tag ]);
        $tag->save();

        Session::flash('success','Tag Created Successfully');
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
        $tag = Tag::find($id);
        return view('admin.tag.edit_tag')->With('tag',$tag);
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
        $this->validate($request,['tag'=> 'required']);
        $tag = Tag::find($id);
        $tag->name = $request->tag;
        $tag->update();

        Session::flash('success','Tag Updated Successfully.');
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
        $tag = Tag::find($id);

        $post_tag = $tag->posts->count();

        if($post_tag > 0){
            Session::flash('warning','Tag Deleted Not Successfully because One more post');
            return redirect()->back();
        }else{
            $tag->delete();
            Session::flash('info','Tag Parmanently Deleted Successfully.');
            return redirect()->back();
        }

    }
}
