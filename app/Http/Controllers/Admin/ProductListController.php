<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductList;

class ProductListController extends Controller
{
    public function ProductListByRemark(Request $request){

        $remark = $request->remark;
        return ProductList::where('remark',$remark)->get();

    }

    public function ProductListByCategory(Request $request){
        $category = $request->category;
        return ProductList::where('category',$category)->get();

    }

    public function ProductListBySubCategory(Request $request){
        $category = $request->category;
        $Subcategory = $request->subcategory;
        return ProductList::where('category',$category)->where('subcategory',$Subcategory)->get();


    }
}
