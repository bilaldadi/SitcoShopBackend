<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategories(){

        $categories = Category::all();
        $categoriesDetails = [];

        foreach ($categories as $category){

            $subcategory = SubCategory::where('category_name',$category['category_name'])->get();

            $item = [
                'category_name' => $category['category_name'],
                'category_image' => $category['category_image'],
                'subcategory_name' => $subcategory
            ];
            array_push($categoriesDetails,$item);
        }

        return $categoriesDetails;

    }
}
