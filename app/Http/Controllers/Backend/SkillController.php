<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Session;
use Image;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill = Skill::latest()->get();
        return view('backend.skill.index', compact('skill'));
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
        // dd($request->all());
        $this->validate($request,[
            'name_en'=>'required',
            'name_bn'=>'required',
            'title_en'=>'required',
            'title_bn'=>'required',
            'skill_name_en'=>'required',
            'skill_name_bn'=>'required',
            'skill_percen_en'=>'required',
            'skill_percen_bn'=>'required',
            'button_name_en'=>'required',
            'button_name_bn'=>'required',
            'skill_image'=>'required'
        ]);

        if($request->hasfile('skill_image')){
            $image = $request->file('skill_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(545,598)->save('upload/skill/'.$name_gen);
            $skill_image = 'upload/skill/'.$name_gen;
        }else{
            $skill_image = '';
        }

        $skill = new Skill();

        $skill->name_en = $request->name_en;
        if($request->name_bn == ''){
            $skill->name_bn = $request->name_en;
        }else{
            $skill->name_bn = $request->name_bn;
        }

        $skill->title_en = $request->title_en;
        if($request->title_bn == ''){
            $skill->title_bn = $request->title_en;
        }else{
            $skill->title_bn = $request->title_bn;
        }

        $skill->skill_name_en = $request->skill_name_en;
        if($request->skill_name_bn == ''){
            $skill->skill_name_bn = $request->skill_name_en;
        }else{
            $skill->skill_name_bn = $request->skill_name_bn;
        }
        $skill->skill_percen_en = $request->skill_percen_en;
        if($request->skill_percen_bn == ''){
            $skill->skill_percen_bn = $request->skill_percen_en;
        }else{
            $skill->skill_percen_bn = $request->skill_percen_bn;
        }



        $skill->button_name_en = $request->button_name_en;
        if($request->button_name_bn == ''){
            $skill->button_name_bn = $request->button_name_en;
        }else{
            $skill->button_name_bn = $request->button_name_bn;
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $skill->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));
        $skill->status = $request->status;

        $skill->skill_image = $skill_image;

        $skill->created_at = Carbon::now();

        $skill->save();

        Session::flash('success','skill Inserted Successfully');
        return redirect()->route('skill.index');

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
        $skill = Skill::find($id);

        if($request->hasfile('skill_image')){
            try {
                if(file_exists($skill->skill_image)){
                    unlink($skill->skill_image);
                }
            } catch (Exception $e) {

            }
            $image = $request->file('skill_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(545,598)->save('upload/skill/'.$name_gen);
            $skill_image = 'upload/skill/'.$name_gen;
        }else{
            $skill_image = $skill->skill_image;
        }



        $skill->name_en = $request->name_en;
        if($request->name_bn == ''){
            $skill->name_bn = $request->name_en;
        }else{
            $skill->name_bn = $request->name_bn;
        }

        $skill->title_en = $request->title_en;
        if($request->title_bn == ''){
            $skill->title_bn = $request->title_en;
        }else{
            $skill->title_bn = $request->title_bn;
        }

        $skill->skill_name_en = $request->skill_name_en;
        if($request->skill_name_bn == ''){
            $skill->skill_name_bn = $request->skill_name_en;
        }else{
            $skill->skill_name_bn = $request->skill_name_bn;
        }
        $skill->skill_percen_en = $request->skill_percen_en;
        if($request->skill_percen_bn == ''){
            $skill->skill_percen_bn = $request->skill_percen_en;
        }else{
            $skill->skill_percen_bn = $request->skill_percen_bn;
        }



        $skill->button_name_en = $request->button_name_en;
        if($request->button_name_bn == ''){
            $skill->button_name_bn = $request->button_name_en;
        }else{
            $skill->button_name_bn = $request->button_name_bn;
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $skill->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->title_en)));
        $skill->status = $request->status;

        $skill->skill_image = $skill_image;

        $skill->created_at = Carbon::now();

        $skill->save();

        Session::flash('success','Skill Updated Successfully');
        return redirect()->route('skill.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill = Skill::find($id);

        try {
            if(file_exists($skill->skill_image)){
                unlink($skill->skill_image);
            }
        }catch (Exception $e) {

        }

        $skill->delete();

        Session::flash('success','Skill Parmanently Deleted Successfully.');
        return redirect()->back();
    }

    public function active($id){
        $skill = Skill::find($id);
        $skill->status = 1;
        $skill->save();

        Session::flash('success','Skill Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $skill = Skill::find($id);
        $skill->status = 0;
        $skill->save();

        Session::flash('success','Skill Disabled Successfully.');
        return redirect()->back();
    }
}


