<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Models\Style;
use App\Models\StyleHasColour;
use App\Models\StyleSeo;
use App\Models\Testimonial;

class StyleController extends Controller
{
    public function index()
    {
        $styles = Style::all();
        return view('pages.styles.index', compact('styles'));
    }

    public function create()
    {
        return view('pages.styles.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255|unique:styles',
                'style_title' => 'nullable|string|max:255',
                'style_description' => 'nullable|string',
            ]);

            $style = new Style();
            $style->name = $request->input('name');
            $style->slug = str_replace(' ', '-', strtolower($request->input('name')));
            $style->style_title = $request->input('style_title');
            $style->style_description = $request->input('style_description');
            $style->status = !empty($request->input('status')) ? 1 : 0;

            if ($request->hasFile('image_path')) {

                $file = $request->file('image_path');
                // store image in folder and return image path
                $style->image_path = mmadev_store_and_get_image_path('styles', $file);
            }

            $style->save();

            return redirect()->route('styles')->with('success', 'Style created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('styles.create')->with('error', 'Error creating style: ' . $e->getMessage());
        }
    }

    public function edit(Style $style)
    {
        $style->load(['testimonials', 'faqs', 'seo']); 
        return view('pages.styles.edit', compact('style'));
    }

    public function update(Request $request, Style $style)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255|unique:styles,name,' . $style->id,
                'style_title' => 'nullable|string|max:255',
                'style_description' => 'nullable|string',
            ]);

            $style->name = $request->input('name');
            $style->slug = str_replace(' ', '-', strtolower($request->input('name')));
            $style->style_title = $request->input('style_title');
            $style->style_description = $request->input('style_description');
            $style->status = !empty($request->input('status')) ? 1 : 0;

            // Handle image upload (if a new image is provided)
            if ($request->hasFile('image_path')) {
                // Delete old image if it exists
                if (!empty($style->image_path)) {
                    mmadev_delete_attachment_from_directory($style->image_path, 'styles');
                }

                $file = $request->file('image_path');
                // store image in folder and return image path
                $style->image_path = mmadev_store_and_get_image_path('styles', $file);
            }

            $style->save();

            $testimonialDates = $request->date;
            $testimonialUserNames = $request->user_name;
            $testimonials = $request->testimonial;
            
            if (!empty($style->testimonials)) {
                // Delete existing testimonials for this style
                Testimonial::where('style_id', $style->id)->delete();
                // Create new testimonials for this style
                foreach ($testimonials as $key => $testimonial) {
                    // Check if the testimonial is not empty
                    if (!empty($testimonial)) {
                        // Create new testimonial
                        $new_testimonial = new Testimonial();
                        $new_testimonial->style_id = $style->id;
                        $new_testimonial->date = $testimonialDates[$key];
                        $new_testimonial->user_name = $testimonialUserNames[$key];
                        $new_testimonial->testimonial = $testimonial;
                        $new_testimonial->save();
                    }
                }
            }

            $questions = $request->question;
            $answers = $request->answer;
            
            if (!empty($style->faqs)) {
                // Delete existing testimonials for this style
                Faq::where('style_id', $style->id)->delete();
                // Create new testimonials for this style
                foreach ($questions as $key => $question) {
                    // Check if the testimonial is not empty
                    if (!empty($question)) {
                        // Create new testimonial
                        $newFaq = new Faq();
                        $newFaq->style_id = $style->id;
                        $newFaq->question = $questions[$key];
                        $newFaq->answer = $answers[$key];
                        $newFaq->save();
                    }
                }
            }

            $styleColourIds = $request->colour_id;
            
            if (!empty($style->styleHasColours)) {
                // Delete existing testimonials for this style
                // StyleHasColour::where('style_id', $style->id)->delete();
                // Create new testimonials for this style
                foreach ($styleColourIds as $key => $styleColourId) {
                    if (!StyleHasColour::where('style_id', $style->id)->where('colour_id', $styleColourIds[$key])->exists()) {
                        // Check if the testimonial is not empty
                        if (!empty($styleColourId)) {
                            // Create new testimonial
                            $newStyleHasColour = new StyleHasColour();
                            $newStyleHasColour->style_id = $style->id;
                            $newStyleHasColour->colour_id = $styleColourIds[$key];
                            $newStyleHasColour->save();
                        }
                    }
                }
            }
            
            $seo = StyleSeo::where('style_id', $style->id)->first();
            if (isset($seo)) {
                $seo->meta_title = $request->meta_title;
                $seo->meta_description = $request->meta_description;
                $seo->canonical_tag = $request->canonical_tag;
                $seo->schema_code = $request->schema_code;
                $seo->save();
            } else {
                $seo = new StyleSeo();
                $seo->style_id = $style->id;
                $seo->meta_title = $request->meta_title;
                $seo->meta_description = $request->meta_description;
                $seo->canonical_tag = $request->canonical_tag;
                $seo->schema_code = $request->schema_code;
                $seo->save();
            }

            return redirect()->route('styles')->with('success', 'Style updated successfully.');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Error updating style: ' . $e->getMessage());
        }
    }

    public function destroy(Style $style)
    {
        try {
            // Delete image from directory if it exists
            if (!empty($style->image_path)) {
                mmadev_delete_attachment_from_directory($style->image_path, 'styles');
            }
            $style->delete();
            return redirect()->route('styles')->with('success', 'Style deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('styles')->with('error', 'Error deleting style: ' . $e->getMessage());
        }
    }

    public function remove_image(Request $request, Style $style)
    {
        try {
            // Remove the image_path from the Style model and Delete image from directory if it exists
            if (!empty($style->image_path)) {
                mmadev_delete_attachment_from_directory($style->image_path, 'styles');
                $style->image_path = null;
            }
            $style->save();

            // Return a success response
            return response()->json(['message' => 'Image removed successfully'], 200);
        } catch (\Exception $e) {
            // Return an error response if an exception occurs
            return response()->json(['error' => 'Error removing image'], 500);
        }
    }

    public function colours(Request $request, Style $style) {
        $styleHasColours = StyleHasColour::with('style', 'colour')->where('style_id', $style->id)->get();
        return view('pages.styles.colours', compact('style', 'styleHasColours'));
    }

    public function styleColourImageUpload(Request $request) {
        $styleHasColour = StyleHasColour::where('style_id', $request->style_id)->where('colour_id', $request->colour_id)->first();
        if (isset($styleHasColour)) {
            if ($request->hasFile('image_path')) {
                // Delete old image if it exists
                if (!empty($styleHasColour->image_path)) {
                    mmadev_delete_attachment_from_directory($styleHasColour->image_path, 'styles/colours');
                }

                $file = $request->file('image_path');
                // store image in folder and return image path
                $styleHasColour->image_path = mmadev_store_and_get_image_path('styles/colours', $file);
            }
            $styleHasColour->save();
            return redirect()->back()->with('success', 'Image uploaded successfully.');
        }
        return redirect()->back()->with('error', 'Something went wrong.');
    }

    public function deleteColour(Request $request, StyleHasColour $styleHasColours) {
        try {
            dd($styleHasColours);
            // Delete image from directory if it exists
            if (!empty($styleHasColours->image_path)) {
                mmadev_delete_attachment_from_directory($styleHasColours->image_path, 'styles/colours');
            }
            $styleHasColours->delete();
            return redirect()->route('style.colours')->with('success', 'Colour deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('style.colours')->with('error', 'Error deleting colour: ' . $e->getMessage());
        }
    }

    public function setColourStatus(Request $request, $styleId, $colourId) {
        try {
            $styleHasColour = StyleHasColour::where('style_id', $styleId)->where('colour_id', $colourId)->first();
            if (isset($styleHasColour)) {
                $styleHasColour->status = !$styleHasColour->status;
                $styleHasColour->save();
                return redirect()->back()->with('success', 'Status updated successfully.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting colour: ' . $e->getMessage());
        }
    }

}
