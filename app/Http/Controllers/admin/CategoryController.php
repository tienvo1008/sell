<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequets;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getList()
    {
        return view('admin.category.list');
    }

    public function getAdd()
    {
        return view('admin.category.add');
    }
    public function postAdd(CategoryRequets $requets)
    {
        $cate = new Category;
        $cate->name = $requets->txtCateName;
        $cate->alias = $requets->txtCateName;
        $cate->order = $requets->txtOrder;
        $cate->parent_id = 1;
        $cate->keywords = $requets->txtKeyword;
        $cate->description = $requets->txtDescription;

        $cate->save();

        return redirect()->route('admin.cate.list')->with(['flash_level'=>'success',
            'flash_message'=>'Add category success']);
    }
}
