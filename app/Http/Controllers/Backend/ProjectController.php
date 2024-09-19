<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Support\Carbon;
use Session;
use Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->get();

        $menus = Menu::latest()->get();
        $submenus = Submenu::latest()->get();

        return view('backend.project.index', compact('projects','menus','submenus'));
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

        $this->validate($request,[
            'name_en'=>'required',
            'title_en'=>'required',
            'title_en'=>'required',
            'short_title_en'=>'required',
            'client_name'=>'required',
            'duration'=>'required',
            'location'=>'required',
            'project_name_en'=>'required',
            'project_image'=>'required'
        ]);

        if($request->hasfile('project_image')){
            $image = $request->file('project_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(603,466)->save('upload/project/'.$name_gen);
            $project_image = 'upload/project/'.$name_gen;
        }else{
            $project_image = '';
        }

        $project = new Project();

        $project->menu_id = $request->menu_id;
        $project->submenu_id = $request->submenu_id;

        $project->name_en = $request->name_en;
        if($request->name_bn == ''){
            $project->name_bn = $request->name_en;
        }else{
            $project->name_bn = $request->name_bn;
        }

        $project->title_en = $request->title_en;
        if($request->title_bn == ''){
            $project->title_bn = $request->title_en;
        }else{
            $project->title_bn = $request->title_bn;
        }
        $project->short_title_en = $request->short_title_en;
        if($request->short_title_bn == ''){
            $project->short_title_bn = $request->short_title_en;
        }else{
            $project->short_title_bn = $request->short_title_bn;
        }

        $project->project_name_en = $request->project_name_en;
        if($request->project_name_bn == ''){
            $project->project_name_bn = $request->project_name_en;
        }else{
            $project->project_name_bn = $request->project_name_bn;
        }

        $project->button_name_en = $request->button_name_en;
        if($request->button_name_bn == ''){
            $project->button_name_bn = $request->button_name_en;
        }else{
            $project->button_name_bn = $request->button_name_bn;
        }

        $project->project_description_en = $request->project_description_en;
        if($request->project_description_bn == ''){
            $project->project_description_bn = $request->project_description_en;
        }else{
            $project->project_description_bn = $request->project_description_bn;
        }

        if($request->status == Null){
            $request->status = 0;
        }

        $project->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name_en)));
        $project->status = $request->status;
        $project->project_image = $project_image;
        $project->launch_date = $request->date_time;
        $project->switch = $request->switch;
        $project->client_name = $request->client_name;
        $project->duration = $request->duration;
        $project->location = $request->location;
        $project->created_at = Carbon::now();
        $project->save();

        Session::flash('success','Project Inserted Successfully');
        return redirect()->route('project.index');
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
        $project = Project::find($id);

        if($request->hasfile('project_image')){
            try {
                if(file_exists($project->project_image)){
                    unlink($project->project_image);
                }
            } catch (Exception $e) {

            }
            $image = $request->file('project_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(603,466)->save('upload/project/'.$name_gen);
            $project_image = 'upload/project/'.$name_gen;
        }else{
            $project_image =$project->project_image;
        }

        $project->menu_id = $request->menu_id;
        $project->submenu_id = $request->submenu_id;

        $project->name_en = $request->name_en;
        if($request->name_bn == ''){
            $project->name_bn = $request->name_en;
        }else{
            $project->name_bn = $request->name_bn;
        }

        $project->title_en = $request->title_en;
        if($request->title_bn == ''){
            $project->title_bn = $request->title_en;
        }else{
            $project->title_bn = $request->title_bn;
        }
        $project->short_title_en = $request->short_title_en;
        if($request->short_title_bn == ''){
            $project->short_title_bn = $request->short_title_en;
        }else{
            $project->short_title_bn = $request->short_title_bn;
        }

        $project->project_name_en = $request->project_name_en;
        if($request->project_name_bn == ''){
            $project->project_name_bn = $request->project_name_en;
        }else{
            $project->project_name_bn = $request->project_name_bn;
        }

        $project->button_name_en = $request->button_name_en;
        if($request->button_name_bn == ''){
            $project->button_name_bn = $request->button_name_en;
        }else{
            $project->button_name_bn = $request->button_name_bn;
        }

        $project->project_description_en = $request->project_description_en;
        if($request->project_description_bn == ''){
            $project->project_description_bn = $request->project_description_en;
        }else{
            $project->project_description_bn = $request->project_description_bn;
        }

        if($request->status == Null){
            $request->status = 0;
        }
        $project->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name_en)));

        $project->status = $request->status;
         $project->launch_date = $request->date_time;
        $project->switch = $request->switch;
        $project->client_name = $request->client_name;
        $project->duration = $request->duration;
        $project->location = $request->location;
        $project->project_image = $project_image;
        $project->save();
        Session::flash('success','Project Updated Successfully');
        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        try {
            if(file_exists($project->project_image)){
                unlink($project->project_image);
            }
        }catch (Exception $e) {

        }

        $project->delete();

        Session::flash('success','Project Parmanently Deleted Successfully.');
        return redirect()->back();
    }

    public function active($id){
        $project = Project::find($id);
        $project->status = 1;
        $project->save();

        Session::flash('success','Project Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $project = Project::find($id);
        $project->status = 0;
        $project->save();

        Session::flash('success','Project Disabled Successfully.');
        return redirect()->back();
    }


}
