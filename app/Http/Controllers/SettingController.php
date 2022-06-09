<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use Session;
class SettingController extends Controller
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
        $setting = Setting::all();
        return view('admin.setting.all_setting')->with('settings',$setting);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setting.create_setting');
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
            'logo'=>'required',
            'site_name'=>'required',
            'ownership'=>'required',
            'address'=>'required',
            'site_email'=>'required',
            'copyright'=>'required',
            'contact'=>'required',
            'about'=>'required'
        ]);

        $logo= $request->logo;
        $logo_new_name = time().$logo->getClientOriginalName();
        $logo->move('uploads/logo',$logo_new_name);

        $setting = Setting::create([
            'logo'=>'uploads/logo/'.$logo_new_name,
            'sitename'=>$request->site_name,
            'ownership'=>$request->ownership,
            'about_site'=>$request->about,
            'site_address'=>$request->address,
            'site_contact_no'=>$request->contact,
            'site_email'=>$request->site_email,
            'copyright_text'=>$request->copyright

        ]);

        Session::flash('success','Setting Created Successfully.');
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
        $setting = Setting::first();
        return view('admin.setting.edit_setting')->with('settings',$setting);
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
        $setting = Setting::find($id);
        $this->validate($request,[
            'logo'=>'required',
            'site_name'=>'required',
            'ownership'=>'required',
            'address'=>'required',
            'site_email'=>'required',
            'copyright'=>'required',
            'contact'=>'required',
            'about'=>'required'
        ]);

        if($request->hasfile('logo')){
            $logo= $request->logo;
            $logo_new_name = time().$logo->getClientOriginalName();
            $logo->move('uploads/logo',$logo_new_name);
            $setting->logo='uploads/logo/'.$logo_new_name;
        }

        $setting->sitename = $request->site_name;
        $setting->ownership = $request->ownership;
        $setting->site_address = $request->address;
        $setting->site_email = $request->site_email;
        $setting->copyright_text = $request->copyright;
        $setting->site_contact_no = $request->contact;
        $setting->about_site = $request->about;

        $setting->save();

        Session::flash('success','Site Info Updated Successfully.');
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
        $setting = Setting::find($id);
        $setting->delete();

       Session::flash('info','Setting deleted Successfully.');
       return redirect()->back();
    }
}
