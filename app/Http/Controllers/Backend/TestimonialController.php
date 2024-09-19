<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Carbon;
use Session;
use Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('backend.testimonial.index', compact('testimonials'));
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
            'testimonial_name_en'=>'required',
            'name_en'=>'required',
            'title_en'=>'required',
            'testimonial_description_en'=>'required',
            'testimonial_image'=>'required'
        ]);

        if($request->hasfile('testimonial_image')){
            $image = $request->file('testimonial_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(55,55)->save('upload/testimonial/'.$name_gen);
            $testimonial_image = 'upload/testimonial/'.$name_gen;
        }else{
            $testimonial_image = '';
        }

        $testimonial = new Testimonial();

        $testimonial->name_en = $request->name_en;
        if($request->name_bn == ''){
            $testimonial->name_bn = $request->name_en;
        }else{
            $testimonial->name_bn = $request->name_bn;
        }



        $testimonial->title_en = $request->title_en;
        if($request->title_bn == ''){
            $testimonial->title_bn = $request->title_en;
        }else{
            $testimonial->title_bn = $request->title_bn;
        }

        $testimonial->testimonial_name_en = $request->testimonial_name_en;
        if($request->testimonial_name_bn == ''){
            $testimonial->testimonial_name_bn = $request->testimonial_name_en;
        }else{
            $testimonial->testimonial_name_bn = $request->testimonial_name_bn;
        }

        $testimonial->testimonial_description_en = $request->testimonial_description_en;
        if($request->testimonial_description_bn == ''){
            $testimonial->testimonial_description_bn = $request->testimonial_description_en;
        }else{
            $testimonial->testimonial_description_bn = $request->testimonial_description_bn;
        }


        if($request->status == Null){
            $request->status = 0;
        }

        $testimonial->status = $request->status;

        $testimonial->testimonial_image = $testimonial_image;

        $testimonial->created_at = Carbon::now();

        $testimonial->save();



        Session::flash('success','Testimonial Inserted Successfully');
        return redirect()->route('testimonial.index');
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
        $testimonial = Testimonial::find($id);

        if($request->hasfile('testimonial_image')){
            try {
                if(file_exists($testimonial->slider_image)){
                    unlink($testimonial->slider_image);
                }
            } catch (Exception $e) {

            }
            $image = $request->file('testimonial_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(324,346)->save('upload/testimonial/'.$name_gen);
            $testimonial_image = 'upload/testimonial/'.$name_gen;
        }else{
            $testimonial_image = $testimonial->testimonial_image;
        }


        $testimonial->name_en = $request->name_en;
        if($request->name_bn == ''){
            $testimonial->name_bn = $request->name_en;
        }else{
            $testimonial->name_bn = $request->name_bn;
        }


        $testimonial->title_en = $request->title_en;
        if($request->title_bn == ''){
            $testimonial->title_bn = $request->title_en;
        }else{
            $testimonial->title_bn = $request->title_bn;
        }

        $testimonial->testimonial_name_en = $request->testimonial_name_en;
        if($request->testimonial_name_bn == ''){
            $testimonial->testimonial_name_bn = $request->testimonial_name_en;
        }else{
            $testimonial->testimonial_name_bn = $request->testimonial_name_bn;
        }

        $testimonial->testimonial_description_en = $request->testimonial_description_en;
        if($request->testimonial_description_bn == ''){
            $testimonial->testimonial_description_bn = $request->testimonial_description_en;
        }else{
            $testimonial->testimonial_description_bn = $request->testimonial_description_bn;
        }




        if($request->status == Null){
            $request->status = 0;
        }

        $testimonial->status = $request->status;

        $testimonial->testimonial_image = $testimonial_image;

        $testimonial->created_at = Carbon::now();

        $testimonial->save();


        Session::flash('success','Testimonial Updated Successfully');
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);

        try {
            if(file_exists($testimonial->testimonial_image)){
                unlink($testimonial->testimonial_image);
            }
        }catch (Exception $e) {

        }

        $testimonial->delete();

        Session::flash('success','Testimonial Parmanently Deleted Successfully.');
        return redirect()->back();
    }

    public function active($id){
        $testimonial = Testimonial::find($id);
        $testimonial->status = 1;
        $testimonial->save();

        Session::flash('success','Testimonial Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $testimonial = Testimonial::find($id);
        $testimonial->status = 0;
        $testimonial->save();

        Session::flash('success','Testimonial Disabled Successfully.');
        return redirect()->back();
    }
}
