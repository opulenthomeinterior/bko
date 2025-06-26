<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ColourPageContent;
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
                    mmadev_delete_style_image_attachment_from_directory($style->image_path, 'styles');
                }

                $file = $request->file('image_path');
                // store image in folder and return image path
                $style->image_path = mmadev_store_and_get_image_path('styles', $file);
            }

            // Handle image upload (if a new image is provided)
            if ($request->hasFile('header_image')) {
                // Delete old image if it exists
                if (!empty($style->header_image)) {
                    mmadev_delete_style_image_attachment_from_directory($style->header_image, 'styles');
                }

                $file = $request->file('header_image');
                // store image in folder and return image path
                $style->header_image = mmadev_store_and_get_image_path('styles', $file);
            }

            // Handle image upload (if a new image is provided)
            if ($request->hasFile('image_path_two')) {
                // Delete old image if it exists
                if (!empty($style->image_path_two)) {
                    mmadev_delete_style_image_attachment_from_directory($style->image_path_two, 'styles');
                }

                $file = $request->file('image_path_two');
                // store image in folder and return image path
                $style->image_path_two = mmadev_store_and_get_image_path('styles', $file);
            }

            // Handle image upload (if a new image is provided)
            if ($request->hasFile('mobile_image_path')) {
                // Delete old image if it exists
                if (!empty($style->mobile_image_path)) {
                    mmadev_delete_style_image_attachment_from_directory($style->mobile_image_path, 'styles');
                }

                $file = $request->file('mobile_image_path');
                // store image in folder and return image path
                $style->mobile_image_path = mmadev_store_and_get_image_path('styles', $file);
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
                        $new_testimonial->page_type = 'styles';
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

            foreach ($styleColourIds as $styleColourId) {
                // Check if the colour is not empty
                if (!empty($styleColourId)) {
                    // Check if the record already exists
                    $existingRecord = StyleHasColour::where('style_id', $style->id)
                        ->where('colour_id', $styleColourId)
                        ->exists();

                    if (!$existingRecord) {
                        // Add new colour if not already exists
                        $newStyleHasColour = new StyleHasColour();
                        $newStyleHasColour->style_id = $style->id;
                        $newStyleHasColour->colour_id = $styleColourId;
                        $newStyleHasColour->save();
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

    public function colourPageContent(Request $request, $styleHasColourId) {
        try {
            $colourPageContent = ColourPageContent::where('style_has_colour_id', $styleHasColourId)->get();
            $colourPageCont = StyleHasColour::where('id', $styleHasColourId)->first();
            if (isset($colourPageCont)) {
                $catIds = json_decode($colourPageCont->suitable_components, true);
            }
            if (is_null($catIds)) {
                $catIds = [];
            }
            $categories = Category::where('parent_category_id', null)->where('status', 1)->get();
            return view('pages.styles.colour_page_content', compact('colourPageContent', 'styleHasColourId', 'categories', 'colourPageCont', 'catIds'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting colour: ' . $e->getMessage());
        }
    }

    public function updateColourPageContent(Request $request, $styleHasColourId) {
        try {
            $section_main_headings = $request->section_main_heading;
            $suitableComponents = json_encode($request->suitable_components);
            StyleHasColour::where('id', $styleHasColourId)->update([
                'suitable_components' => $suitableComponents
            ]);
            ColourPageContent::where('style_has_colour_id', $styleHasColourId)->delete();
            foreach ($section_main_headings as $key => $section_main_heading) {
                $colourPageContent = ColourPageContent::where('id', $request->colour_page_content_id[$key] ?? 0)->first();
                if (isset($colourPageContent)) {
                    if (!empty($request->section_main_heading[$key]) && !empty($request->section_content[$key])) {
                        $colourPageContent->section_main_heading = $request->section_main_heading[$key];
                        $colourPageContent->section_content = $request->section_content[$key];
                        $colourPageContent->style_has_colour_id = $styleHasColourId;
                        $colourPageContent->save();
                    }
                } else {
                    if (!empty($request->section_main_heading[$key]) && !empty($request->section_content[$key])) {
                        $colourPageContent = new ColourPageContent();
                        $colourPageContent->section_main_heading = $request->section_main_heading[$key];
                        $colourPageContent->section_content = $request->section_content[$key];
                        $colourPageContent->style_has_colour_id = $styleHasColourId;
                        $colourPageContent->save();
                    }
                }
            }
            return redirect()->back()->with('success', 'Updated successfully');
        } catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('error', 'Something went wrong: ' . $e->getMessage());
        }
    }

}
