<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $testimonials = Testimonial::where('page_type', 'homepage')->get();
        return view('pages.settings.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        //
        try {
            $testimonialDates = $request->date;
            $testimonialUserNames = $request->user_name;
            $testimonials = $request->testimonial;
            if (!empty($testimonials)) {
                // Delete existing testimonials for this style
                Testimonial::where('page_type', 'homepage')->delete();
                // Create new testimonials for this style
                foreach ($testimonials as $key => $testimonial) {
                    // Check if the testimonial is not empty
                    if (!empty($testimonial)) {
                        // Create new testimonial
                        $new_testimonial = new Testimonial();
                        $new_testimonial->page_type = 'homepage';
                        $new_testimonial->date = $testimonialDates[$key];
                        $new_testimonial->user_name = $testimonialUserNames[$key];
                        $new_testimonial->testimonial = $testimonial;
                        $new_testimonial->save();
                    }
                }
            }
            return redirect()->back()->with('success', 'Style updated successfully.');
            } catch (\Exception $e) {
                dd($e);
                return redirect()->back()->with('error', 'Error updating style: ' . $e->getMessage());
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
