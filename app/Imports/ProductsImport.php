<?php

namespace App\Imports;

use App\Models\Assembly;
use App\Models\Category;
use App\Models\Colour;
use App\Models\Product;
use App\Models\Style;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ProductsImport implements ToCollection, WithChunkReading
{

    public $productId;

    public function __construct($productId) {
        $this->productId = $productId;
    }

    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        try {
            foreach ($rows as $index => $row) {
                if (empty($row[0])) {
                    continue;
                }

                if ($row[0] == 'Serial Number (0)') {
                    continue;
                }
                // $product = Product::where('product_code', $row[0])->first();
    
                // if (!empty($product)) {
                //     continue;
                // }
    
                // echo "<pre>";
                // print_r($row[1]);
                // echo "</pre>";

                $sheetSerialNumber = $row[0];
                $sheetProductCode = $row[1];
                $sheetStatus = (!empty($row[2]) && ($row[2] == 'in_active' || $row[2] == 'In_Active')) ? 'in_active' : 'active';
                $sheetFullTitle = $row[3];
                $sheetShortTitle = trim($row[4]);
                $sheetParentCategoryId = trim($row[5]);
                $sheetChildCategory = $row[6];
                $sheetPrice = $row[7];
                $sheetDiscount = $row[8];
                $sheetStyle = trim($row[9]);
                $sheetColour = $row[10];
                $sheetFinish = $row[11];
                $sheetAssembly = trim($row[12]) == 'Flatpack' ? 'Flat Pack' : trim($row[12]);
                $sheetDimensions = $row[13];
                $sheetHeight = $row[14];
                $sheetHeightTwo = $row[15];
                $sheetHeightThree = $row[16];
                $sheetUnitWidth = $row[17];
                $sheetWidthTwo = $row[18];
                $sheetWidthThree = $row[19];
                $sheetWidthFour = $row[20];
                $sheetWidthFive = $row[21];
                $sheetDepth = $row[22];
                $sheetDepthTwo = $row[23];
                $sheetLength = $row[24];
                $sheetWeight = $row[25];
                $sheetChildCatDesc = $row[26];
                $sheetProductDesc = $row[27];
                $sheetProductImg = $row[28];
                $sheetProductImgTwo = $row[29];
                $sheetProductImgThree = $row[30];
                $sheetProductImgFour = $row[31];
                $sheetParentSubCategory = !empty($row[32]) ? $row[32] : null;
    
                $parent_category = Category::find($sheetParentCategoryId);
                $category = Category::where('name', $sheetChildCategory)->first();
                if (!empty($parent_category) && !empty($sheetParentCategoryId)) {
                    if (empty($category) && !empty($sheetChildCategory)) {
                        $category = new Category();
                        $category->name = $sheetChildCategory;
                        $category->slug = str_replace(' ', '-', strtolower($sheetChildCategory));
                        $category->description = $sheetProductDesc;
                        $category->parent_category_id = $parent_category->id;
                        $category->save();
                    } else {
                        $category->name = $sheetChildCategory;
                        $category->slug = str_replace(' ', '-', strtolower($sheetChildCategory));
                        $category->description = $sheetProductDesc;
                        $category->parent_category_id = $parent_category->id;
                        $category->save();
                    }
                } else {
                    $category = new Category();
                    $category->name = $sheetChildCategory;
                    $category->slug = str_replace(' ', '-', strtolower($sheetChildCategory));
                    $category->description = $sheetProductDesc;
                    $category->parent_category_id = $parent_category->id ?? null;
                    $category->save();
                }
                $style = Style::where('name', $sheetStyle)->first();
    
                if (empty($style) && !empty($sheetStyle)) {
                    $style = new Style();
                    $style->name = $sheetStyle;
                    $style->slug = str_replace(' ', '-', strtolower($sheetStyle));
                    $style->save();
                }
    
                if (!empty($sheetColour)) {
                    $trade_colour = null;
                    $finishing = '';
    
                    if ($sheetFinish === 'Gloss') {
                        $trade_colour = "SuperGloss $sheetColour";
                        $finishing = 'Gloss';
                    } elseif ($sheetFinish === 'Matt') {
                        $trade_colour = "UltraMatt $sheetColour";
                        $finishing = 'Matt';
                    } elseif ($sheetFinish === 'Standard MFC') {
                        $trade_colour = "Standard $sheetColour";
                        $finishing = 'Standard MFC';
                    }
    
                    if (!empty($finishing)) {
                        $trade_colour = trim($trade_colour);
                        $colour = Colour::where('trade_colour', $trade_colour)->first();
    
                        if (empty($colour)) {
                            $colour = new Colour();
                            $colour->name = $sheetColour;
                            $colour->finishing = $finishing;
                            $colour->trade_colour = $trade_colour;
                            $colour->save();
                        }
                    } else {
                        $colour = Colour::where('name', $sheetColour)->first();
                        if (empty($colour)) {
                            $colour = new Colour();
                            $colour->name = $sheetColour;
                            $colour->save();
                        }
                    }
                }
    
                $assembly = Assembly::where('name', $sheetAssembly)->first();
    
                if (empty($assembly) && !empty($sheetAssembly)) {
                    $assembly = new Assembly();
                    $assembly->name = $sheetAssembly;
                    $assembly->slug = str_replace(' ', '-', strtolower($sheetAssembly));
                    $assembly->save();
                }
    
                $product = Product::where('serial_number', $sheetSerialNumber)->where('product_code', $sheetProductCode)->first();
    
                if (empty($product)) {
                    $product = new Product();
                    $product->product_code = $sheetProductCode;
                    $product->serial_number = $sheetSerialNumber;
                    $product->slug = str_replace(' ', '-', strtolower($sheetFullTitle));
                    $product->short_title = $sheetShortTitle;
                    $product->full_title = $sheetFullTitle;
                    $product->product_description = $sheetProductDesc;
                    if (empty(trim($sheetPrice))) {
                        $product->price = 0;
                        // skip this row
                        // continue;
                    } else {
                        $price = $sheetPrice;
                        // Remove anything that is not a number or a decimal point
                        $sanitized_price = preg_replace('/[^0-9.]/', '', $price);
                        // Optionally, you can cast it to a float or integer
                        $sanitized_price = (float) $sanitized_price;
                        $product->price = $sanitized_price;
                    }
                    // $product->price = $sheetParentCategoryId;
                    $product->discounted_percentage = empty(trim($sheetDiscount)) ? 0 : $sheetDiscount;
    
                    if ($sheetDiscount >= 0 && $sheetDiscount <= 100) {
                        $discountPercentage = $sheetDiscount;
                        $discountedPrice = $product->price * (1 - ($discountPercentage / 100));
                        $product->discounted_price = $discountedPrice;
                    } else {
                        $product->discounted_price = $sheetParentCategoryId;
                    }
                    
                    $product->parent_category_id = $parent_category ? $parent_category->id : null;
                    $product->category_id = $category ? $category->id : null;
                    $product->style_id = $style ? $style->id : null;
                    $product->colour_id = isset($colour) && $colour ? $colour->id : null;
    
                    $product->assembly_id = $assembly ? $assembly->id : null;

                    $product->dimensions = $sheetDimensions;
                    
                    // 3 heights
                    $product->height = trim(preg_replace('/[^0-9]/', '', $sheetHeight));
                    $product->second_height = trim(preg_replace('/[^0-9]/', '', $sheetHeightTwo));
                    $product->third_height = trim(preg_replace('/[^0-9]/', '', $sheetHeightThree));

                    // 4 widths
                    $product->width = trim(preg_replace('/[^0-9]/', '', $sheetUnitWidth));
                    $product->second_width = trim(preg_replace('/[^0-9]/', '', $sheetWidthTwo));
                    $product->third_width = trim(preg_replace('/[^0-9]/', '', $sheetWidthThree));
                    $product->fourth_width = trim(preg_replace('/[^0-9]/', '', $sheetWidthFour));
                    $product->fifth_width = trim(preg_replace('/[^0-9]/', '', $sheetWidthFive));
                    
                    // 2 depths
                    $product->depth = trim(preg_replace('/[^0-9]/', '', $sheetDepth));
                    $product->second_depth = trim(preg_replace('/[^0-9]/', '', $sheetDepthTwo));

                    $product->length = trim(preg_replace('/[^0-9]/', '', $sheetLength));
                    $product->weight = trim(preg_replace('/[^0-9]/', '', $sheetWeight));
                    
                    // 4 images
                    $product->image_path = $sheetProductImg;
                    $product->second_image_path = $sheetProductImgTwo;
                    $product->third_image_path = $sheetProductImgThree;
                    $product->fourth_image_path = $sheetProductImgFour;

                    $product->status = $sheetStatus;
                    $product->product_file_id = $this->productId;
                    $product->parent_sub_category = $sheetParentSubCategory;
                    $product->save();
                } else {
                    $product->product_code = $sheetProductCode;
                    $product->slug = str_replace(' ', '-', strtolower($sheetFullTitle));
                    $product->short_title = $sheetShortTitle;
                    $product->full_title = $sheetFullTitle;
                    $product->product_description = $sheetProductDesc;
                    if (empty(trim($sheetPrice))) {
                        $product->price = 0;
                        // skip this row
                        // continue;
                    } else {
                        $price = $sheetPrice;
                        // Remove anything that is not a number or a decimal point
                        $sanitized_price = preg_replace('/[^0-9.]/', '', $price);
                        // Optionally, you can cast it to a float or integer
                        $sanitized_price = (float) $sanitized_price;
                        $product->price = $sanitized_price;
                    }
                    // $product->price = $sheetParentCategoryId;
                    $product->discounted_percentage = empty(trim($sheetDiscount)) ? 0 : $sheetDiscount;
    
                    if ($sheetDiscount >= 0 && $sheetDiscount <= 100) {
                        $discountPercentage = $sheetDiscount;
                        $discountedPrice = $product->price * (1 - ($discountPercentage / 100));
                        $product->discounted_price = $discountedPrice;
                    } else {
                        $product->discounted_price = $sheetPrice;
                    }
                    
                    $product->parent_category_id = $parent_category ? $parent_category->id : null;
                    $product->category_id = $category ? $category->id : null;
                    $product->style_id = $style ? $style->id : null;
                    $product->colour_id = isset($colour) && $colour ? $colour->id : null;
    
                    $product->assembly_id = $assembly ? $assembly->id : null;

                    $product->dimensions = $sheetDimensions;
                    
                    // 3 heights
                    $product->height = trim(preg_replace('/[^0-9]/', '', $sheetHeight));
                    $product->second_height = trim(preg_replace('/[^0-9]/', '', $sheetHeightTwo));
                    $product->third_height = trim(preg_replace('/[^0-9]/', '', $sheetHeightThree));

                    // 5 widths
                    $product->width = trim(preg_replace('/[^0-9]/', '', $sheetUnitWidth));
                    $product->second_width = trim(preg_replace('/[^0-9]/', '', $sheetWidthTwo));
                    $product->third_width = trim(preg_replace('/[^0-9]/', '', $sheetWidthThree));
                    $product->fourth_width = trim(preg_replace('/[^0-9]/', '', $sheetWidthFour));
                    $product->fifth_width = trim(preg_replace('/[^0-9]/', '', $sheetWidthFive));
                    
                    // 2 depths
                    $product->depth = trim(preg_replace('/[^0-9]/', '', $sheetDepth));
                    $product->second_depth = trim(preg_replace('/[^0-9]/', '', $sheetDepthTwo));

                    $product->length = trim(preg_replace('/[^0-9]/', '', $sheetLength));
                    $product->weight = trim(preg_replace('/[^0-9]/', '', $sheetWeight));
                    
                    // 3 images
                    $product->image_path = $sheetProductImg;
                    $product->second_image_path = $sheetProductImg;
                    $product->third_image_path = $sheetProductImg;

                    $product->status = $sheetStatus;
                    $product->product_file_id = $this->productId;
                    $product->parent_sub_category = $sheetParentSubCategory;
                    $product->save();
                }
            }
    
            return;
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function chunkSize(): int
    {
        return 100;
    }
}
