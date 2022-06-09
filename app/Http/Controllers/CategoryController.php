<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Session;
class CategoryController extends Controller
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
        $category = Category::paginate(5);
        if($category->count() == 0){
            Session::flash('warning','There Are No Category Yet.');
            return redirect()->route('create.category');
        }
        return view('admin.category.all_category')->with('categories',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create_category');
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
            'category' => 'required',
            'radio'=> 'required'
        ]);

        $category = new Category;
        
        if($category->location_category = $request->radio == '1'){
            $cat = Category::select('id')->where('location_category','1')->get();
            if(count($cat) <= 7){
                $category->save();
                Session::flash('success','Category Created Successfully');
                return redirect()->back();
            }else{
                Session::flash('info','You cant store more then seven category!');
                return redirect()->back();
            }
        }else{
            $category->name = $request->category;
            $category->location_category = $request->radio;
            $category->save();
            Session::flash('success','Category Created Successfully');
            return redirect()->back();
        }
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
        $category = Category::find($id);
        return view('admin.category.edit_category')->with('category',$category);
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
        $this->validate($request,[
            'category'=>'required',
            'radio'=> 'required'
        ]);
        $category = Category::find($id);
        $category->name = $request->category;
        $category->location_category = $request->radio;
        $category->update();

        Session::flash('success','Category Updated Successfully');
        return redirect()->route('all.category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        $post_category = $category->posts->count();

        if($post_category > 0){
            Session::flash('warning','Category Deleted Not Successfully because One more post');
            return redirect()->back();
        }else{
            $category->delete();
            Session::flash('info','Category Parmanently Deleted Successfully');
            return redirect()->back();
        }
    }

    public function active($id){
        $category = Category::find($id);
        $category->status = 1;
        $category->save();

        Session::flash('success','Successfully Category Changed.');
        return redirect()->back();
    }

    public function inactive($id){
        $category = Category::find($id);
        $category->status = 0;
        $category->save();

        Session::flash('success','Successfully Category Changed.');
        return redirect()->back();
    }
}
