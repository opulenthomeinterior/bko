<?php

namespace App\Http\Controllers;

use App\Models\InfoGraphic;
use Illuminate\Http\Request;

class InfoGraphicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $infoGraphics = InfoGraphic::get();
        return view('pages.infographics.create', compact('infoGraphics'));
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
    public function show(InfoGraphic $infoGraphic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InfoGraphic $infoGraphic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //
        $infoGraphics = $request->infographics;
        $title = $request->title;
        $description = $request->description;
        $imagePath = $request->file('image_path');
        $icon = $request->icon;
        $status = $request->status;
        $imageName = $request->image_name;
        
        if (!empty($infoGraphics)) {
            // Delete existing infographics for this style
            InfoGraphic::truncate();
            foreach ($infoGraphics as $key => $infographic) {
                // Check if the infographic is not empty
                if (!empty($infographic)) {
                    // Create new infographic
                    $new_infographic = new InfoGraphic();
                    $new_infographic->title = !empty($title[$key]) ? $title[$key] : null;
                    $new_infographic->description = !empty($description[$key]) ? $description[$key] : null;
                    // Handle image upload (if a new image is provided)
                    if (!empty($imagePath[$key])) {
                        // Delete old image if it exists
                        if (!empty($new_infographic->image_path)) {
                            mmadev_delete_attachment_from_directory($new_infographic->image_path, 'infographics');
                        }
        
                        $file = $imagePath[$key];
                        // store image in folder and return image path
                        $new_infographic->image_path = mmadev_store_and_get_image_path('infographics', $file);
                    } else {
                        $new_infographic->image_path = $imageName[$key];
                    }
                    $new_infographic->icon = !empty($icon[$key]) ? $icon[$key] : null;
                    $new_infographic->status = !empty($status[$key]) ? 1 : 0;
                    $new_infographic->save();
                }
            }
        }
        return redirect()->route('infographics.create')->with('success', 'Infographics updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InfoGraphic $infoGraphic)
    {
        //
    }
}
