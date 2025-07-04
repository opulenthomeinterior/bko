<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Order;
use App\Models\Style;
use App\Models\Colour;
use App\Models\Product;
use App\Models\Assembly;
use App\Models\Category;
use App\Models\Printing;
use App\Models\StyleSeo;
use App\Models\VideoGuide;
use App\Models\CategorySeo;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\StyleHasColour;
use App\Models\DownloadableGuide;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function dashboard()
    {
        return view('pages.dashboard');
    }


    // Frontend
    public function shop()
    {
        $styles = Style::all();
        $categories = Category::whereNull('parent_category_id')->get();

        return view('frontend.shop.index', compact('styles', 'categories'));
    }

    public function orderkitchen()
    {
        // Get all unique styles and assemblies
        $uniqueStyles = Style::distinct()->where('status', 1)->get();
        // $uniqueAssemblies = Assembly::whereIn('name', ['Flat-Packed', 'Rigid'])->get();
        $uniqueAssemblies = Assembly::whereIn('name', ['Flat Pack', 'Rigid'])->where('status', 1)->get();

        $data = [];
        $assemblyData = [];

        foreach ($uniqueStyles as $style) {
            $styleData['data'] = $style;
            $styleData['assemblies'] = [];

            foreach ($uniqueAssemblies as $assembly) {
                $products = Product::where('style_id', $style->id)->where('assembly_id', $assembly->id)->where('status', 'active');
                // dd($products->pluck('colour_id')->unique());
                // Extract color records from products
                $assemblyData['data'] = $assembly;
                $assemblyData['colours'] = Colour::whereIn('id', $products->pluck('colour_id')->unique())->whereNotNull('finishing')->where('status', 1)->get();
                
                $styleData['assemblies'][$assembly->name] = $assemblyData;
            }

            $data[$style->name] = $styleData;
        }
        $testimonials = Testimonial::where('page_type', 'styles')->limit(5)->get();

        return view('frontend.shop.orderkitchen.index', compact('data', 'testimonials'));
    }


    public function orderkitchenbyname(Request $request, $slug)
    {
        try {
            $style = Style::with('testimonials', 'styleHasColours.colour')->where('slug', $slug)->where('status', 1)->firstOrFail();

            // Fetch all products with the given style_id and status
            $styleProducts = Product::where('style_id', $style->id)->where('status', 'active')->get();

            // Collect all unique colour_ids from the products
            $colourIds = $styleProducts->pluck('colour_id')->unique();

            // Fetch only the colours related to those products
            $colours = Colour::whereIn('id', $colourIds)->whereNotNull('finishing')->get();

            $uniqueAssemblies = Assembly::whereIn('name', ['Flat Pack', 'Rigid'])->where('status', 1)->get();

            $styleData['data'] = $style;
            $styleData['assemblies'] = [];

            foreach ($uniqueAssemblies as $assembly) {
                $products = Product::where('style_id', $style->id)->where('assembly_id', $assembly->id)->where('status', 'active')->get();

                $assemblyData['data'] = $assembly;
                // Extract color records from products
                $assemblyData['colours'] = Colour::whereIn('id', $products->pluck('colour_id')->unique())->whereNotNull('finishing')->get();
                $styleData['assemblies'][$assembly->name] = $assemblyData;
            }

            $styleHasColours = StyleHasColour::where('style_id', $style->id)->where('status', 1)->get();

            // echo '<pre>';
            // print_r($styleData);
            // echo '</pre>';
            // exit;

            $testimonials = Testimonial::where('style_id', $style->id)->where('page_type', 'styles')->get();
            $seo = StyleSeo::where('style_id', $style->id)->first();

            return view('frontend.shop.orderkitchen.orderkitchenbyname', compact('styleData', 'colours', 'styleHasColours', 'seo', 'testimonials'));
        } catch (\Exception $e) {
            return redirect()->route('orderkitchen');
        }
    }

    public function orderkitchenbycolourname(Request $request, $styleSlug, $colourSlug)
    {
        try {
            $style = Style::with('testimonials')->where('slug', $styleSlug)->where('status', 1)->firstOrFail();
            $colour = Colour::where('slug', $colourSlug)->whereNotNull('finishing')->first();

            $styleHasColour = StyleHasColour::where('style_id', $style->id)->where('colour_id', $colour->id)->where('status', 1)->first();
            
            $seo = StyleSeo::where('style_id', $style->id)->first();

            if (!isset($style) || !isset($colour) || !isset($styleHasColour) || !isset($seo)) {
                return redirect()->route('orderkitchen');
            }

            return view('frontend.shop.orderkitchen.orderkitchenbycolourname', compact('style', 'styleHasColour', 'seo'));
        } catch (\Exception $e) {
            return redirect()->route('orderkitchen');
        }
    }

    public function orderkitchenbycolour(Request $request, $style = null, $assembly = null, $colour = null, $parentSubCategory = null)
    {
        try {
            $style = Style::where('slug', $style)->where('status', 1)->firstOrFail();
            $assembly = Assembly::where('slug', $assembly)->where('status', 1)->firstOrFail();
            $colour = Colour::where('slug', $colour)->where('status', 1)->firstOrFail();
            $styleHasColour = StyleHasColour::where('style_id', $style->id)->where('colour_id', $colour->id)->firstOrFail();
            $title = trim(($style->name ?? '') . ' ' . ($colour->trade_colour ?? '') . ' ' . ($assembly->name ?? ''));

            // echo '<pre>';
            // print_r($assembly);
            // print_r($colour);
            // echo '</pre>';
            // exit;
    
            $baseCabinets = Product::where('parent_category_id', 2)
                ->where('style_id', $style->id)
                ->where('assembly_id', $assembly->id)
                ->where('colour_id', $colour->id)->where('status', 'active');
            if (!empty($parentSubCategory)) {
                if ($parentSubCategory == 'one-drawer') {
                    $parentSubCategory = 'd-one';
                } else if ($parentSubCategory == 'two-drawers') {
                    $parentSubCategory = 'd-two';
                } else if ($parentSubCategory == 'three-drawers') {
                    $parentSubCategory = 'd-three';
                } else if ($parentSubCategory == 'four-drawers') {
                    $parentSubCategory = 'd-four';
                } else if ($parentSubCategory == 'five-drawers') {
                    $parentSubCategory = 'd-five';
                }
                $baseCabinets = $baseCabinets->where('parent_sub_category', $parentSubCategory);
            }
            $baseCabinets = $baseCabinets->get();
    
            $wallCabinets = Product::where('parent_category_id', 3)
                ->where('style_id', $style->id)
                ->where('assembly_id', $assembly->id)
                ->where('colour_id', $colour->id)->where('status', 'active')
                ->get();
    
            $tallCabinets = Product::where('parent_category_id', 4)
                ->where('style_id', $style->id)
                ->where('assembly_id', $assembly->id)
                ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $panels = Product::where('parent_category_id', 5)
                ->where('style_id', $style->id)
                ->where('assembly_id', $assembly->id)
                ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $accessories = Product::where('parent_category_id', 8)
                ->where('style_id', $style->id)
                ->where(function ($q) use ($assembly) {
                    $q->where('assembly_id', $assembly->id)->orWhere('assembly_id', 1);
                })
                ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $handles = Product::where('parent_category_id', 6)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $golaHandlelessRails = Product::where('parent_category_id', 7)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $swatchesAndSamples = Product::where('parent_category_id', 16)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $worktops = Product::where('parent_category_id', 10)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();

            $worktopsAndUpStands = Product::where('parent_category_id', 11)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $breakfastBars = Product::where('parent_category_id', 12)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $edgings = Product::where('parent_category_id', 13)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $sinks = Product::where('parent_category_id', 15)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();

            $taps = Product::where('parent_category_id', 14)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $appliances = Product::where('parent_category_id', 9)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $internals = Product::where('parent_category_id', 17)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            // echo '<pre>';
            // print_r($baseCabinets);
            // echo '</pre>';
            // exit;
    
            return view('frontend.shop.orderkitchen.orderkitchenbycolour', compact('style', 'assembly', 'colour', 'baseCabinets', 'wallCabinets', 'tallCabinets', 'panels', 'handles', 'golaHandlelessRails', 'accessories', 'appliances', 'worktops', 'worktopsAndUpStands', 'breakfastBars', 'edgings', 'taps', 'sinks', 'swatchesAndSamples', 'title', 'internals', 'styleHasColour'));
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function viewallorderkitchenbycolour(Request $request, $style = null, $assembly = null, $colour = null)
    {
        try {
            $style = Style::where('slug', $style)->where('status', 1)->firstOrFail();
            $assembly = Assembly::where('slug', $assembly)->where('status', 1)->firstOrFail();
            $colour = Colour::where('slug', $colour)->where('status', 1)->firstOrFail();

            $title = trim(($style->name ?? '') . ' ' . ($colour->trade_colour ?? '') . ' ' . ($assembly->name ?? ''));

            // echo '<pre>';
            // print_r($assembly);
            // print_r($colour);
            // echo '</pre>';
            // exit;
            
            $baseCabinets = Product::where('parent_category_id', 2)
            ->where('style_id', $style->id)
            ->where('assembly_id', $assembly->id)
            ->where('colour_id', $colour->id)->where('status', 'active');
            if (!empty($parentSubCategory)) {
                $baseCabinets = $baseCabinets->where('parent_sub_category', $parentSubCategory);
            }
            $baseCabinets = $baseCabinets->get();
    
            $wallCabinets = Product::where('parent_category_id', 3)
                ->where('style_id', $style->id)
                ->where('assembly_id', $assembly->id)
                ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $tallCabinets = Product::where('parent_category_id', 4)
                ->where('style_id', $style->id)
                ->where('assembly_id', $assembly->id)
                ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $panels = Product::where('parent_category_id', 5)
                ->where('style_id', $style->id)
                ->where('assembly_id', $assembly->id)
                ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $handles = Product::where('parent_category_id', 6)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $golaHandlelessRails = Product::where('parent_category_id', 7)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $accessories = Product::where('parent_category_id', 8)
                ->where('style_id', $style->id)
                ->where(function ($q) use ($assembly) {
                    $q->where('assembly_id', $assembly->id)->orWhere('assembly_id', 1);
                })
                ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $appliances = Product::where('parent_category_id', 9)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $worktops = Product::where('parent_category_id', 10)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $worktopsAndUpStands = Product::where('parent_category_id', 11)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $breakfastBars = Product::where('parent_category_id', 12)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $edgings = Product::where('parent_category_id', 13)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $taps = Product::where('parent_category_id', 14)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $sinks = Product::where('parent_category_id', 15)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $swatchesAndSamples = Product::where('parent_category_id', 16)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            $internals = Product::where('parent_category_id', 17)
                // ->where('style_id', $style->id)
                // ->where('assembly_id', $assembly->id)
                // ->where('colour_id', $colour->id)
                ->where('status', 'active')
                ->get();
    
            // echo '<pre>';
            // print_r($baseCabinets);
            // echo '</pre>';
            // exit;
    
            return view('frontend.shop.orderkitchen.viewallorderkitchenbycolour', compact('style', 'assembly', 'colour', 'baseCabinets', 'wallCabinets', 'tallCabinets', 'panels', 'handles', 'golaHandlelessRails', 'accessories', 'appliances', 'worktops', 'worktopsAndUpStands', 'breakfastBars', 'edgings', 'taps', 'sinks', 'swatchesAndSamples', 'title', 'internals'));
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    public function ordercomponent(Request $request)
    {
        $components = Category::whereNull('parent_category_id')->where('status', 1)->get();

        // echo '<pre>';
        // print_r($components);
        // echo '</pre>';
        // exit;
        $testimonials = Testimonial::where('page_type', 'categories')->get();
        return view('frontend.shop.ordercomponent.index', compact('components', 'testimonials'));
    }

    public function ordercomponentbyname(Request $request, $slug)
    {
        $category = Category::with('testimonials', 'faqs')->where('slug', $slug)->firstOrFail();
        $children = Category::where('parent_category_id', $category->id)->pluck('id')->toArray();

        $types = Category::whereIn('id', $children)
                ->select('id', 'name', 'status')
                ->where('status', 1)
                ->whereIn('id', function($query) use ($children) {
                    $query->select(DB::raw('MIN(id)'))
                        ->from('categories')
                        ->whereIn('id', $children)
                        ->groupBy('name');
                })
                ->orderBy('name', 'ASC')
                ->get();
        $assemblies = Assembly::where('slug', 'stock')->where('status', 1)->get();
        $styles = Style::where('status', 1)->get();

        $colours = Colour::whereIn('id', Product::whereIn('category_id', $children)->pluck('colour_id')->unique())->where('status', 1)->get();

        // Include the current category in the list of children
        $children[] = $category->id;
        if ($slug == 'handles' || $slug == 'sinks') {
            // $count = Product::whereIn('category_id', $children)->where('status', 'active')->groupBy('parent_sub_category')->get();
            $groups = Product::whereIn('category_id', $children)
                ->where('status', 'active')
                ->groupBy('parent_sub_category')
                ->select('parent_sub_category');
            $groups = $groups->get();
            $count = $groups->count();
        } else {
            $count = Product::whereIn('category_id', $children)->where('status', 'active');
            if (!empty($request->style_id)) {
                $count = Product::whereIn('category_id', $children)->where('style_id', $request->style_id)->where('status', 'active');
            }
            if (!empty($request->colour_id)) {
                $count = Product::whereIn('category_id', $children)->where('colour_id', $request->colour_id)->where('status', 'active');
            }
            $count = $count->count();
        }
        if ($slug == 'doors') {
        }
        $currentPage = 1;
        $limit = 12;
        $offset = ($currentPage - 1) * $limit;
        $pages = ceil($count / $limit);

        if ($currentPage > $pages) {
            $currentPage = $pages;
        }

        if ($currentPage < 1) {
            $currentPage = 1;
        }
        if ($slug == 'handles' || $slug == 'sinks') {
            $products = Product::whereIn('category_id', $children)->where('status', 'active')->groupBy('parent_sub_category')->offset($offset)->limit($limit);
            $products = $products->get();
        } else {
            $products = Product::whereIn('category_id', $children)->where('status', 'active')->offset($offset)->limit($limit);
            if (!empty($request->style_id)) {
                $products = $products->where('style_id', $request->style_id);
            }
            if (!empty($request->colour_id)) {
                $products = $products->where('colour_id', $request->colour_id);
            }
            $products = $products->get();
        }

        $heights = Product::whereIn('category_id', $children)
                ->where('status', 'active')
                ->select('height', DB::raw('COUNT(*) as count'), 'id')
                ->where('height', '!=', '')
                ->groupBy('height')
                ->get();

        $widths = Product::whereIn('category_id', $children)
                ->where('status', 'active')
                ->select('width', DB::raw('COUNT(*) as count'), 'id')
                ->where('width', '!=', '')
                ->groupBy('width')
                ->get();

        $seo = CategorySeo::where('category_id', $category->id)->first();

        $urlStyleId = $request->style_id ?? '';
        $urlColourId = $request->colour_id ?? '';
        
        $products->map(function ($product) {
            $findProduct = Product::where('style_id', $product->style_id)
                            ->where('assembly_id', $product->assembly_id)
                            ->where('colour_id', $product->colour_id)
                            ->where('id', $product->id)->where('status', 'active')
                            ->first();

            $categoryShortTitle = $findProduct?->short_title;
            $parentSubCategory = $findProduct?->parent_sub_category;

            $relatedCategoryProducts = Product::with('colour')->where('id', '!=', $product->id)
                ->where('status', 'active')
                ->whereIn('parent_category_id', [6, 15])
                ->where(function ($q) use ($parentSubCategory, $categoryShortTitle) {
                    $q = $q->where('parent_sub_category', $parentSubCategory)
                    ->where('short_title', $categoryShortTitle);
                })
                ->count();
            $product->related_products_count = $relatedCategoryProducts;
        });

        $testimonials = Testimonial::where('category_id', $category->id)->where('page_type', 'categories')->get();

        if ($slug == 'doors') {
            return view('frontend.shop.ordercomponent.doors', compact('urlStyleId', 'urlColourId', 'category', 'products', 'types', 'assemblies', 'styles', 'colours', 'currentPage', 'pages', 'count', 'heights', 'seo', 'slug', 'widths', 'testimonials'));
        } else if ($slug == 'handles') {
            return view('frontend.shop.ordercomponent.handles', compact('urlStyleId', 'urlColourId', 'category', 'products', 'types', 'assemblies', 'styles', 'colours', 'currentPage', 'pages', 'count', 'heights', 'seo', 'slug', 'widths', 'testimonials'));
        } else if ($slug == 'accessories') {
            return view('frontend.shop.ordercomponent.accessories', compact('urlStyleId', 'urlColourId', 'category', 'products', 'types', 'assemblies', 'styles', 'colours', 'currentPage', 'pages', 'count', 'heights', 'seo', 'slug', 'widths', 'testimonials'));
        } else if ($slug == 'sinks') {
            return view('frontend.shop.ordercomponent.sinks', compact('urlStyleId', 'urlColourId', 'category', 'products', 'types', 'assemblies', 'styles', 'colours', 'currentPage', 'pages', 'count', 'heights', 'seo', 'slug', 'widths', 'testimonials'));
        } else if ($slug == 'internals') {
            return view('frontend.shop.ordercomponent.internals', compact('urlStyleId', 'urlColourId', 'category', 'products', 'types', 'assemblies', 'styles', 'colours', 'currentPage', 'pages', 'count', 'heights', 'seo', 'slug', 'widths', 'testimonials'));
        }
        return view('frontend.shop.ordercomponent.ordercomponentbyname', compact('urlStyleId', 'urlColourId', 'category', 'products', 'types', 'assemblies', 'styles', 'colours', 'currentPage', 'pages', 'count', 'heights', 'seo', 'slug', 'widths', 'testimonials'));
    }

    public function order_component_by_filter(Request $request, $slug)
    {
        $t = $request->types ? $request->types : [];
        $a = $request->assemblies ? $request->assemblies : [];
        $s = $request->styles ? $request->styles : [];
        $c = $request->colors ? $request->colors : [];
        $h = $request->heights ? $request->heights : [];
        $w = $request->widths ? $request->widths : [];
        $filterChanged = $request->filterChanged;
        $currentPage = 1;

        if ($filterChanged) {
            $currentPage = 1;
        } else {
            $currentPage = $request->page ? $request->page : 1;
        }

        $parent_category = Category::where('slug', $slug)->firstOrFail();
        // if ($slug == 'handles' || $slug == 'sinks') {
        //     $productsQuery = Product::where('status', 'active')->groupBy('parent_sub_category');
        // } else {
        $productsQuery = Product::where('status', 'active');
        // }

        if (!empty($t)) {
            $productsQuery->whereIn('category_id', $t);
        }

        if (!empty($a)) {
            $productsQuery->whereIn('assembly_id', $a);
        }

        if (!empty($s)) {
            $productsQuery->whereIn('style_id', $s);
        }

        if (!empty($c)) {
            $productsQuery->whereIn('colour_id', $c);
        }

        if (!empty($h)) {
            $productsQuery->whereIn('height', $h);
        }

        if (!empty($w)) {
            $productsQuery->whereIn('width', $w);
        }
        ///////////////////////////////
        if ($slug == 'handles' || $slug == 'sinks') {
            $groupedProducts = $productsQuery->where('parent_category_id', $parent_category->id)->groupBy('parent_sub_category');
            $count = $groupedProducts->get()->count();
        } else {
            $count = $productsQuery->where('parent_category_id', $parent_category->id)->count();
        }
        // $currentPage = 1;
        $limit = 12;
        $offset = ($currentPage - 1) * $limit;
        $pages = ceil($count / $limit);

        if ($currentPage > $pages) {
            $currentPage = $pages;
        }

        if ($currentPage < 1) {
            $currentPage = 1;
        }
        //////////////////////////////

        $products = $productsQuery->where('parent_category_id', $parent_category->id)
            ->with('ParentCategory', 'category', 'colour', 'style', 'assembly')
            ->offset($offset)->limit($limit)->get();
            
        $products->map(function ($product) {
            $findProduct = Product::where('style_id', $product->style_id)
                            ->where('assembly_id', $product->assembly_id)
                            ->where('colour_id', $product->colour_id)
                            ->where('id', $product->id)->where('status', 'active')
                            ->first();

            $categoryShortTitle = $findProduct?->short_title;
            $parentSubCategory = $findProduct?->parent_sub_category;

            $relatedCategoryProducts = Product::with('colour')->where('id', '!=', $product->id)
                ->where('status', 'active')
                ->whereIn('parent_category_id', [6, 15])
                ->where(function ($q) use ($parentSubCategory, $categoryShortTitle) {
                    $q = $q->where('parent_sub_category', $parentSubCategory)
                    ->where('short_title', $categoryShortTitle);
                })
                ->count();
            $product->related_products_count = $relatedCategoryProducts;
        });
        // $products = $this->categorizedProducts($products);
        // dd($products);

        $children = Category::where('parent_category_id', $parent_category->id)->pluck('id')->toArray();
        // Include the current category in the list of children
        $children[] = $parent_category->id;

        $types = Category::whereIn('id', $children)->get();
        $assemblies = Assembly::where('status', 1)->get();
        $styles = Style::where('status', 1)->get();
        $colours = Colour::whereIn('id', Product::whereIn('category_id', $children)->where('status', 'active')->pluck('colour_id')->unique())->where('status', 1)->whereNotNull('finishing')->get();
        
        return response()->json([
            'category' => $parent_category,
            'products' => $products,
            'types' => $types,
            'assemblies' => $assemblies,
            'styles' => $styles,
            'colours' => $colours,
            'currentPage' => $currentPage,
            'pages' => $pages,
            'count' => $count
        ]);
    }

    public function orderbyproduct(Request $request, $slug, $serialNumber = null)
    {
        $product = Product::where('slug', $slug)->where('serial_number', $serialNumber)->where('status', 'active')->firstOrFail();

        $products = Product::where('style_id', $product->style_id)->where('assembly_id', $product->assembly_id)->where('status', 'active')->get();

        $colours = Colour::whereIn('id', $products->pluck('colour_id')->unique())
            ->whereNotNull('finishing')->where('status', 1)
            ->where('id', '!=', $product->colour_id)
            ->get();

        $relatedProducts = Product::where('style_id', $product->style_id)
            // ->where('assembly_id', $product->assembly_id)
            // ->where('colour_id', $product->colour_id)
            // ->where('id', '!=', $product->id)
            ->where('category_id', $product->category_id)
            ->where('status', 'active')
            ->get();
        
        $findProduct = Product::where('style_id', $product->style_id)
                        ->where('assembly_id', $product->assembly_id)
                        ->where('colour_id', $product->colour_id)
                        ->where('id', $product->id)->where('status', 'active')
                        ->first();

        $categoryShortTitle = $findProduct?->short_title;
        $parentSubCategory = $findProduct?->parent_sub_category;

        $relatedCategoryProducts = Product::with('colour')->where('id', '!=', $product->id)
            ->where('status', 'active')
            ->whereIn('parent_category_id', [6, 15])
            ->where(function ($q) use ($parentSubCategory, $categoryShortTitle) {
                $q = $q->where('parent_sub_category', $parentSubCategory)
                ->where('short_title', $categoryShortTitle);
            })->first();
        $categorizedProductCat = '';
        if (isset($relatedCategoryProducts)) {
            $categorizedProductCat = $relatedCategoryProducts->categorized_product;
        }

        $relatedCategoryProducts = Product::with('colour')->where('id', '!=', $product->id)
            ->where('status', 'active')
            ->whereIn('parent_category_id', [6, 15])
            ->where(function ($q) use ($parentSubCategory, $categoryShortTitle) {
                $q = $q->where('parent_sub_category', $parentSubCategory)
                ->where('short_title', $categoryShortTitle);
            })
            ->where('categorized_product', $categorizedProductCat)
            ->get();

        return view('frontend.shop.orderkitchen.orderbyproduct', compact('product', 'colours', 'relatedProducts', 'relatedCategoryProducts', 'categorizedProductCat'));
    }

    public function faq()
    {
        $generalFaqs = Faq::where('type', 'general')->get();
        $deliveryFaqs = Faq::where('type', 'delivery')->get();
        return view('frontend.support.faq', compact('generalFaqs', 'deliveryFaqs'));
    }

    public function cart()
    {
        return view('frontend.shop.orderkitchen.cart');
    }

    public function checkout()
    {
        return view('frontend.shop.orderkitchen.checkout');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function fittingguide()
    {
        $downloadguide = DownloadableGuide::where('type', 'guide')->get();
        $videoguide = VideoGuide::where('type', 'guide')->get();

        return view('frontend.fittingguide', compact('downloadguide', 'videoguide'));
    }

    public function terminology()
    {
        return view('frontend.terminology');
    }
    public function needhelp()
    {
        return view('frontend.measure');
    }

    public function kitchenarrive()
    {
        return view('frontend.kitchenarrive');
    }

    public function deliveries()
    {
        $deliveryFaqs = Faq::where('type', 'delivery')->get();
        return view('frontend.support.deliveries', compact('deliveryFaqs'));
    }

    public function downloadable()
    {
        $downloadable = DownloadableGuide::where('type', 'resource')->get();
        return view('frontend.support.downloadable', compact('downloadable'));
    }

    public function installationvideos()
    {
        $installationvideo = VideoGuide::where('type', 'installation')->get();
        return view('frontend.support.installationvideos', compact('installationvideo'));
    }

    public function printresources()
    {

        return view('frontend.support.printresources');
    }

    public function cookies()
    {
        return view('frontend.legal.cookies');
    }
    public function termandcondition()
    {
        return view('frontend.legal.termandcondition');
    }

    public function privacy()
    {
        return view('frontend.legal.privacy');
    }

    public function pricepromise()
    {
        return view('frontend.legal.pricepromise');
    }

    public function pricebeat()
    {
        return view('frontend.legal.pricebeat');
    }

    public function promotion()
    {
        return view('frontend.legal.promotion');
    }

    public function virtualdesignterm()
    {
        return view('frontend.legal.virtualdesignterm');
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('frontend.support.blog', compact('blogs'));
    }

    public function showBlog($slug)
    {
        try {
            $blog = Blog::where('slug', $slug)->first();

            if (!$blog) {
                return redirect()->route('blog');
            }

            return view('frontend.support.singleblog', compact('blog'));
        } catch (\Exception $e) {
            return redirect()->route('blog');
        }
    }

    public function designservice()
    {
        return view('frontend.designservice');
    }

    public function order_history()
    {
        if (!auth()->user()) {
            return redirect()->route('login');
        }
        $orders = Order::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();

        return view('frontend.orderhistory', compact('orders'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        if (!$search) {
            return redirect()->route('shop');
        }
        $products = Product::where('price', '!=', 0)
                    ->where('status', 'active')
                    ->where(function ($q) use ($search) {
                        $q->where('product_code', '=', $search)
                        ->orWhere('short_title', '=', $search)
                        ->orWhere('slug', '=', $search)
                        ->orWhere('full_title', 'like', '%' . $search . '%')
                        ->orWhere('product_description', 'like', '%' .  $search . '%');
                    })
                    ->paginate(100);

        return view('frontend.search', compact('products', 'search'));
    }

    public function compare_product(Request $request)
    {
        try {
            $id = $request->productId;

            $product = Product::where('id', $id)->with('style', 'assembly', 'colour')->where('status', 'active')->first();

            $styles = Style::where('id', '!=', $product->style_id)->where('status', 1)->pluck('id');

            // echo '<pre>';
            // print_r($product);
            // echo '</pre>';
            // exit;

            $products = Product::where('parent_category_id', $product->parent_category_id)
                ->where('category_id', $product->category_id)
                ->where('assembly_id', $product->assembly_id)
                ->where('colour_id', $product->colour_id)->where('status', 'active')
                ->whereIn('style_id', $styles)->with('style', 'assembly', 'colour', 'ParentCategory')->get();

            return response()->json(['status' => 'success', 'products' => $products, 'product' => $product]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Product not found']);
        }
    }

    public function site_maps() {

        // Get all unique styles and assemblies
        $uniqueStyles = Style::distinct()->where('status', 1)->get();
        $uniqueAssemblies = Assembly::whereIn('name', ['Flat Pack', 'Rigid'])->where('status', 1)->get();

        // Order Kitchen
        $orderKitchen = [];
        $assemblyData = [];

        foreach ($uniqueStyles as $style) {
            $styleData['data'] = $style;
            $styleData['assemblies'] = [];

            foreach ($uniqueAssemblies as $assembly) {
                $products = Product::where('style_id', $style->id)->where('assembly_id', $assembly->id)->where('status', 'active')->get(['colour_id']);

                // Extract color records from products
                $assemblyData['data'] = $assembly;
                $assemblyData['colours'] = Colour::whereIn('id', $products->pluck('colour_id')->unique())->whereNotNull('finishing')->where('status', 1)->get();

                $styleData['assemblies'][$assembly->name] = $assemblyData;
            }

            $orderKitchen[$style->name] = $styleData;
        }

        // Order Component
        $orderComponent = Category::whereNull('parent_category_id')->get(['name', 'slug']);

        // Downloadable Resources
        $downloadableResources = DownloadableGuide::where('type', 'resource')->get();

        // Blogs
        $blogs = Blog::all(['title', 'slug']);

        // echo '<pre>';
        // print_r($orderKitchen);
        // echo '</pre>';
        // exit;

        return view('frontend.legal.site-maps', compact('orderKitchen', 'orderComponent', 'downloadableResources', 'blogs'));
    }

    public function help_and_guides() {
        return view('frontend.help-and-guides-page');
    }

    public function support_page() {
        return view('frontend.support.index');
    }

    public function styleColours(Request $request) {
        $styleId = $request->style_id;
        $colours = StyleHasColour::where('style_id', $styleId)->where('status', 1)->pluck('colour_id');
        return response()->json(['success' => true, 'colours' => $colours]);
    }

    public function wardrobes(Request $request) {
        $adjectives = ['Elegant', 'Modern', 'Classic', 'Rustic', 'Compact', 'Spacious', 'Versatile', 'Chic', 'Minimalist', 'Luxurious'];
        $nouns = ['Aurora', 'Haven', 'Sanctuary', 'Vista', 'Oasis', 'Summit', 'Harmony', 'Zenith', 'Realm', 'Echo'];

        $products = collect(range(1, 40))->map(function ($index) use ($adjectives, $nouns) {
            return (object) [
                'id' => $index,
                'slug' => 'Wardrobe ' . $index,
                'short_title' => $adjectives[array_rand($adjectives)] . ' ' . $nouns[array_rand($nouns)],
                'full_title' => $adjectives[array_rand($adjectives)] . ' ' . $nouns[array_rand($nouns)],
                'image_path' => 'Wardrobe ' . $index,
                'product_code' => 'wrb-'.$index,
                'discounted_price' => 0,
                'ParentCategory' => null,
                // 'discounted_price' => 0,
                // 'discounted_price' => 0,
                // 'discounted_price' => 0,
                'material' => ['Wood', 'Metal', 'Glass', 'Composite'][array_rand(['Wood', 'Metal', 'Glass', 'Composite'])],
                'price' => rand(100, 1000), // Random price between 100 and 1000
                'dimensions' => rand(50, 200) . 'x' . rand(50, 200) . 'x' . rand(50, 200) . ' cm',
            ];
        });
        return view('frontend.shop.wardrobes.index', compact('products'));
    }

    public function doorsReplacement() {
        $styles = Style::where('status', '1')->get();
        // foreach ($styles as $style) {
        //     $colourIds = Product::where('parent_category_id', 1)->where('style_id', $style->id)->where('status', 'active')->groupBy('colour_id')->pluck('colour_id');
        //     $style['colours'] = $colourIds;
        // }
        // First, fetch all products that match parent_category_id and status
        $products = Product::where('parent_category_id', 1)
                    ->where('status', 'active')
                    ->get(['style_id', 'colour_id']);

        // Group products by style_id
        $groupedProducts = $products->groupBy('style_id');
        $testimonials = Testimonial::whereNull('style_id')->get();
        $styles = $styles->map(function ($style) use ($groupedProducts) {
            $colours = $groupedProducts->get($style->id)?->pluck('colour_id')->unique()->values() ?? collect();
            $style['colours'] = $colours;
            return $style;
        });

        return view('frontend.shop.orderkitchen.doors_replacement', compact('styles', 'testimonials'));
    }

    public function kitchenCupboardDoorsReplacement() {
        $styles = Style::where('status', '1')->get();
        // foreach ($styles as $style) {
        //     $colourIds = Product::where('parent_category_id', 1)->where('style_id', $style->id)->where('status', 'active')->groupBy('colour_id')->pluck('colour_id');
        //     $style['colours'] = $colourIds;
        // }
        // First, fetch all products that match parent_category_id and status
        $products = Product::where('parent_category_id', 1)
                    ->where('status', 'active')
                    ->get(['style_id', 'colour_id']);

        // Group products by style_id
        $groupedProducts = $products->groupBy('style_id');

        $styles = $styles->map(function ($style) use ($groupedProducts) {
            $colours = $groupedProducts->get($style->id)?->pluck('colour_id')->unique()->values() ?? collect();
            $style['colours'] = $colours;
            return $style;
        });
        $testimonials = Testimonial::whereNull('style_id')->get();

        return view('frontend.shop.orderkitchen.kitchen_cupboard_doors_replacement', compact('styles', 'testimonials'));
    }

    public function kitchenCabinetDoorsReplacement() {
        $styles = Style::where('status', '1')->get();
        // foreach ($styles as $style) {
        //     $colourIds = Product::where('parent_category_id', 1)->where('style_id', $style->id)->where('status', 'active')->groupBy('colour_id')->pluck('colour_id');
        //     $style['colours'] = $colourIds;
        // }
        // First, fetch all products that match parent_category_id and status
        $products = Product::where('parent_category_id', 1)
                    ->where('status', 'active')
                    ->get(['style_id', 'colour_id']);

        // Group products by style_id
        $groupedProducts = $products->groupBy('style_id');

        $styles = $styles->map(function ($style) use ($groupedProducts) {
            $colours = $groupedProducts->get($style->id)?->pluck('colour_id')->unique()->values() ?? collect();
            $style['colours'] = $colours;
            return $style;
        });
        $testimonials = Testimonial::whereNull('style_id')->get();

        return view('frontend.shop.orderkitchen.kitchen_cabinet_doors_replacement', compact('styles', 'testimonials'));
    }

    public function orderComponentFilter(Request $request) {
        try {
            $category = Category::with('testimonials', 'faqs')->where('slug', $request->slug)->firstOrFail();
            $children = Category::where('parent_category_id', $category->id)->pluck('id')->toArray();

            $colours = Colour::where('status', 1);
            $heights = Product::whereIn('category_id', $children)
                        ->where('status', 'active')
                        ->where('height', '!=', '');
            $widths = Product::whereIn('category_id', $children)
                        ->where('status', 'active')
                        ->where('width', '!=', '');

            $types = Product::where('status', 'active')
                        ->where('width', '!=', '');
                        
            if (!empty($request->style_ids)) {
                $colours = $colours->whereIn('id', Product::whereIn('style_id', $request->style_ids)->where('status', 'active')->pluck('colour_id')->unique());
                $heights = $heights->whereIn('style_id', $request->style_ids);
                $widths = $widths->whereIn('style_id', $request->style_ids);
            } else {
                $colours = $colours->whereIn('id', Product::whereIn('category_id', $children)->where('status', 'active')->pluck('colour_id')->unique());
            }
            if (!empty($request->colour_ids)) {
                if(!empty($request->colour_style_ids)) {
                    $heights = $heights->whereIn('style_id', $request->colour_style_ids);
                    $widths = $widths->whereIn('style_id', $request->colour_style_ids);
                }
                $heights = $heights->whereIn('colour_id', $request->colour_ids);
                $widths = $widths->whereIn('colour_id', $request->colour_ids);
            } else if (!empty($request->colour_style_ids)) {
                $heights = $heights->whereIn('style_id', $request->colour_style_ids);
                $widths = $widths->whereIn('style_id', $request->colour_style_ids);
            }
            if (!empty($request->height_ids)) {
                if(!empty($request->height_style_ids)) {
                    $widths = $widths->whereIn('style_id', $request->height_style_ids);
                }
                if(!empty($request->height_colour_ids)) {
                    $widths = $widths->whereIn('colour_id', $request->height_colour_ids);
                }
                $widths = $widths->whereIn('height', $request->height_ids);
            } else {
                if (!empty($request->height_style_ids)) {
                    $heights = $heights->whereIn('style_id', $request->height_style_ids);
                }
                if (!empty($request->height_colour_ids)) {
                    $heights = $heights->whereIn('colour_id', $request->height_colour_ids);
                }
            }
            if (!empty($request->type_ids)) {
                $colours = $colours->whereIn('id', Product::whereIn('category_id', $request->type_ids)->where('status', 'active')->pluck('colour_id')->unique());
            } else {
                $colours = $colours->whereIn('id', Product::whereIn('category_id', $children)->where('status', 'active')->pluck('colour_id')->unique());
            }
            $heights = $heights->select('height', DB::raw('COUNT(*) as count'))->groupBy('height');
            $widths = $widths->select('width', DB::raw('COUNT(*) as count'))->groupBy('width');
            
            return response()->json([
                'status' => true,
                'colours' => $colours->get(),
                'heights' => $heights->get(),
                'sizes' => $widths->get(),
                'types' => $types
            ]);
        } catch (\Exception $e) {
            dd($e);
            return response()->json([
                'status' => false,
                'colours' => [],
                'heights' => [],
                'sizes' => []
            ]);
        }
    }

    public function kitchenNamePage()
    {
        return view('frontend.shop.orderkitchen.kitchen-name-page');
    }
}
