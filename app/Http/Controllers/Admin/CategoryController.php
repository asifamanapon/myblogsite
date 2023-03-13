<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;
use Illuminate\Support\Carbon;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() : View
    {
      $categoryData = Category::all();
      return view('admin.category', compact('categoryData'));
    }

    public function update(Request $request)
    {
      Category:: insert([

        'name' => $request->name,
        'description' => $request->description,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),

      ]);

      return redirect()->route('admin.category');
    }

   

    
}
