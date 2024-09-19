<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\PricingFacility;
use Illuminate\Support\Carbon;
use Session;


class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::latest()->get();
        return view('backend.offer.index', compact('offers'));
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
        // Validate the input fields
        $this->validate($request, [
            'name_en' => 'required',
            'title_en' => 'required',
        ]);
    
        // Create a new Offer instance
        $offer = new Offer();
    
        // Assign values to the offer
        $offer->name_en = $request->name_en;

        $offer->title_en = $request->title_en;
    
        $offer->status = $request->status ?? 0;
    
        // Generate the slug
        $offer->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name_en)));
        $offer->regular_price = $request->regular_price;
        $offer->created_at = Carbon::now();
    
        // Save the offer
        $offer->save();
    
        // Loop through each name and create a new PricingFacility instance
        if (is_array($request->name)) {
            foreach ($request->name as $name) {
                $facility = new PricingFacility();
                $facility->offer_id = $offer->id;
                $facility->name = $name;
                $facility->created_at = Carbon::now();
                $facility->save();
            }
        } else {
            $facility = new PricingFacility();
            $facility->offer_id = $offer->id;
            $facility->name = $request->name;
            $facility->created_at = Carbon::now();
            $facility->save();
        }
    
        // Flash success message and redirect
        Session::flash('success', 'Offer Inserted Successfully');
        return redirect()->route('offer.index');
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
    public function update(Request $request, $id){
    // Validate the input fields
    $this->validate($request, [
        'name_en' => 'required',
        'title_en' => 'required',
    ]);

    // Find the existing Offer instance
    $offer = Offer::findOrFail($id);

    // Update the offer
    $offer->name_en = $request->name_en;
    $offer->title_en = $request->title_en;
    $offer->status = $request->status ?? 0;
    $offer->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', strtolower($request->name_en)));
    $offer->regular_price = $request->regular_price;
    $offer->updated_at = Carbon::now();

    // Save the updated offer
    $offer->save();

    // Delete old pricing facilities if any
    PricingFacility::where('offer_id', $offer->id)->delete();

    // Loop through each name and create/update PricingFacility instances
    if (is_array($request->name)) {
        foreach ($request->name as $name) {
            $facility = new PricingFacility();
            $facility->offer_id = $offer->id;
            $facility->name = $name;
            $facility->created_at = Carbon::now();
            $facility->save();
        }
    } else {
        $facility = new PricingFacility();
        $facility->offer_id = $offer->id;
        $facility->name = $request->name;
        $facility->created_at = Carbon::now();
        $facility->save();
    }

    // Flash success message and redirect
    Session::flash('success', 'Offer Updated Successfully');
    return redirect()->route('offer.index');
   }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer = Offer::find($id);
        $offer->delete();

        Session::flash('success','Offer Parmanently Deleted Successfully.');
        return redirect()->back();
    }

    public function active($id){
        $offer = Offer::find($id);
        $offer->status = 1;
        $offer->save();

        Session::flash('success','Offer Active Successfully.');
        return redirect()->back();
    }

    public function inactive($id){
        $offer = Offer::find($id);
        $offer->status = 0;
        $offer->save();

        Session::flash('success','Offer Disabled Successfully.');
        return redirect()->back();
    }
}
