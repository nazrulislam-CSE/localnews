<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;
use Session;

class UserController extends Controller
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
        $user = User::all();
        return view('admin.user.all_user')->with('users',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create_user');
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
            'user' => 'required',
            'email'=> 'required|email'
        ]);

        $user = User::where('name',$request->user)->first();
        if($user){
            Session::flash('info','User Already Created.');
            return redirect()->back();
        }else{
            $user = User::create([
                'name'=>$request->user,
                'email'=>$request->email,
                'password'=>bcrypt('12345678')
            ]);

            $profile = Profile::create([
            'user_id'=>$user->id,
            'avater'=>'uploads/profile/user.jpg',
            'about'=>'Whenever About pages come up, these are the tips I share: Write to your dream audience. Highlight the kind of work you want to be doing. Tell the truth in your own voice. Read it aloud to make sure it sounds like you. Treat it as a draft. Share it early and update it regularly.',
            'facebook'=>'https://www.facebook.com/',
            'youtube'=>'https://www.youtube.com/',
            'twitter'=>'https://www.twitter.com/'

            ]);

            Session::flash('success','User Created Successfully');
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
        $user = User::find($id);
        $user->delete();

        Session::flash('info','User Deleted Successfully.');
        return redirect()->back();
    }

    public function admin($id){
        $user = User::find($id);
        $user->admin = 1;
        $user->save();

        Session::flash('success','Successfully Changed User Permission.');
        return redirect()->back();
    }

    public function not_admin($id){
        $user = User::find($id);
        $user->admin = 0;
        $user->save();

        Session::flash('success','Successfully Changed User Permission.');
        return redirect()->back();
    }

    public function password_change(){
        return view('admin.user.password_change');
    }

    public function password_update(Request $request,$id){

        $user = User::find($id);

        $this->validate($request,[
            'new_password' => 'required',
            'retype_password'  => 'required'
        ]);

        if($request->retype_password != $request->new_password){
            Session::flash('error','Password did not match !! Try again');
            return redirect()->back();
        }else{
            $password = bcrypt($request->new_password);
            $user->password = $password;
            $user->save();

            Session::flash('success','Password Change Successfully.');
            return redirect()->route('all.user');
        }

    }
}
